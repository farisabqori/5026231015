<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SofaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\KaryawanController2;


//import java.io

//System.out.println("Hello World")
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('pertemuan4', function () {
	return view('bootstrap_latihan');
});

Route::get('pertemuan3', function () {
	return view('bootstrap1');
});

Route::get('pertemuan7a', function () {
	return view('js1');
});

Route::get('pertemuan1', function () {
	return view('pertama');
});

Route::get('pertemuan5', function () {
	return view('tugas_linktree');
});

Route::get('pertemuan7b', function () {
	return view('validasi1');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('fronen', function () {
	return view('fronen');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}', [Pegawai2Controller::class,'index']);
Route::get('/formulir', [Pegawai2Controller::class,'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//dataSofa
Route::get('/sofa', [SofaController::class, 'index']);
Route::get('/sofa/tambah', [SofaController::class, 'tambah']);
Route::post('/sofa/store', [SofaController::class, 'store']);
Route::get('/sofa/edit/{id}', [SofaController::class, 'edit']);
Route::post('/sofa/update', [SofaController::class, 'update']);
Route::get('/sofa/hapus/{id}', [SofaController::class, 'delete']);
Route::get('/sofa/cari', [SofaController::class, 'search']);
Route::get('/sofa/detail/{id}', [SofaController::class, 'show']);

//dataKaryawan
// Halaman Index (daftar karyawan)
Route::get('/karyawan', [KaryawanController::class, 'index']);
// Halaman Form Tambah Karyawan
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
// Proses Hapus Data
Route::delete('/karyawan/delete/{kodepegawai}', [KaryawanController::class, 'delete']);

//pagecounter
Route::get('/pagecounter', [CounterController::class, 'index']);

//karyawancontroller2
Route::get('/karyawan2', [KaryawanController::class, 'index']);
Route::get('/karyawan2/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan2/store', [KaryawanController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::post('/karyawan2/update',[KaryawanController::class, 'update']);
Route::get('/karyawan2/hapus/{id}', [KaryawanController::class, 'hapus']);
