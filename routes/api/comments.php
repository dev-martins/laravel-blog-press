<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

Route::prefix('comments')->group(function () {
    Route::get('', [CommentsController::class, 'allComments']);
    Route::post('', [CommentsController::class, 'store']);
});