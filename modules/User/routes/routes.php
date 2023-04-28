<?php
use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\UserController;

Route::prefix('/users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
});
