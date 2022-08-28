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
    return view('home');
    // tes
});

Route::get('/about', function () {
    return view('about', [
        "name" => "gan",
        "email" => "anggerelegant7@gmail.com",
        "image" => "anton ego.jpg"
    ]);
    // tes
});

Route::get('/rates', function () {
    return view('rates');
    // tes
});