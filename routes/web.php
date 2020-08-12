<?php

use Illuminate\Support\Facades\Route;

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

// users
Route::get('/', function () {
    return view('users/konten/v_home');
});
Route::get('/Contact', function () {
    return view('users/konten/v_contact');
});

Route::get('/Shop', function () {
    return view('users/konten/v_shop');
});
Route::get('/Product_detail', function () {
    return view('users/konten/v_shop_detail');
});

Route::get('/Cart', function () {
    return view('users/konten/v_cart');
});
Route::get('/Checkout', function () {
    return view('users/konten/v_checkout');
});

Route::get('/Account', function () {
    return view('users/konten/v_login_register');
});
Route::get('/Profile', function () {
    return view('users/konten/v_profile');
});