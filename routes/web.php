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

Route::get('/rates', function () {
    $rate_posts = [
        [
            "title" => "Code Geass",
            "slug" => "code-geass",
            "author" => "lelouch",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ex quo obcaecati, deserunt mollitia laborum animi quisquam ipsam, aliquid unde alias, repudiandae porro! Expedita modi laudantium inventore aliquid id dolorem laborum? Eius quis iusto, dolorem dolor, quod cupiditate libero odit nobis veritatis, porro nostrum in. Impedit temporibus ad vel nisi laudantium, praesentium ea reprehenderit architecto aperiam blanditiis voluptas voluptatum. Nulla quibusdam iusto provident. Quas accusantium, doloribus iusto repudiandae, voluptates iste voluptas repellat odit ea qui eum illo quidem eligendi deleniti!"
        ],
        [
            "title" => "Inception",
            "slug" => "inception",
            "author" => "Caprio",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ex quo obcaecati, deserunt mollitia laborum animi quisquam ipsam, aliquid unde alias, repudiandae porro! Expedita modi laudantium inventore aliquid id dolorem laborum? Eius quis iusto, dolorem dolor, quod cupiditate libero odit nobis veritatis, porro nostrum in. Impedit temporibus ad vel nisi laudantium, praesentium ea reprehenderit architecto aperiam blanditiis voluptas voluptatum. Nulla quibusdam iusto provident. Quas accusantium, doloribus iusto repudiandae, voluptates iste voluptas repellat odit ea qui eum illo quidem eligendi deleniti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum omnis eum doloremque quam, beatae optio id fugiat consequatur eligendi hic quibusdam quis minus vitae rerum, sunt tenetur, ab earum perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe hic sint nam quos aliquid, alias quo accusantium, necessitatibus a mollitia delectus accusamus placeat illo voluptate unde magnam suscipit dolores fugit?"
        ]
    ];

    return view('rates', [
        "title" => "Rates",
        "rates" => $rate_posts
    ]);
});

// halaman single rate
Route::get('rates/{slug}', function ($slug) {
    $rate_posts = [
        [
            "title" => "Code Geass",
            "slug" => "code-geass",
            "author" => "lelouch",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ex quo obcaecati, deserunt mollitia laborum animi quisquam ipsam, aliquid unde alias, repudiandae porro! Expedita modi laudantium inventore aliquid id dolorem laborum? Eius quis iusto, dolorem dolor, quod cupiditate libero odit nobis veritatis, porro nostrum in. Impedit temporibus ad vel nisi laudantium, praesentium ea reprehenderit architecto aperiam blanditiis voluptas voluptatum. Nulla quibusdam iusto provident. Quas accusantium, doloribus iusto repudiandae, voluptates iste voluptas repellat odit ea qui eum illo quidem eligendi deleniti!"
        ],
        [
            "title" => "Inception",
            "slug" => "inception",
            "author" => "Caprio",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ex quo obcaecati, deserunt mollitia laborum animi quisquam ipsam, aliquid unde alias, repudiandae porro! Expedita modi laudantium inventore aliquid id dolorem laborum? Eius quis iusto, dolorem dolor, quod cupiditate libero odit nobis veritatis, porro nostrum in. Impedit temporibus ad vel nisi laudantium, praesentium ea reprehenderit architecto aperiam blanditiis voluptas voluptatum. Nulla quibusdam iusto provident. Quas accusantium, doloribus iusto repudiandae, voluptates iste voluptas repellat odit ea qui eum illo quidem eligendi deleniti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum omnis eum doloremque quam, beatae optio id fugiat consequatur eligendi hic quibusdam quis minus vitae rerum, sunt tenetur, ab earum perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe hic sint nam quos aliquid, alias quo accusantium, necessitatibus a mollitia delectus accusamus placeat illo voluptate unde magnam suscipit dolores fugit?"
        ]
    ];

    $new_post = [];
    foreach ($rate_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    };

    return view('rate', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});
