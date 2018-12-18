<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Product;
use App\User;
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
        $products = Product::all();
        $users = User::all();
        $admin = $this->current_admin();
        return view('admin.index')->withAdmin($admin)
            ->withUsers($users)->withProducts($products);
    }

    // function to logout admin
    public function logoutAdmin()
    {
        return redirect('/admin/login')->withCookie(cookie()->forget('_furnish_admin'));
    }


    //get profile of admin

    public function getProfile(){
        $admin = $this->current_admin();
        return view('admin.profile')->withAdmin($admin);
    }

    public function updateProfile(Request $request){

        $this->validate(request(), [
            'name' => 'bail|required',
            'email' => 'bail|required|string',
            'password' => 'confirmed|min:6',
        ]);


        $admin = $this->current_admin();
        $admin->name = $request->name;
        $admin->email = $request->email;

        if($request->password){
            $admin->password = \Hash::make($request->password);
        }
        $admin->update();
        session()->flash("success", "Account updated successfully!");
        return back();

    }

    public function updateProfilePic(Request $request){
        $admin = $this->current_admin();
        if($admin){
            $pic = '';
            //getting banner one and storing
            if($request->hasFile('image')) {
                $path = storage_path('app/public/users');
                \File::isDirectory($path) or \File::makeDirectory($path, 0777, true, true);
                $image = $request->file('image');
                $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

                $oldfile2 = $admin->profile_pic;
                if(file_exists($path.'/'.$oldfile2)){
                    \File::delete($path.'/'.$oldfile2);
                }
                $image->move($path,$filename);
                $admin->profile_pic = $filename;
                $pic = $filename;
            }
            $admin->update();

            return response()->json([
                "msg" => "Successfully updated profile picture",
                "image" => $pic
            ], 200);

        }
        else{
            return response()->json([
                "msg" => "Oops no such client",
            ]);
        }

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
