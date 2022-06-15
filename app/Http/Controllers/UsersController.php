<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->model = app(User::class);
    }

    public function allUsers()
    {
        return $this->model->allUsers();
    }

    public function store(Request $request)
    {
        return $this->model->store($request);
    }
}
