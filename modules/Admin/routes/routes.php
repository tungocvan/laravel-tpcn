<?php 
 use Illuminate\Support\Facades\Route;
 use Modules\Admin\src\Http\Controllers\AdminController;
 Route::middleware(['web','admin.middleware'])->prefix('/admin')->group(function(){
     Route::get('/', [AdminController::class, 'index']);
 });