<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RombelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page.index');
});

// Program TI & SI & BD
Route::get('/programTI', function () {
    return view('program_jurusan.programTI');
});

Route::get('/programSI', function () {
    return view('program_jurusan.programSI');
});

Route::get('/programBD', function () {
    return view('program_jurusan.programBD');
});

// Profile Dosen TI & SI & BD
Route::get('/profileTI', function () {
    return view('profile_dosen.profileTI');
});

Route::get('/profileSI', function () {
    return view('profile_dosen.profileSI');
});

Route::get('/profileBD', function () {
    return view('profile_dosen.profileBD');
});

// Login
Route::get('/login', function () {
    return view('landing_page.login');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    // Rute lainnya yang memerlukan akses admin...
});

// Rute dengan middleware dosen
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Rute lainnya yang memerlukan akses admin...
});


// Middleware group for authenticated routes

Route::group(['middleware' => ['web']], function () {
    Route::get('/admin/dosen', [DosenController::class, 'index'])->name('dosens.index');
    Route::get('/admin/dosen/create', [DosenController::class, 'create'])->name('dosens.create');
    Route::post('/admin/dosen/store', [DosenController::class, 'store'])->name('dosens.store');
    Route::get('/admin/dosen/{dosen}', [DosenController::class, 'show'])->name('dosens.show');
    Route::get('/admin/dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
    Route::put('/admin/dosen/{dosen}', [DosenController::class, 'update'])->name('dosens.update');
    Route::delete('/admin/dosen/{dosen}',[DosenController::class, 'destroy'])->name('dosens.destroy');
        
    Route::get('/admin/prodi', [ProdiController::class, 'index'])->name('prodis.index');
    Route::get('/admin/prodi/create', [ProdiController::class, 'create'])->name('prodis.create');
    Route::post('/admin/prodi/store', [ProdiController::class, 'store'])->name('prodis.store');
    Route::get('/admin/prodi/{prodi}', [ProdiController::class, 'show'])->name('prodis.show');
    Route::get('/admin/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodis.edit');
    Route::put('/admin/prodi/{prodi}', [ProdiController::class, 'update'])->name('prodis.update');
    Route::delete('/admin/prodi/{prodi}',[ProdiController::class, 'destroy'])->name('prodis.destroy');
        
    Route::get('/admin/rombel', [RombelController::class, 'index'])->name('rombongan_belajars.index');
    Route::get('/admin/rombel/create', [RombelController::class, 'create'])->name('rombongan_belajars.create');
    Route::post('/admin/rombel/store', [RombelController::class, 'store'])->name('rombongan_belajars.store');
    Route::get('/admin/rombel/{rombel}', [RombelController::class, 'show'])->name('rombongan_belajars.show');
    Route::get('/admin/rombel/{rombel}/edit', [RombelController::class, 'edit'])->name('rombongan_belajars.edit');
    Route::put('/admin/rombel/{rombel}', [RombelController::class, 'update'])->name('rombongan_belajars.update');
    Route::delete('/admin/rombel/{rombel}',[RombelController::class, 'destroy'])->name('rombongan_belajars.destroy');
        
    Route::get('/admin/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
    Route::get('/admin/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
    Route::post('/admin/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
    Route::get('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
    Route::get('/admin/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
    Route::put('/admin/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
    Route::delete('/admin/mahasiswa/{mahasiswa}',[MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
});

