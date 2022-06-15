<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::prefix('posts')->group(function () {
    Route::get('', [PostsController::class, 'allPosts']);
    Route::post('', [PostsController::class, 'store']);
});