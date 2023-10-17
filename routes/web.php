<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\mataKuliahController;
use App\Http\Controllers\programStudiController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\jadwalKuliahController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/Selamatdatang', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
    //return view('mahasiswa');
//});

Route::get('/matakuliah', [mataKuliahController::class, 'index']);

Route::get('/programstudi', [programStudiController::class, 'index']);

Route::get('/pembayaran', [pembayaranController::class, 'index']);

Route::get('/jadwalkuliah', [jadwalKuliahController::class, 'index']);