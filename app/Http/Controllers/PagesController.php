<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\OrderItem;
use App\Product;
use App\Pursar;
use App\UnifiedPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Compound;

class PagesController extends Controller
{
    protected $_KEY = '';
    protected $_SECRET = '';

    public function __construct()
    {
        $this->_KEY = config('app.pursar_key');
        $this->_SECRET = config('app.pursar_secret');
    }

    public function getIndex()
    {

        $new_arrivals = Product::take(8)->orderBy('created_at', 'DESC')->get();
        return view('index', compact('new_arrivals'));
    }

    public function getAbout()
    {

    }

    public function getContact()
    {
        return view('contact');
    }

    public function getShop($cat = null)
    {
        $products = [];
        if ($cat) {
            $category = Category::where('slug', $cat)->first();
            if ($category) {
                $products = Product::where('category_id', $category->id)
                    ->orderBy("created_at", "DESC")
                    ->get();
            }
        } else {
            $products = Product::orderBy("created_at", "DESC")->get();
        }

        $categories = Category::orderBy("name", "ASC")->get();
        return view('shop', compact('products', 'categories'));
    }

    public function getProductDetails($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $related_products = [];

        if ($product) {
            $related_products = Product::where('category_id', $product->category_id)->get();
        }

        return view('product-details', compact('product', 'related_products'));
    }

    public function getCheckout()
    {
        $user = Auth::user();
        return view('checkout', compact('user'));
    }

    public function placeOrder(Request $request)
    {
        request()->validate([
            'country'   => 'required',
            'firstname' => 'required',
            'lastname'  => 'required',
            'address'   => 'required',
            'city'      => 'required',
            'state'     => 'required',
            'zip'       => 'required',
            'email'     => 'required|email',
            'phone'     => 'required',
        ]);

        $order = new Order();
        $order->order_id = time();
        $order->amount_total = \Cart::getSubTotal();
        $order->payment_method = 'UnifiedPay';
        $order->user_id = Auth::id();
        $order->payment_status = 'pending';
        $order->save();

        foreach (\Cart::getContent() as $item) {
            $order_item = new OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id = $item->id;
            $order_item->amount = $item->price;
            $order_item->quantity = $item->quantity;
            $order_item->user_id = Auth::id();
            $order_item->save();
        }
        \Cart::clear();

        /*$unified_pay = new UnifiedPay(env('UNIFIEDPAY_KEY', $this->_KEY),
            env('UNIFIEDPAY_SECRET', $this->_SECRET));

        $response = $unified_pay->pay($order->amount_total, 'XAF', 'en',
            route('payment_return'),
            route('payment_return'),
            $order->order_id);

        if ($response) {
            if ($response->status == 'failed') {
                session()->flash('error', 'An error occurred while processing the payment');
                return redirect()->back();
            } elseif ($response->status == 'success') {
                return redirect()->away($response->link);
            }
        }*/


        session()->flash('success', 'Order successfully placed');
        return redirect()->route('order_detail', ['order_id'=>$order->order_id]);
    }

    public function getRegister()
    {
        return view('register');
    }

    public function getLogin()
    {
        return view('login');
    }

    //return the image from storage folder
    public function getProductImages($image)
    {
        $path = storage_path('app/public/products') . "/" . $image;
        if (!\File::exists($path)) abort(404);
        $file = \File::get($path);
        $type = \File::mimeType($path);
        $response = \Response::make($file, 200);
        $response->header('Content-Type', $type);
        return $response;
    }

    public function getUsersImages($image)
    {
        $path = storage_path('app/public/users') . "/" . $image;
        if (!\File::exists($path)) abort(404);
        $file = \File::get($path);
        $type = \File::mimeType($path);
        $response = \Response::make($file, 200);
        $response->header('Content-Type', $type);
        return $response;
    }

    public function paymentReturn(Request $request)
    {
        //dd($request->all());
        //exit;

        $invoice_id = $request->invoiceId;
        $order = Order::where('order_id', $invoice_id)->first();

        $transactionId = $request->transactionId;
        $checksum = $request->checksum;

        if ($order) {
            $unified_pay = new UnifiedPay(env('UNIFIEDPAY_KEY',  $this->_KEY),
                env('UNIFIEDPAY_SECRET',  $this->_SECRET));

            $status = $unified_pay->checkStatus($transactionId);
            if ($status->status == 'paid') {
                $order->payment_status = 'completed';
                $order->save();
            }

            return redirect()->route('order_detail', ['order_id'=>$order->order_id]);
        } else {
            abort(404);
        }

    }

    public function orderDetail($order_id)
    {
        $order = Order::where('order_id', $order_id)->first();
        if (!$order_id) {
            abort(404);
        }

        $qr_code = null;
        $invoice = null;
        if ($order->payment_status == 'pending') {
            $pursar = new Pursar($this->_KEY, $this->_SECRET);
            $pursar->setInvoiceId($order_id);
            $pursar->setAmount($order->amount_total);
            $pursar->setDescription("Web payment Order: ".$order_id);
            $response = $pursar->createInvoice();

            if ($response->success == '00') {
                session()->flash('error', $response->message);
            } else {
                if ($response->invoice->status == 'paid') {
                    $order->payment_status = 'completed';
                    $order->save();
                }
                $qr_code = $response->qr_code;
                $invoice = $response->invoice;
            }
        }

        return view('order', compact('order', 'qr_code', 'invoice'));
    }


    public function checkInvoiceStatus($invoice_id)
    {
        $pursar = new Pursar($this->_KEY, $this->_SECRET);
        $response = $pursar->checkInvoiceStatus($invoice_id);

        return $response;
    }
}
