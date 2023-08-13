<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        if (Post::all()) {
            return view('post', [
                "title" => "Single Post",
                "post" => $post
            ]);
        } else {
            return view('post_not_found');
        }
    }
}
