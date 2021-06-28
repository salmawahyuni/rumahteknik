<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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
