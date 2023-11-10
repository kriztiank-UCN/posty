<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('/', without controller it is a route closure);
Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/dashboard', [<define controller & method name>]);
// The controller returns the view and logic.
// The name of the route can be used in a link <a href="{{ route('dashboard') }}">Dashboard</a>
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
// Inherits ->name('login');
Route::post('/login', [LoginController::class, 'store']);

// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Inherits ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// posts
Route::get('/posts', [PostController::class, 'index'])->name('posts');
// Inherits ->name('posts'); stores the post in the database
Route::post('/posts', [PostController::class, 'store']);
// Delete post, route model binding, put in the name of the model {post} you want to look up
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');;

// Like posts, route model binding, put in the name of the model {post} you want to look up
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
// Delete unlike posts, route model binding, put in the name of the model {post} you want to look up
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');
