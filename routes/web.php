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

Route::get('/', 'PagesController@getIndex');
Route::get('/contact', 'PagesController@getContact');
Route::get('/shop', 'PagesController@getShop');
Route::get('/product/{id}', 'PagesController@getProductDetails');
Route::get('/checkout', 'PagesController@getCheckout');
Route::get('/login', 'PagesController@getLogin');
Route::get('/register', 'PagesController@getRegister');


//======================================/
//        ADMIN ROUTES
// ==================================== /




//======================================/
//        CLIENT ROUTES
// ==================================== /



//======================================/
//        CART & WISHLIST ROUTES
// ==================================== /


Route::get('/wishlist', 'WishListController@getWishList');
Route::get('/cart', 'CartController@getCart');



//======================================/
//        GET IMAGES ROUTES
// ==================================== /

