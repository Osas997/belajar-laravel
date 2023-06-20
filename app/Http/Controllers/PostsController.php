<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('detail', [
            "title" => "Detail Post",
            "posts" => $post
        ]);
    }
}
