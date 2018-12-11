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
use Illuminate\Support\Facades\Hash;
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

        $request->session()->flash('success', 'Profile successfully update');
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

    public function postPassword(Request $request) {
        $messages = [
            'current-password.required' => 'Please enter old password',
            'password.required' => 'Please enter password',
        ];

        $this->validate($request, [
            'current-password' => 'required',
            'password' => 'required|min:6|confirmed',
        ], $messages);

        $data = $request->all();

        $current_password = Auth::User()->password;
        if(! Hash::check($data['current-password'], $current_password)) {
            $request->session()->flash("error","Your current password does not match with the password you provided");
            return redirect()->back();
        }

        $user = Auth::user();
        $user->password = Hash::make($data['password']);
        $user->update();

        $request->session()->flash('success', 'Password successfully changed');
        return back();

    }
}