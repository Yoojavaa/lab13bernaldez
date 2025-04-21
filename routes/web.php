<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ──────────────── ROOT URL ──────────────── //
Route::get('/', function () {
    return redirect()->route('posts.index'); // Redirect root to posts index
});

// ──────────────── AUTH ROUTES ──────────────── //
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// ──────────────── PROTECTED ROUTES ──────────────── //
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class); // Handles create, edit, delete, and index
});
