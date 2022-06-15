<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UploadFilesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('posts')->group(function () {
    Route::get('', [PostsController::class, 'allPosts']);
    Route::post('', [PostsController::class, 'createPost']);
});
