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
Route::get('/', 'users\home@show');
Route::get('/Contact', 'users\contact@show');

Route::get('/Shop', 'users\shop@show');
Route::put('/Shop/filter', 'users\shop@filter');
Route::put('/Shop/warna', 'users\shop@list_warna');
Route::put('/Shop/ukuran', 'users\shop@list_ukuran');
Route::get('/Product_detail/{id}', 'users\shop_detail@show');
Route::put('/Product_detail', 'users\shop_detail@get_barang');
Route::post('/Product_detail/{id}', 'users\shop_detail@post_barang');

Route::get('/Cart', 'users\cart@show');
Route::put('/Cart', 'users\cart@cekJson');
Route::get('/Checkout', 'users\checkout@show');

Route::get('/Account', 'users\login_register@show');
Route::get('/Profile', 'users\profile@show');

Route::get('/Logout', function () {
    Session::flush();
});

Route::get('/CekSession', function () {
    dd(Session::get('cart'));
});