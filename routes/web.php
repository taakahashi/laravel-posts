<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'store']);

Route::post('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'store'])->name('logout');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store']);
