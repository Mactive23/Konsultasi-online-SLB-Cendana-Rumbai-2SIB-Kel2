<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/Orangtua', \App\Http\Controllers\OrangtuaController::class);
Route::get('/Orangtua', [OrangtuaController::class, 'index'])->name('Orangtua.index');
Route::get('/Orangtua/{id}', [OrangtuaController::class, 'show'])->name('Orangtua.show');
