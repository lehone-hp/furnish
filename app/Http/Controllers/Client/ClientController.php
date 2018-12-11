<?php
/**
 * Created by PhpStorm.
 * User: lehone
 * Date: 12/4/18
 * Time: 12:04 PM
 */

namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller {

    public function getIndex() {
        return view('client.index');
    }

    public function getProfile() {
        $user = Auth::user();
        return view('client.profile', compact('user'));
    }

    public function postProfile(Request $request) {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'max:191'],
            'lastname' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191'],
            'phone' => ['required', 'string'],
            'country' => ['required'],
            'address' => ['required', 'string', 'max:191'],
            'city' => ['required', 'string', 'max:191'],
            'state' => ['required', 'string', 'max:191'],
            'zip' => ['required', 'string'],
        ]);

        $data = $request->all();

        $user = Auth::user();
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->country = $data['country'];
        $user->address = $data['address'];
        $user->city = $data['city'];
        $user->state = $data['state'];
        $user->zip = $data['zip'];
        $user->update();

        return back();

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