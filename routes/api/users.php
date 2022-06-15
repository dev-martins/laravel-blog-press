<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('', [UsersController::class, 'allUsers']);
    Route::post('', [UsersController::class, 'store']);
});