<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::get('/',[HomeController::class,'index']);
Route::resource('home',HomeController::class);
Route::prefix('admin')->group(
    function()
    {
        Route::get('/login',[AdminController::class,'login_admin'])->name('admin.login');
    }
);
Route::resource('/admin',AdminController::class);