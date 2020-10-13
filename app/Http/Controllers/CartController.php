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
    }

    public function listCartContent() {

            $cartItems = \Cart::getContent();

            return response()->json([
                "items" => $cartItems,
                "cart_count" => $cartItems->count(),
                "total" => \Cart::getTotal(),
            ], 200);

    }

    public function clearCart(){
            \Cart::clear();
            return response()->json([
                "msg" => "Successfully cleared cart",
            ], 200);

    }

    public function removeFromCart(Request $request) {
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
    }

    public function updateQuantity(Request $request) {


            $product = Product::where('slug', $request->slug)->first();

            if ($product) {
                $itemId = $product->id;

                \Cart::update($itemId, array(
                    'quantity' => array(
                        'relative' => false,
                        'value' => (int) $request->quantity,
                    ),
                ));

                $item = \Cart::get($itemId);

                return response()->json([
                    "item" => $item,
                    "items" => \Cart::getContent(),
                    "cart_count" => \Cart::getContent()->count(),
                    "total" => \Cart::getTotal(),
                    "msg" => "Successfully updated item quantity",
                ], 200);
            } else {
                // product does not exists (very rare case but should be handled)
                return response()->json([
                    "msg" => 'Oops product does not exists'
                ], 404);

            }


    }
}
