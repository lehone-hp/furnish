<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = $this->current_admin();
        $categories = Category::all();
        return view('admin.categories.index', compact('categories', 'admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'category' => 'required|string|max:50'
        ]);

        if ($validator->fails()) {
            \Session::flash('error', "Invalid category name please try another");
            return redirect()->back();
        }
        else{
            $category = new Category();
            $category->name = $request->category;
            $category->slug = str_slug($request->category);


            $category->save();
            \Session::flash('success', 'Category was successfully created');
            return redirect('admin/categories');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = $this->current_admin();
        $category = Category::find($id);
        return view('admin.categories.single', compact('category', 'admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = \Validator::make($request->all(), [
            'category' => 'required|string|max:50'
        ]);

        if ($validator->fails()) {
            \Session::flash('error', "Invalid category name please try another");
            return redirect()->back();
        }
        else{
            $category = Category::find($id);
            $category->name = $request->category;
            $category->slug = str_slug($request->category);

            $category->update();
            \Session::flash('success', 'Category was successfully updated');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::Find($id);
        Product::whereCategoryId($id)->update(['category_id' => null]);

        $category->delete();

        \Session::flash('success', 'Category was successfully deleted');
        return redirect()->route('categories.index');

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
