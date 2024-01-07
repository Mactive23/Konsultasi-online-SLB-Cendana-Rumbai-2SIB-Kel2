<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
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


Route::middleware(['guest'])->group(function(){

Route::get('/',[SesiController::class,'index'])->name('login');
Route::post('/',[SesiController::class,'login']);

});

Route::get('/home',function(){
    return redirect('/admin');
});


Route::middleware(['auth'])->group(function(){

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/admin',[AdminController::class,'admin'])->middleware('userAkses:admin');
Route::get('/admin/guru',[AdminController::class,'guru'])->middleware('userAkses:guru');
Route::get('/admin/orangtua',[AdminController::class,'orangtua'])->middleware('userAkses:orangtua');

Route::get('/logout',[SesiController::class, 'logout']);
});

