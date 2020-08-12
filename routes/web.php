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
Route::get('/Product_detail', 'users\shop_detail@show');

Route::get('/Cart', 'users\cart@show');
Route::get('/Checkout', 'users\checkout@show');

Route::get('/Account', 'users\login_register@show');
Route::get('/Profile', 'users\profile@show');