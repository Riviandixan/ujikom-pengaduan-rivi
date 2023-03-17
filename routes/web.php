<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
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

Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Pengaduan
Route::resource('pengaduan', PengaduanController::class);

// Tanggapan
Route::resource('tanggapan', TanggapanController::class);

// Petugas
Route::resource('petugas', PetugasController::class);

// Masyarakat
Route::resource('masyarakat', MasyarakatController::class);

// Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('cetak_pdf', [LaporanController::class, 'cetak_pdf'])->name('cetak_pdf');
Route::get('pengaduan/cetak/{id}', [PengaduanController::class, 'pdf'])->name('pengaduan.cetak');