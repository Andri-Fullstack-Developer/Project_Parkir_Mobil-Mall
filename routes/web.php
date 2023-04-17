<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PmasukController;
use App\Http\Controllers\PkeluarController;

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

Route::get('/Petugas_Masuk', function () {
    return view('PMasuk.pmasuk');
});

Route::get('/Petugas_Keluar', function () {
    return view('Pkeluar.pmasuk');
});

Route::get('/Petugas_Keluar', [PkeluarController::class, 'index']);
Route::post('/Petugas_Keluar', [PkeluarController::class, 'create']);
Route::get('/login_petugas', [LoginController::class, 'formlogin'])->name('login_petugas');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/postlogin', function () {
    return redirect()->route('login_petugas')->with('error', 'Silahkan login untuk masuk kedalam admin');
});

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [PmasukController::class, 'index'])->name('home');
});

//Route::get('/dasboard', [PmasukController::class], 'index')->name('dasboard');
Route::get('/Pmasuk', [PmasukController::class, 'create'])->name('Pmasuk');
Route::post('/simpan', [PmasukController::class, 'store'])->name('simpan');

Route::delete('/delete/{id}',[PmasukController::class, 'destroy']);

