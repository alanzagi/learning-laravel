<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        if (Post::all()) {
            return view('post', [
                "title" => "Single Post",
                "post" => Post::find($slug)
            ]);
        } else {
            return view('post_not_found');
        }
    }
}
