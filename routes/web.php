<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileCotroller;
use App\Http\Controllers\SiswaController;
use App\Models\Nilai;

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

// middleware
Route::middleware(['auth.check'])->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('home');
    // siswa
    Route::get('/siswa',[SiswaController::class,'siswa'])->name('siswa');
    Route::get('/siswa/tambah',[SiswaController::class,'tambah'])->name('siswa_tambah');
    Route::post('/siswa/aksi_tambah',[SiswaController::class,'aksi_tambah'])->name('aksi_tambah_siswa');
    
    // kelas
    Route::get('/kelas',[KelasController::class,'index'])->name('kelas');
    Route::get('/kelas/tambah',[KelasController::class,'tambah'])
    ->name('tambah_kelas');
    Route::post('kelas/aksi_tambah',[KelasController::class,'aksi_tambah'])
    ->name('aksi_tambah')
    ;
    Route::get('kelas/edit/{id}',[KelasController::class,'edit'])
    ->name('edit')
    ;
    Route::post('kelas/hapus/{id}',[KelasController::class,'hapus'])
    ->name('hapus')
    ;
    Route::post('kelas/aksi_edit/{id}',[KelasController::class,'aksi_edit'])
    ->name('aksi_edit');
    
    // halaman nilai
    Route::get('nilai',[NilaiController::class,'index'])->name('nilai');
    
    Route::get('nilai/tambah',[NilaiController::class,'tambah'])->name('nilai_tambah');
    
    Route::post('nilai/aksi_tambah_nilai',[NilaiController::class,'aksi_tambah'])->name('aksi_tambah_nilai');
    
    Route::post('nilai/hapus/{id}',[NilaiController::class,'hapus'])->name('hapus_nilai');
    
    Route::get('nilai/edit/{id}',[NilaiController::class,'edit'])->name('nilai_edit');
    
    Route::post('nilai/aksi_edit/{id}',[NilaiController::class,'aksi_edit'])->name('nilai_aksi_edit');
    
    Route::post('nilai/aksi_edit_nilai',[NilaiController::class,'aksi_edit_nilai'])->name('aksi_edit_nilai');

    // profile
    Route::get('profile',[ProfileCotroller::class,'index'])->name('profile');

    Route::post('aksi_edit_profile',[ProfileCotroller::class,'aksi_edit_profile'])->name('aksi_edit_profile');

    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

// Register

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'aksi_register'])->name('aksi_register');

// Login
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'aksi_login'])->name('aksi_login');



