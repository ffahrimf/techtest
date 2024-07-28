<?php

use App\Http\Controllers\{AuthController, StartController, DashboardController, MobilController, PendudukController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route login
// Route::get('/', [StartController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/', [StartController::class, 'index']);

// route mobil
Route::resource('/mobil', MobilController::class)->middleware('auth');
Route::get('/print', [MobilController::class, 'printMobil'])->middleware('auth');

// route penduduk
Route::resource('/penduduk', PendudukController::class)->middleware('auth');
Route::get('/print-penduduk', [PendudukController::class, 'printPenduduk'])->middleware('auth');
