<?php
use App\Http\Controllers\{
    AuthController,
    StartController,
    DashboardController,
    PendudukController,
    PendidikanController,
    PekerjaanController,
    AgamaController,
    JenisKelaminController,
    UmurController,
    JumlahRTController,
    DisabilitasController,
    UserController,MasterPekerjaanController,MasterDisabilitasController
};

use App\Http\Controllers\showcase\{SCPendidikanController,SCPekerjaanController};

use Illuminate\Support\Facades\Route;


// Route untuk login dan registrasi
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
// Route untuk halaman utama
Route::get('/', [StartController::class, 'index']);

Route::get('/scpendidikan', [SCPendidikanController::class, 'index']);
Route::get('/scpekerjaan', [SCPekerjaanController::class, 'index']);

// Route untuk logout, membutuhkan middleware 'auth'
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Route yang memerlukan otentikasi
Route::middleware(['auth', 'cek.level:Admin,Pamekaran,Limusagung,Nanggeleng,Darawati,Mangunjaya,Cimaja,Cimanglid'])->group(function () {
    // Route untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');  

    // Route untuk penduduk
    Route::resource('/penduduk', PendudukController::class);
    
    // Route untuk pendidikan
    Route::get('/pendidikan', [PendidikanController::class,'index']);

    // Route untuk pekerjaan
    Route::get('/pekerjaan', [PekerjaanController::class,'index']);
    
    // Route untuk agama
    Route::get('/agama', [AgamaController::class,'index']);
    
    // Route untuk jenis kelamin
    Route::get('/jeniskelamin', [JenisKelaminController::class,'index']);

    // Route untuk umur
    Route::get('/umur', [UmurController::class,'index']);

    // Route untuk jumlah rt
    Route::get('/jumlahrt', [JumlahRTController::class,'index']);

    // Route untuk disabilitas
    Route::get('/disabilitas', [DisabilitasController::class,'index']);
    
    // Route Master untuk disabilitas
    Route::resource('/mdisabilitas', MasterDisabilitasController::class);
    
});

Route::middleware(['auth', 'cek.level:Admin'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/mpekerjaan', MasterPekerjaanController::class);
});


