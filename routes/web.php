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
Route::get('/shop', 'PagesController@getShop')->name('shop');
Route::get('/product/{id}', 'PagesController@getProductDetails')->name('product.details');
Route::get('/checkout', 'PagesController@getCheckout')->name('checkout');
Route::get('/login', 'PagesController@getLogin')->name('login');
Route::get('/register', 'PagesController@getRegister')->name('register');


//======================================/
//        ADMIN ROUTES
// ==================================== /

Route::get('/admin/login', 'Admin\AdminController@getLogin')->name('admin.login');
Route::post('/admin/login', 'Admin\AdminController@authenticateAdmin')->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/profile', 'Admin\AdminController@getProfile')->name('admin.profile');
    Route::get('/password', 'Admin\AdminController@getPassword')->name('admin.password');


});


//======================================/
//        CLIENT ROUTES
// ==================================== /
Route::group(['prefix' => 'client'], function () {
    Route::get('/dashboard', 'Client\ClientController@getIndex')->name('client.dashboard');
    Route::get('/password', 'Client\ClientController@getPassword')->name('client.password');
    Route::get('/profile', 'Client\ClientController@getProfile')->name('client.profile');
    Route::get('/orders', 'Client\ClientController@getOrders')->name('client.orders');
    Route::get('/orders-detail/{order_id}', 'Client\ClientController@getOrderDetail')->name('client.order-detail');
    Route::get('/wishlist', 'Client\ClientController@getWishlist')->name('client.wishlist');
});



//======================================/
//        CART & WISHLIST ROUTES
// ==================================== /


Route::get('/wishlist', 'WishListController@getWishList')->name('wishlist');
Route::get('/cart', 'CartController@getCart')->name('cart');



//======================================/
//        GET IMAGES ROUTES
// ==================================== /

