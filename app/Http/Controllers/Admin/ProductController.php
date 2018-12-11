<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(20);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'bail|required|unique:products',
            'price' => 'bail|required|numeric|between:0,10000000.99',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->min_order = $request->min_order;
        $product->description = $request->description;

        if(!$request->has('in_stock')){
            $product->in_stock = false;
        }else{
            $product->in_stock = true;
        }

        if($request->hasFile('image')){
            $path = storage_path('app/public/products');
            \File::isDirectory($path) or \File::makeDirectory($path, 0777, true, true);

            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move($path,$filename);
            $product->photo = $filename;
        }

        $product->save();
        \Session::flash('success', 'Product was successfully added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('slug', $id)->first();
        $categories = Category::all();

        return view('admin.products.single',compact('product', 'categories'));

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
        $product = Product::where('slug', $id)->first();
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->old_price = $request->old_price;
        $product->min_order = $request->min_order;
        $product->description = $request->description;

        if(!$request->has('in_stock')){
            $product->in_stock = false;
        }else{
            $product->in_stock = true;
        }

        if($request->hasFile('image')){
            $path = storage_path('app/public/products');
            \File::isDirectory($path) or \File::makeDirectory($path, 0777, true, true);

            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move($path,$filename);
            $oldfile = $product->photo;
            $product->photo = $filename;
            \File::delete($path.'/'.$oldfile);
        }

        $product->update();
        \Session::flash('success', 'Product was successfully updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('slug', $id)->first();
        $oldfile = $product->photo;
        $path = storage_path('app/public/products');

        \File::delete($path.'/'.$oldfile);

        $product->delete();
        \Session::flash('success', 'Product was successfully deleted');
        return redirect()->route('products.index');
    }
}
