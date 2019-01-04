<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//======================================/
//        PAGES ROUTES
// ==================================== /

Route::get('/', 'PagesController@getIndex')->name('index');;
Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/shop/{category?}', 'PagesController@getShop')->name('shop');
Route::get('/product/{slug}', 'PagesController@getProductDetails')->name('product.details');
Route::get('/checkout', 'PagesController@getCheckout')->name('checkout');

//======================================/
//        ADMIN ROUTES
// ==================================== /

Route::get('/admin/login', 'Admin\AdminController@getLogin')->name('admin.login');
Route::get('/admin', 'Admin\AdminController@getIndex')->name('admin');
Route::post('/admin/login', 'Admin\AdminController@authenticateAdmin')->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/profile', 'Admin\AdminController@getProfile')->name('admin.profile');
    Route::post('/profile', 'Admin\AdminController@updateProfile')->name('admin.profile.update');
    Route::get('/password', 'Admin\AdminController@getPassword')->name('admin.password');
    Route::post('/logout', 'Admin\AdminController@logoutAdmin')->name('admin.logout');
    Route::post('/picture/update', 'Admin\AdminController@updatePicture');
    Route::resource('/clients', 'Admin\ClientController');
    Route::resource('/orders', 'Admin\OrderController');
    Route::resource('/products', 'Admin\ProductController');
    Route::resource('/categories', 'Admin\CategoryController');

});


//======================================/
//        CLIENT ROUTES
// ==================================== /

Auth::routes();
Route::group(['prefix' => 'client', 'middleware' => 'auth'], function () {
    Route::get('/logout', function () {
        Auth::logout();
        return redirect("/");
    })->name('client.logout');
    Route::get('/dashboard', 'Client\ClientController@getIndex')->name('client.dashboard');
    Route::get('/password', 'Client\ClientController@getPassword')->name('client.password');
    Route::post('/password', 'Client\ClientController@postPassword')->name('client.password');
    Route::get('/profile', 'Client\ClientController@getProfile')->name('client.profile');
    Route::post('/profile', 'Client\ClientController@postProfile')->name('client.profile');
    Route::get('/orders', 'Client\ClientController@getOrders')->name('client.orders');
    Route::get('/orders-detail/{order_id}', 'Client\ClientController@getOrderDetail')->name('client.order-detail');
    Route::get('/wishlist', 'Client\ClientController@getWishlist')->name('client.wishlist');
});



//======================================/
//        CART & WISHLIST ROUTES
// ==================================== /


Route::get('/wishlist', 'WishListController@getWishList')->name('wishlist');
Route::get('/cart', 'CartController@getCart')->name('cart');
Route::post('/cart/add/item', 'CartController@addToCart')->name('cart.add');
Route::post('/cart/clear', 'CartController@clearCart')->name('cart.clear');
Route::get('/cart/content', 'CartController@listCartContent')->name('cart.content');
Route::post('/cart/remove', 'CartController@removeFromCart')->name('cart.remove');
Route::post('/cart/update/quantity', 'CartController@updateQuantity')->name('cart.update.quantity');


//======================================/
//        GET IMAGES ROUTES
// ==================================== /

Route::get('/products/images/{image}',  'PagesController@getProductImages')->name('product.image');
Route::get('/users/images/{image}',  'PagesController@getUsersImages');
