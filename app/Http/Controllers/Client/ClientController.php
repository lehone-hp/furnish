<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 12/4/18
 * Time: 12:04 PM
 */

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;

class ClientController extends Controller {

    public function getIndex() {
        return view('client.index');
    }

    public function getProfile() {
        return view('client.profile');
    }

    public function getOrders() {
        return view('client.orders');
    }

    public function getOrderDetail($order_id) {
        return view('client.order_detail');
    }

    public function getWishlist() {
        return view('client.wishlist');
    }

    public function getPassword() {
        return view('client.password');
    }
}