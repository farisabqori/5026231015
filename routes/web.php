<?php

use Illuminate\Support\Facades\Route;
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
