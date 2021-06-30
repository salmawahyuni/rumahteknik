<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;


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

Route::get('/biodata', [MahasiswaController::class,'index'])->name('biodata');
Route::get('/create-biodata', [MahasiswaController::class,'create'])->name('create-biodata');
Route::post('/simpan-biodata', [MahasiswaController::class,'store'])->name('simpan-biodata');
Route::get('/edit-biodata/{id}', [MahasiswaController::class,'edit'])->name('edit-biodata');
Route::post('/update-biodata/{id}', [MahasiswaController::class,'update'])->name('update-biodata');
Route::get('/delete-biodata/{id}', [MahasiswaController::class,'destroy'])->name('delete-biodata');