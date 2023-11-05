<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('/', without controller it is a route closure);
Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/dashboard', [<define controller & method name>]);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/posts', function () {
    return view('posts.index');
});
