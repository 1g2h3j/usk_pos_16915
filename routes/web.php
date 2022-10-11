<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
    return view('admin.index');
});

Route::resource('user', UserController::class);
Route::get('/user/{user}/delete',[UserController::class,'delete']);

Route::resource('barang', BarangController::class);
Route::get('/barang/{barang}/delete',[BarangController::class,'delete']);

Route::resource('transaksi', TransaksiController::class);