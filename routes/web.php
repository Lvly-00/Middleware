<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
<<<<<<< HEAD


Route::get('/dashboard',[AuthController::class, 'dashboard'] )->name('dashboard');
Route::get('/',[ AuthController::class, 'login'])->name('login');
Route::post('/login',[ AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/register',[ AuthController::class, 'register'])->name('register');
Route::post('/register',[ AuthController::class, 'registerPost'])->name('registerPost');
Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');

=======
use App\Http\Middleware\GlobalMiddleware;
use App\Http\Middleware\RouteMiddleware;
use App\Http\Middleware\RouteMiddleware2;



Route::get('/',[ AuthController::class, 'login'])->name('login');
Route::post('/login',[ AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/register',[ AuthController::class, 'register'])->name('register');
Route::post('/register',[ AuthController::class, 'registerPost'])->name('registerPost');
// Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
// Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');

//ASSIGNING MIDDLEWARE TO ROUTES
// Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard')->middleware(RouteMiddleware::class);
// Route::post('/logout',[ AuthController::class, 'logout'])->name('logout')->middleware(RouteMiddleware::class);

//-------------------------------------------------------------------------------------------------------------------------------------
//ARRAY OF MIDDLEWARES IN ROUTES
// Route::get('/dashboard',[AuthController::class, 'dashboard'])
// ->name('dashboard')->middleware(RouteMiddleware::class, RouteMiddleware2::class);

//ARRAY OF MIDDLEWARES IN group ROUTES
// Route::middleware([RouteMiddleware::class, RouteMiddleware2::class])->group(function () {
//     Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
//     Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');
// });

//-------------------------------------------------------------------------------------------------------------------------------------
//EXCLUDING MIDDLEWARES IN specific ROUTES
// Route::middleware([RouteMiddleware::class, RouteMiddleware2::class])->group(function () {
//     Route::get('/dashboard',[AuthController::class, 'dashboard'])
//     ->name('dashboard')->withoutMiddleware(RouteMiddleware2::class);
//     Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');
// });

//EXCLUDING MIDDLEWARES IN group ROUTES
// Route::withoutMiddleware([GlobalMiddleware::class])->group(function () {
//     Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
//     Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');
// });
//-------------------------------------------------------------------------------------------------------------------------------------

//Using Middleware Groups
// Route::middleware(['user'])->group(function () {
//     Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
//     Route::post('/logout',[ AuthController::class, 'logout'])->name('logout');
// });

//-------------------------------------------------------------------------------------------------------------------------------------
//using ALIAS
Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard')->middleware('user');
Route::post('/logout',[ AuthController::class, 'logout'])->name('logout')->middleware('user');
>>>>>>> 1d753ff69f1a9e556002690f1f78256f8dac0772
