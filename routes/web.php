<?php

use App\Http\Controllers\PemilihCerdasController;
use App\Http\Controllers\CalonPemilihCerdasController;
use App\Http\Controllers\HomeController;
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


Route::resource('pemilih_cerdas', 'App\Http\Controllers\PemilihCerdasController');
Route::get('/pemilih_cerdas/{id}', 'PemilihCerdasController@show')->name('pemilih_cerdas.show');
Route::get('/pemilih_cerdas/{id}', 'PemilihCerdasController@edit')->name('pemilih_cerdas.edit');

Route::resource('calon_pemilih_cerdas', 'App\Http\Controllers\CalonPemilihCerdasController');
Route::get('/calon_pemilih_cerdas/{id}', 'CalonPemilihCerdasController@show')->name('calon_pemilih_cerdas.show');
Route::get('/calon_pemilih_cerdas/{id}', 'CalonPemilihCerdasController@edit')->name('calon_pemilih_cerdas.edit');

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['web'])->group(function () {
    Route::resource('pemilih_cerdas', PemilihCerdasController::class);
});

Route::middleware(['web'])->group(function () {
    Route::resource('calon_pemilih_cerdas', CalonPemilihCerdasController::class);
});





