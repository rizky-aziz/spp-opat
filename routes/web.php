<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/kelas', 'KelasController@index');
    Route::post('/kelas/tambah', 'KelasController@tambah');
    Route::patch('/kelas/{id}/ubah', 'KelasController@ubah');
    Route::delete('/kelas/{id}/hapus', 'KelasController@hapus');

    Route::get('/pengguna', 'PenggunaController@index');
    Route::post('/pengguna/tambah', 'PenggunaController@tambah');
    Route::patch('/pengguna/{id}/ubah', 'PenggunaController@ubah');
    Route::delete('/pengguna/{id}/hapus', 'PenggunaController@hapus');

    Route::get('/periode', 'PeriodeController@index');
    Route::post('/periode/tambah', 'PeriodeController@tambah');
    Route::patch('/periode/{id}/ubah', 'PeriodeController@ubah');
    Route::delete('/periode/{id}/hapus', 'PeriodeController@hapus');

    Route::get('/siswa', 'SiswaController@index');
    Route::post('/siswa/tambah', 'SiswaController@tambah');
    Route::patch('/siswa/{id}/ubah', 'SiswaController@ubah');
    Route::delete('/siswa/{id}/hapus', 'SiswaController@hapus');

    Route::get('/tagihan', 'TagihanController@index');
    Route::post('/tagihan/tambah', 'TagihanController@tambah');
    Route::patch('/tagihan/{id}/ubah', 'TagihanController@ubah');
    Route::delete('/tagihan/{id}/hapus', 'TagihanController@hapus');
    Route::get('/', 'BerandaController@index');

    Route::get('/beranda', 'BerandaController@index');
});

Route::middleware(['auth', 'petugas'])->group(function () {
    Route::get('/transaksi', 'TransaksiController@index');
    Route::post('/transaksi/bayar', 'TransaksiController@bayar');
    Route::get('/', 'BerandaController@index');

    Route::get('/beranda', 'BerandaController@index');
});


// Login
Route::get('/user', function () {
    return view('Users.index');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
