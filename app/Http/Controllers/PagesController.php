<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){

        return view('index');
    }

    public function getAbout(){

    }

    public function getContact(){
        return view('contact');
    }

    public function getShop(){
        return view('shop');
    }

    public function getProductDetails($id){
        return view('product-details');
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

}
