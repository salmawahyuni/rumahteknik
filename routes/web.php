<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BarangController;


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

Route::get('/registrasi', [LoginController::class,'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,mahasiswa']], function (){
    Route::get('/Dashboard', [DashboardController::class,'index'])->name('dashboard');
});


//biodata untuk mahasiswa
Route::get('/biodata', [MahasiswaController::class,'index'])->name('biodata');
Route::get('/create-biodata', [MahasiswaController::class,'create'])->name('create-biodata');
Route::post('/simpan-biodata', [MahasiswaController::class,'store'])->name('simpan-biodata');
Route::get('/edit-biodata/{id}', [MahasiswaController::class,'edit'])->name('edit-biodata');
Route::post('/update-biodata/{id}', [MahasiswaController::class,'update'])->name('update-biodata');
Route::get('/delete-biodata/{id}', [MahasiswaController::class,'destroy'])->name('delete-biodata');


//transaksi untuk mahasiswa
Route::get('/transaksi', [TransaksiController::class,'index'])->name('transaksi');
Route::get('/create-transaksi', [TransaksiController::class,'create'])->name('create-transaksi');
Route::post('/simpan-transaksi', [TransaksiController::class,'store'])->name('simpan-transaksi');
Route::get('/edit-transaksi/{id}', [TransaksiController::class,'edit'])->name('edit-transaksi');
Route::post('/update-transaksi/{id}', [TransaksiController::class,'update'])->name('update-transaksi');
Route::get('/delete-transaksi/{id}', [TransaksiController::class,'destroy'])->name('delete-transaksi');

//info barang untuk mahasiswa
Route::get('/infobarang', [BarangController::class,'informasi'])->name('infobarang');

//barang untuk admin
Route::get('/barang', [BarangController::class,'index'])->name('barang');
Route::get('/create-barang', [BarangController::class,'create'])->name('create-barang');
Route::post('/simpan-barang', [BarangController::class,'store'])->name('simpan-barang');
Route::get('/edit-barang/{id}', [BarangController::class,'edit'])->name('edit-barang');
Route::post('/update-barang/{id}', [BarangController::class,'update'])->name('update-barang');
Route::get('/delete-barang/{id}', [BarangController::class,'destroy'])->name('delete-barang');

//transaksi untuk admin
Route::get('/transaksipinjam', [TransaksiController::class,'bacadata'])->name('transaksipinjam');
Route::get('/detailtransaksi/{id}', [TransaksiController::class,'detailpinjam'])->name('detailtransaksi');

//biodata mahasiswa untu admin
Route::get('/biodatamhs', [MahasiswaController::class,'lihatdata'])->name('biodatamhs');