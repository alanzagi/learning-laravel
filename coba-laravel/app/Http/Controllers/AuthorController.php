<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $author)
    {
        return view('posts', [
            'title' => "Post by $author->name",
            'posts' => $author->posts->load(['author', 'category'])
        ]);
    }
}
