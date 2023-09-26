<?php

use App\Http\Controllers\SiswaControLLer;
use Illuminate\Support\Facades\Route;

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

Route::get('siswa',[SiswaControLLer::class,'utama']);
Route::get('siswa/tambah',[SiswaControLLer::class,'tambah']);
Route::post('siswa/tambah',[SiswaControLLer::class,'simpan']);
Route::get('siswa/edit/{nisn}',[SiswaControLLer::class,'edit']);
Route::post('siswa/edit/{nisn}',[SiswaControLLer::class,'update']);
Route::get('siswa/hapus/{nisn}',[SiswaControLLer::class,'hapus']);