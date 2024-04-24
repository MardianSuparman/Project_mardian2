<?php

use Illuminate\Support\Facades\Request;
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
    return view('welcome');
});

// variabel
Route::get('/about', function () {

    $Nama = "Mardian Suparman";
    $JenisKelamin = "Laki-Laki";
    $PendidikanTerakhir = "S2";
    $Pekerjaan = "Pelajar";
    $Alamat = "Alamat";

    return view('DataDiri', compact('Nama','JenisKelamin','PendidikanTerakhir','Pekerjaan','Alamat'));
});

Route::get('/buah', function () {

    $nanas = "Nanas";
    $Mangga = "Mangga";
    $Anggur = "Anggur";
    $Semangka = "Semangka";
    $Nangka = "Nangka";
    $Durian = "Durian";

    return view('Buah', compact('nanas','Mangga','Anggur','Semangka','Nangka','Durian'));
});

// parameter
Route::get('/about2/{nama}/{jenis}', function (Request $request, $nama, $jenis) {

    $Nama = $nama;
    $Jenis = $jenis;
    return view('Data', compact('Nama','Jenis'));
});