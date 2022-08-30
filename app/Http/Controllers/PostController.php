<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('rates', [
            "title" => "Rates",
            "rates" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('rate', [
            "title" => "Single post",
            "post" => Post::find($slug)
        ]);
    }
}
