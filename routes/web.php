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

Route::view('/', 'pages.home')->name('home');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/about-us', 'pages.about-us')->name('aboutUs');


Route::group(['middleware' => 'admin'], function() {
    Route::view('/cms/login', 'pages.cms.admin-login')->name('cms.login');
    Route::view('/cms', 'pages.cms.dashboard')->name('cms.dashboard');
    Route::get('/cms/customer', 'UserController@indexCustomer')->name('cms.customer');
    Route::get('/cms/order', 'OrderController@index')->name('cms.order');
    Route::view('/cms/order/detail', 'pages.cms.order-detail');

});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@register')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
    Route::post('/storeRegister', 'RegisterController@registerStore')->name('register.store');
    Route::view('/profile', 'pages.profile')->name('profile');
});




Route::get('/kategori', 'CategoryController@index')->name('category');
Route::get('/kategori/{slug}', 'CategoryController@detail')->name('category.detail');

Route::get('/produk', 'ProductController@index')->name('product');
Route::get('/produk/category', 'ProductController@selectCategory')->name('selectCategory');
Route::get('/produk/order', 'ProductController@order')->name('productOrder');
Route::get('/produk/select-product/{slug}/{category_id}', 'ProductController@selectProduct')->name('product.select');
Route::get('/produk/detail', 'ProductController@detailProduct')->name('product.detail');




Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');

    Route::get('/keranjang', 'CartController@index')->name('cart');
    Route::get('/keranjang/pembayaran', 'CartController@checkout')->name('cart.checkout');
    Route::post('/keranjang/tambah', 'CartController@additem')->name('cart.additem');
    Route::get('/produk/order', 'ProductController@order')->name('productOrder');
    Route::get('/pengaturan', 'UserController@setting')->name('user.setting');
});
