<?php 
 use Illuminate\Support\Facades\Route;
 use Modules\Users\src\Http\Controllers\UsersController;
 Route::middleware(['web','users.middleware'])->prefix('/users')->group(function(){
     Route::get('/', [UsersController::class, 'index']);
 });