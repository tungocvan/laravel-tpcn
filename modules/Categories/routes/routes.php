<?php
use Illuminate\Support\Facades\Route;
use Modules\Categories\src\Http\Controllers\CategoriesController;
Route::middleware(['web', 'categories.middleware'])
    ->prefix('/categories')
    ->group(function () {
        Route::get('/', [CategoriesController::class, 'index']);
        Route::get('/add', [CategoriesController::class, 'create']);
        Route::get('/getMenu', [CategoriesController::class, 'getMenu']);
    });
