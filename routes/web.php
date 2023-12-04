<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SiswaController;
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


Route::resource('/informasi', \App\Http\Controllers\InformasiController::class);

Route::resource('/laporan', \App\Http\Controllers\LaporanController::class);
Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/guru/{id}', [SiswaController::class, 'show'])->name('siswa.show');

