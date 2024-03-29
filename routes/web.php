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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/bid-product', function () {
    return view('frontend.pages.bid-product');
});

Route::get('/best-bid', function () {
    return view('frontend.pages.best-bid');
});

Route::get('/products', function () {
    return view('frontend.pages.products');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});