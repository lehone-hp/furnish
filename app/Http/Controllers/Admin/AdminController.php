<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function getIndex(){
        return redirect('/admin/login');
    }

    public function getLogin(){

        if(\Cookie::get('_furnish_admin') != null){
            return redirect('/admin/dashboard');
        }else{
            return view('admin.login');
        }
    }

    // function to authenticate admin
    public function authenticateAdmin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $admin = Admin::where("email", '=', $email)->first();
        if($admin != null && \Hash::check($password, $admin->password)){
            return redirect('/admin/dashboard')->withCookie(cookie('_furnish_admin', $admin->id));
        }else{
            session()->flash('error', 'Invalid credentials');
            return back();
        }
    }


    // function to display admin dashboard
    public function dashboard(){
        $admin = $this->current_admin();
        return view('admin.index')->withAdmin($admin);
    }

    // function to logout admin
    public function logoutAdmin()
    {
        return redirect('/admin/login')->withCookie(cookie()->forget('_furnish_admin'));
    }



    //return the current logged admin
    public function current_admin()
    {
        $admin = Admin::find(\Cookie::get('_furnish_admin'));
        if($admin != null){
            return $admin;
        }else{
            return redirect('/');
        }
    }


}
