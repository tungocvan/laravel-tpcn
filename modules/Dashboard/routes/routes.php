<?php 
 use Illuminate\Support\Facades\Route;
 use Modules\Dashboard\src\Http\Controllers\DashboardController;
 Route::middleware(['web','dashboard.middleware'])->prefix('/dashboard')->group(function(){
     Route::get('/', [DashboardController::class, 'index']);
 });