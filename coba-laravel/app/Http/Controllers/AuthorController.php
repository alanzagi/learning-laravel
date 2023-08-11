<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $author)
    {
        return view('author', [
            'author' => $author,
            'title' => $author->name,
            'posts' => $author->posts
        ]);
    }
}
