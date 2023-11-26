<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftar-siswa-baru', [App\Http\Controllers\PendaftaranController::class, 'daftar_siswa_baru'])->name('daftar_siswa_baru');
Route::post('/daftar-siswa-baru', [App\Http\Controllers\PendaftaranController::class, 'daftar_siswa_baru_store'])->name('daftar_siswa_baru');
Route::get('/daftar-data-orangtua', [App\Http\Controllers\PendaftaranController::class, 'daftar_data_orangtua'])->name('daftar_data_orangtua');
Route::post('/daftar-data-orangtua', [App\Http\Controllers\PendaftaranController::class, 'daftar_data_orangtua_store'])->name('daftar_data_orangtua');
Route::get('/daftar-syarat', [App\Http\Controllers\PendaftaranController::class, 'daftar_syarat'])->name('daftar_syarat');
Route::post('/daftar-syarat', [App\Http\Controllers\PendaftaranController::class, 'daftar_syarat_store'])->name('daftar_syarat');
Route::get('/success', [App\Http\Controllers\PendaftaranController::class, 'success'])->name('success');
Route::post('/login-kembali', [App\Http\Controllers\PendaftaranController::class, 'login_kembali'])->name('login_kembali');
