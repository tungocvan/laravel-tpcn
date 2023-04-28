<?php 
 use Illuminate\Support\Facades\Route;
 use Modules\Options\src\Http\Controllers\OptionsController;
 Route::prefix('/options')->middleware('options.middleware')->group(function(){
     Route::get('/', [OptionsController::class, 'index']);
 });