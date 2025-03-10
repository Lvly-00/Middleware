<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/dashboard',[AuthController::class, 'dashboard'] )->name('dashboard');
Route::get('/',[ AuthController::class, 'login'])->name('login');
Route::post('/login',[ AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/register',[ AuthController::class, 'register'])->name('register');
Route::post('/register',[ AuthController::class, 'registerPost'])->name('registerPost');
Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');

