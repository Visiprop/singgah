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
    Route::post('/logoutCMS', 'UserController@postLogoutCMS')->name('postLogoutCMS');
    Route::get('/cms', 'CMSController@dashboard')->name('cms.dashboard');
    Route::get('/cms/customer', 'CMSController@customer')->name('cms.customer');
    Route::get('/cms/order', 'OrderController@index')->name('cms.order');
    Route::post('/cms/order/modify/{invoice_id}',  'OrderController@updateOrder')->name('cms.modify.order');
    Route::get('/cms/order/detail/{invoice_id}', 'OrderController@orderDetail')->name('cms.order.detail');

    Route::post('/cms/store', 'InvoiceController@store')->name('invoice.store');
    Route::get('/cms/order/invoice/{id}', 'InvoiceController@invoiceCMSDetail')->name('cms.invoice');
    Route::post('/cms/order/invoice/update/{id}', 'InvoiceController@invoiceCMSUpdate')->name('cms.invoice.update');

});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/cms/login', 'UserController@CMSlogin')->name('cms.login');
    Route::get('/login', 'UserController@login')->name('login');
    Route::get('/register', 'UserController@register')->name('register');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
    Route::post('/loginCMS', 'UserController@postLoginCMS')->name('postLoginCMS');
    Route::post('/storeRegister', 'RegisterController@registerStore')->name('register.store');
});



Route::group(['middleware' => 'visitor'], function() {
    Route::post('/logout', 'UserController@postLogout')->name('postLogout');
    Route::get('/category', 'ProductController@index')->name('product');

    // START CART ROUTE
    Route::get('/cart', 'CartController@cartClient')->name('cartUser');
    Route::get('/cart/{id}', 'CartController@delete')->name('cart.delete');
    Route::get('/listcart', 'CartController@cartList')->name('cart.list');
    // END CART ROUTE

    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::post('/cart/add', 'CartController@additem')->name('cart.additem');

    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::post('/profile/{id}', 'UserController@registerUpdate')->name('registerUpdate');
    Route::post('/order/{id}', 'CartController@addOrder')->name('tambahOrder');
    Route::get('/my-order/{id}', 'CartController@myOrder')->name('myorder');
    Route::get('/invoice/detail/{id}', 'InvoiceController@invoiceClient')->name('invoice.detail');
    Route::post('/invoice/reject/{id}', 'InvoiceController@invoiceReject')->name('invoice.reject');

    Route::get('/product/select-product/{slug}/{id}', 'ProductController@selectProduct')->name('product.select');
    Route::get('/product/my-order/{id}', 'ProductController@order')->name('productOrder');
});
