<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = app(Post::class);
    }

    public function allPosts()
    {
        return $this->model->allPosts();
    }

    public function store(Request $request)
    {
        return $this->model->store($request);
    }
}
