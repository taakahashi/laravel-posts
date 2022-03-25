<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts');
