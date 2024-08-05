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
    UserController
};
use Illuminate\Support\Facades\Route;


// Route untuk login dan registrasi
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
// Route untuk halaman utama
Route::get('/', [StartController::class, 'index']);

// Route untuk logout, membutuhkan middleware 'auth'
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Route yang memerlukan otentikasi
Route::middleware(['auth', 'cek.level:Admin,Pamekaran,Limusagung,Nanggeleng,Darawati,Mangunjaya,Cimaja,Cimanglid'])->group(function () {
    // Route untuk dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);    

    // Route untuk penduduk
    Route::resource('/penduduk', PendudukController::class);
    Route::get('/print-penduduk', [PendudukController::class, 'printPenduduk']);
    
    // Route untuk pendidikan
    Route::get('/pendidikan', [PendidikanController::class,'index']);
    Route::get('/print-pendidikan', [PendidikanController::class, 'printPendidikan']);

    // Route untuk pekerjaan
    Route::get('/pekerjaan', [PekerjaanController::class,'index']);
    Route::get('/print-pekerjaan', [PekerjaanController::class, 'printPekerjaan']);
    
    // Route untuk agama
    Route::get('/agama', [AgamaController::class,'index']);
    Route::get('/print-agama', [AgamaController::class, 'printAgama']);
    
    // Route untuk jenis kelamin
    Route::get('/jeniskelamin', [JenisKelaminController::class,'index']);
    Route::get('/print-jeniskelamin', [JenisKelaminController::class, 'printJenisKelamin']);

    // Route untuk umur
    Route::get('/umur', [UmurController::class,'index']);
    Route::get('/print-umur', [UmurController::class, 'printUmur']);

    // Route untuk jumlah rt
    Route::get('/jumlahrt', [JumlahRTController::class,'index']);
    Route::get('/print-jumlahrt', [JumlahRTController::class, 'printJumlahRT']);

    // Route untuk disabilitas
    Route::get('/disabilitas', [DisabilitasController::class,'index']);
    Route::get('/print-disabilitas', [DisabilitasController::class, 'printDisabilitas']);
});

Route::middleware(['auth', 'cek.level:Admin'])->group(function () {
    Route::resource('/users', UserController::class);
});


