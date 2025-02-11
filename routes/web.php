<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::get('/',[HomeController::class,'index']);
Route::resource('home',HomeController::class);
Route::resource('/admin',AdminController::class);