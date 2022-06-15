<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function allPosts(){
        return Post::all();
    }

    public function createPost(Request $request)
    {
        Post::create($request->input());
    }
}
