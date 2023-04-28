<?php
use Illuminate\Support\Facades\Route;
use Modules\Posts\src\Http\Controllers\PostsController;
Route::prefix('/posts')
    ->middleware('posts.middleware')
    ->group(function () {
        Route::get('/', [PostsController::class, 'index']);
    });
