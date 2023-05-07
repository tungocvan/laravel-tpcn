<?php
use Illuminate\Support\Facades\Route;
use Modules\Posts\src\Http\Controllers\PostsController;

Route::middleware(['web'])
    ->prefix('/posts')
    ->group(function () {
        Route::get('/', [PostsController::class, 'index']);
        Route::get('/data', [PostsController::class, 'data'])->name('posts.data');
        Route::get('/edit/{id}', [PostsController::class, 'edit']);
 });

Route::group(['prefix' => 'filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
