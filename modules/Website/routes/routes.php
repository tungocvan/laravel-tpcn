<?php
use Illuminate\Support\Facades\Route;
use Modules\Website\src\Http\Controllers\WebsiteController;
Route::middleware(['web', 'website.middleware'])->group(function () {
    Route::get('/', [WebsiteController::class, 'index']);
    Route::get('/login', [WebsiteController::class, 'index'])->name('login');
    Route::get('/register', [WebsiteController::class, 'index'])->name('register');
    Route::get('/home', [WebsiteController::class, 'freshcart']);
});
