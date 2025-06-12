<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KertasController;


// pembahasan java: import java.io (use: di php)
Route::get('/', function () {
    return view('welcome');
});

//pertemuan 12
Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);


//Pertemuan 11
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});


//PR Pertemuan 11
Route::get('/frontend', function () {
    return view('frontend');
});


Route::get('/boostrap1', function () {
    return view('boostrap1');
});

Route::get('/bostrap2', function () {
    return view('bostrap2');
});

Route::get('/font', function () {
    return view('font');
});

Route::get('/fontfallbacks', function () {
    return view('fontfallbacks');
});

Route::get('/fontfamily', function () {
    return view('fontfamily');
});

Route::get('/fontshorthand', function () {
    return view('fontshorthand');
});

Route::get('/fontwebsafe', function () {
    return view('fontwebsafe');
});

Route::get('/formets', function () {
    return view('formets');
});

Route::get('/googlefont', function () {
    return view('googlefont');
});

Route::get('/Greatfontpairings', function () {
    return view('Greatfontpairings');
});

Route::get('/indexets', function () {
    return view('indexets');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/objectposition', function () {
    return view('objectposition');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/template1', function () {
    return view('template1');
});

Route::get('/tugasbootstrap1', function () {
    return view('tugasbootstrap1');
});

Route::get('/tugasbootstrap2', function () {
    return view('tugasbootstrap2');
});

Route::get('/tugaslayout', function () {
    return view('tugaslayout');
});

Route::get('/tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('/tugaslogin', function () {
    return view('tugaslogin');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD Kertas
Route::get('/kertas', [kertasController::class, 'kertas']);
Route::get('/kertas/tambah', [KertasController::class, 'tambahkertas']);
Route::get('/kertas/cari', [kertasController::class, 'cari']);
Route::get('/kertas/tambah', [kertasController::class, 'tambahkertas']);

