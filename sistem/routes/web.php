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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/base', function () {
    return view('base');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/data', function () {
    return view('data');
});