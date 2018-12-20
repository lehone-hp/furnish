<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class PagesController extends Controller
{
    public function getIndex(){

        $new_arrivals = Product::take(8)->orderBy('created_at', 'DESC')->get();
        return view('index', compact('new_arrivals'));
    }

    public function getAbout(){

    }

    public function getContact(){
        return view('contact');
    }

    public function getShop($cat = null){
        $products = [];
        if ($cat) {
            $category = Category::where('slug', $cat)->first();
            if ($category) {
                $products = Product::where('category_id', $category->id)
                    ->orderBy("created_at","DESC")
                    ->get();
            }
        } else {
            $products = Product::orderBy("created_at","DESC")->get();
        }

        $categories = Category::orderBy("name","ASC")->get();
        return view('shop', compact('products', 'categories'));
    }

    public function getProductDetails($slug){
        $product = Product::where('slug', $slug)->first();
        $related_products = [];

        if ($product) {
            $related_products = Product::where('category_id', $product->category_id)->get();
        }

        return view('product-details', compact('product', 'related_products'));
    }

    public function getCheckout(){
        return view('checkout');
    }

    public function getRegister(){
        return view('register');
    }

    public function getLogin(){
        return view('login');
    }

    //return the image from storage folder
    public function getProductImages($image)
    {
        $path = storage_path('app/public/products')  . "/" . $image;
        if (!\File::exists($path)) abort(404);
        $file = \File::get($path);
        $type = \File::mimeType($path);
        $response = \Response::make($file, 200);
        $response->header('Content-Type', $type);
        return $response;
    }

    public function getUsersImages($image)
    {
        $path = storage_path('app/public/users')  . "/" . $image;
        if (!\File::exists($path)) abort(404);
        $file = \File::get($path);
        $type = \File::mimeType($path);
        $response = \Response::make($file, 200);
        $response->header('Content-Type', $type);
        return $response;
    }

}
