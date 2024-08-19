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
    LuasWilayahController,
    DisabilitasController,
    UserController,
    MasterPekerjaanController,
    MasterDisabilitasController,
};

use App\Http\Controllers\showcase\{LapakController,BeritaController};
use App\Http\Controllers\showcase\demografi\{SCPendidikanController, SCPekerjaanController, SCAgamaController, SCJenisKelaminController, SCUmurController, SCLuasWilayahController, SCDisabilitasController};
use App\Http\Controllers\showcase\profile\{SejarahController,VisiMisiController, AparatController};
use Illuminate\Support\Facades\Route;


// Route untuk login dan registrasi
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
// Route untuk halaman utama
Route::get('/', [StartController::class, 'index']);


Route::get('/showcase/lapak', [LapakController::class, 'index']);
Route::get('/showcase/berita', [BeritaController::class, 'index']);

// Grouped Routes Showcase/Demografi
Route::prefix('showcase/demografi')->group(function () {
    Route::get('/pendidikan', [SCPendidikanController::class, 'index']);
    Route::get('/pekerjaan', [SCPekerjaanController::class, 'index']);
    Route::get('/agama', [SCAgamaController::class, 'index']);
    Route::get('/jeniskelamin', [SCJenisKelaminController::class, 'index']);
    Route::get('/umur', [SCUmurController::class, 'index']);
    Route::get('/luaswilayah', [SCLuasWilayahController::class, 'index']);
    Route::get('/disabilitas', [SCDisabilitasController::class, 'index']);
});

// Grouped Routes Showcase/Profile
Route::prefix('showcase/profile')->group(function () {
    Route::get('/visi-misi', [VisiMisiController::class, 'index']);
    Route::get('/sejarah', [SejarahController::class, 'index']);
    Route::get('/aparat', [AparatController::class, 'index']);
    // Add other profile-related routes here
});

// Route untuk logout, membutuhkan middleware 'auth'
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Route yang memerlukan otentikasi
Route::middleware(['auth', 'cek.level:Admin,Pamekaran,Limusagung,Nanggeleng,Darawati,Mangunjaya,Cimaja,Cimanglid'])->group(function () {
    // Route untuk dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route untuk penduduk
    Route::resource('/penduduk', PendudukController::class);

    // Route untuk pendidikan
    Route::get('/pendidikan', [PendidikanController::class, 'index']);

    // Route untuk pekerjaan
    Route::get('/pekerjaan', [PekerjaanController::class, 'index']);

    // Route untuk agama
    Route::get('/agama', [AgamaController::class, 'index']);

    // Route untuk jenis kelamin
    Route::get('/jeniskelamin', [JenisKelaminController::class, 'index']);

    // Route untuk umur
    Route::get('/umur', [UmurController::class, 'index']);

    // Route untuk jumlah rt
    Route::get('/luaswilayah', [LuasWilayahController::class, 'index']);

    // Route untuk disabilitas
    Route::get('/disabilitas', [DisabilitasController::class, 'index']);

    // Route Master untuk disabilitas
    Route::resource('/mdisabilitas', MasterDisabilitasController::class);
});

Route::middleware(['auth', 'cek.level:Admin'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/mpekerjaan', MasterPekerjaanController::class);
});
