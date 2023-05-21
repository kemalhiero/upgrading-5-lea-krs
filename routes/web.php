<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\StudiController;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/login', function () { return view('login'); });

Route::get('/studi', [StudiController::class, 'index']);
Route::get('/studi/{studi}', [StudiController::class, 'show']);
Route::post('/studi/{studi}/tambah', [StudiController::class, 'store_mhs']);
Route::post('/studi/tambah', [StudiController::class, 'store']);
Route::delete('/studi/{id}/{nim}/hapus', [StudiController::class, 'destroy_mhs']);

Route::get('/matkul', [MataKuliahController::class, 'index']);
Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
Route::post('/mahasiswa/tambah',[MahasiswaController::class, 'store']);
Route::delete('/mahasiswa/{mahasiswa}/hapus',[MahasiswaController::class, 'destroy']);
