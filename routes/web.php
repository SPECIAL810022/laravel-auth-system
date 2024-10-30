<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('register',[AuthController::class, 'showRegistration'])->name('register');
Route::post('register',[AuthController::class, 'store'])->name('register.store');

Route::get('login',[AuthController::class, 'showlogin'])->name('login');
Route::post('login',[AuthController::class, 'login'])->name('login.store');

Route::post('/LogOut',[AuthController::class, 'LogOut'])->name('LogOut');
