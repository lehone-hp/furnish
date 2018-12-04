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




//======================================/
//        CLIENT ROUTES
// ==================================== /



//======================================/
//        CART & WISHLIST ROUTES
// ==================================== /


Route::get('/wishlist', 'WishListController@getWishList')->name('wishlist');
Route::get('/cart', 'CartController@getCart')->name('cart');



//======================================/
//        GET IMAGES ROUTES
// ==================================== /

