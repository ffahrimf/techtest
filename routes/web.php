<?php

use App\Http\Controllers\{
    AuthController,
    DashboardController,
    UserController,
};

use Illuminate\Support\Facades\Route;


// Route untuk login dan registrasi
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
// Route untuk halaman utama
// Route::get('/', [StartController::class, 'index']);



// Route untuk logout, membutuhkan middleware 'auth'
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Route yang memerlukan otentikasi
Route::resource('/users', UserController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware('auth')->group(function () {
});
