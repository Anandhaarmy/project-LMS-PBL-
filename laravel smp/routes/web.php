<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\UploadController;

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

Route::get('/beranda',[BerandaController::class, 'index']) -> name('beranda');

Route::get('/data-mahasiswa',[MahasiswaController::class, 'index']) -> name('data-mahasiswa');
Route::get('/create-mahasiswa',[MahasiswaController::class, 'create']) -> name('create-mahasiswa');
Route::post('/simpan-data',[MahasiswaController::class, 'store']) -> name('simpan-data');
Route::get('/edit-mahasiswa/{id}',[MahasiswaController::class, 'edit']) -> name('edit-mahasiswa');
Route::post('/update-mahasiswa/{id}',[MahasiswaController::class, 'update']) -> name('update-mahasiswa');
Route::get('/delete-mahasiswa/{id}',[MahasiswaController::class, 'destroy']) -> name('delete-mahasiswa');

Route::get('/data-guru1',[GuruController::class, 'index']) -> name('data-guru1');
Route::get('/create-guru1',[GuruController::class, 'create']) -> name('create-guru1');
Route::post('/simpan-data1',[GuruController::class, 'store']) -> name('simpan-data1');
Route::get('/edit-guru1/{id}',[GuruController::class, 'edit']) -> name('edit-guru1');
Route::post('/update-guru1/{id}',[GuruController::class, 'update']) -> name('update-guru1');
Route::get('/delete-guru1/{id}',[GuruController::class, 'destroy']) -> name('delete-guru1');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');


Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/tampilan',[TampilanController::class, 'index'])->name('tampilan');

Route::get('/data-file',[UploadController::class, 'index'])->name('data-file');
Route::get('/create-file',[UploadController::class, 'create'])->name('create-file');
Route::post('/simpan-file',[UploadController::class, 'store'])->name('simpan-file');
Route::get('/edit-file/{id}',[UploadController::class, 'edit']) -> name('edit-file');
Route::post('/update-file/{id}',[UploadController::class, 'update']) -> name('update-file');
Route::get('/delete-file/{id}',[UploadController::class, 'destroy']) -> name('delete-file');