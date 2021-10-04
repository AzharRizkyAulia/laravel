<?php

use App\Http\Controllers\DataSiswaController;
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
    return 'Hello World';
});
Route::get('tambah', function () {
    $tambah = 30 + 30;
    return $tambah;
});
Route::get('kurang', function () {
    $kurang = 30 - 10;
    return $kurang;
});
Route::get('kali', function () {
    $kali = 30 * 3;
    return $kali;
});
Route::get('bagi', function () {
    $bagi = 30 / 3;
    return $bagi;
});

//parameter waib
Route::get('/nama-pemilik/{nama}/{tahun}', function ($nama, $tahun) {
    return 'Nama Pemilik : ' .$nama .
    '<br> Tahun Lahir : ' . $tahun
    ;
});

// optional parameter
Route::get('/nama-saya/{nama?}', function ($nama = null) {
    return 'Nama Saya : ' .$nama;
});

Route::get('/hitung-luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1,$tinggi = 1) {
    $luas = 0.5 * $alas * $tinggi;
    return 'Nilai Alas : ' .$alas. 
    '<br>Nilai Tinggi : ' .$tinggi.
    '<br>Hasil Luas Segitiga : ' . $luas
    ;
});

//Route group
Route::group(['prefix'=>'jurusan'], function(){
    Route::get('/', function () {
        return 'Hello World';
    });
    Route::get('/kelas/{namaKelas}', function ($namaKelas) {
        return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
        return $nama;
    });
});

Route::get('data-siswa', [DataSiswaController::class, 'datasiswa']);
Route::get('data-siswi', [DataSiswaController::class, 'datasiswi']);
Route::get('nama/{nama?}', [DataSiswaController::class, 'nama']);

Route::resource('user', UserController::class);