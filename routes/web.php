<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

use App\Http\Controllers\JadwalKonsultasiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');

// routes/web.php

Route::get('/jadwal_konsultasi', [JadwalKonsultasiController::class, 'index'])->name('jadwal_konsultasi.index');
Route::get('/jadwal_konsultasi/create', [JadwalKonsultasiController::class, 'create'])->name('jadwal_konsultasi.create');
Route::post('/jadwal_konsultasi', [JadwalKonsultasiController::class, 'store'])->name('jadwal_konsultasi.store'); // Perhatikan perubahan pada rute ini
Route::get('/jadwal_konsultasi/edit/{id}', [JadwalKonsultasiController::class, 'edit'])->name('jadwal_konsultasi.edit');
Route::put('/jadwal_konsultasi/update/{id}', [JadwalKonsultasiController::class, 'update'])->name('jadwal_konsultasi.update');
Route::delete('/jadwal_konsultasi/destroy/{id}', [JadwalKonsultasiController::class, 'destroy'])->name('jadwal_konsultasi.destroy');

Route::get('/layout', function () {
    return view('layout.main');
});

Route::get('/layout', function () {
    return view('layout.main1');
});



