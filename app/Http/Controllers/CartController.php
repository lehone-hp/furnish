<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart(){
        $items = \Cart::getContent();
        $subtotal = \Cart::getTotal();

        return view('cart', compact('items', 'subtotal'));
    }


    // function to add item to cart
    public function addToCart(Request $request){

        if(request()->ajax()){
            $product = Product::where('slug',$request->slug)->first();

            if($product){
                $arrayPdt =  array(
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => (int) $request->qty,
                    'attributes' => array(
                        'img' => $product->photo,
                        'slug' => $product->slug,
                        'old_price' => $product->old_price,
                        'min_order' => $product->min_order,
                        'description' => $product->description,
                    )
                );

                \Cart::add($arrayPdt);
                $items = \Cart::getContent();
                $subtotal = \Cart::getTotal();

                return response()->json([
                    "msg" => "Successfully added item to cart",
                    "data" => $arrayPdt,
                    "items" => $items,
                    "cart_count" => $items->count(),
                    "subtotal" => $subtotal,
                ], 200);

            }else{
                // product does not exists (very rare case but should be handled)
                return response()->json([
                    "msg" => 'Oops product does not exists'
                ], 404);

            }

        }else{
            return response()->json([
                "msg" => 'Server error! Please refresh the page.'
            ], 404);
        }
    }

    public function listCartContent() {
        if(request()->ajax()){

            $cartItems = \Cart::getContent();

            return response()->json([
                "items" => $cartItems,
                "cart_count" => $cartItems->count(),
                "total" => \Cart::getTotal(),
            ], 200);

        }else{
            return response()->json([
                "msg" => 'Server error! Please refresh the page.'
            ], 404);
        }
    }

    public function clearCart(){
        if(request()->ajax()){
            \Cart::clear();
            return response()->json([
                "msg" => "Successfully cleared cart",
            ], 200);

        }else{
            // trying to access this route via some other method we block ;)
            return response()->json([
                "msg" => 'Server error! Please refresh the page.'
            ], 404);
        }
    }

    public function removeFromCart(Request $request) {
        if(request()->ajax()){
            $product = Product::where('slug', $request->slug)->first();

            if($product){
                \Cart::remove($product->id);
                return response()->json([
                    "msg" => "Successfully removed item",
                ], 200);
            }else{
                // product does not exists (very rare case but should be handled)
                return response()->json([
                    "msg" => 'Oops product does not exists'
                ], 404);

            }
        }else{
            // trying to access this route via some other method we block ;)
            return response()->json([
                "msg" => 'Server error! Please refresh the page.'
            ], 404);
        }
    }
}
