<?php

use Illuminate\Support\Facades\Route;
// pembahasan java: import java.io (use: di php)

//pembahasan java: System.out.println("hello world");
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

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});



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
