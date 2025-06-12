<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kertasController extends Controller
{
    public function kertas()
    {
    	// mengambil data dari table kertas
    	$kertas = DB::table('kertas')->paginate(10);

    	// mengirim data kertas ke view index
    	return view('tambahkertas',['kertas' => $kertas]);

    }

    public function cari(Request $request)
    {
    // menangkap data pencarian
    $cari = $request->cari;

    // mengambil data dari table kertas sesuai pencarian
    $kertas = DB::table('kertas')
        ->where('merkkertas', 'like', "%" . $cari . "%")
        ->paginate();

    // mengirim data ke view
    return view('tambahkertas', ['kertas' => $kertas]);
    }

    // method untuk edit data kertas
    public function edit($ID)
    {
	// mengambil data Kertas berdasarkan id yang dipilih
	$kertas = DB::table('kertas')
    ->where('ID','=',$id) //khusus tanda = (boleh ga di tulis)
    ->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['kertas' => $kertas]);

    }

    public function tambahkertas()
    {
    return view('kertas.tambah');
    }

}
