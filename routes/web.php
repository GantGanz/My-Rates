<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
    // tes
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "gan",
        "email" => "anggerelegant7@gmail.com",
        "image" => "anton ego.jpg"
    ]);
});

Route::get('/rates', [PostController::class, 'index']);

// halaman single rate
Route::get('rates/{slug}', [PostController::class, 'show']);
