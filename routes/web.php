<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

//route CRUD
Route::get('/pegawai',[PegawaiController::class,'index']);

Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);

Route::post('/pegawai/store',[PegawaiController::class,'store']);

Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);

Route::post('/pegawai/update',[PegawaiController::class, 'update']);

Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);