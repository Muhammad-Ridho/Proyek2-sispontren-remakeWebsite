<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KelasController;

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
    return view('layoutSispontren.index');
});

Route::resource('pembayaran', PembayaranController::class);

Route::resource('karyawan', KaryawanController::class);

Route::resource('santri', SantriController::class);

Route::resource('kelas', KelasController::class);

