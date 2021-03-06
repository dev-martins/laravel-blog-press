<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->model = app(Comment::class);
    }

    public function allComments()
    {
        return $this->model->allComments();
    }

    public function store(Request $request)
    {
        return $this->model->store($request);
    }
}
