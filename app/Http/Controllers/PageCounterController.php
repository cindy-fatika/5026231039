<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageCounter;

class PageCounterController extends Controller
{
    public function tampil()
    {
        $counter = PageCounter::firstOrCreate(['id' => 1], ['jumlah' => 0]);
        $counter->increment('jumlah');

        return view('pagecounter.halaman', ['jumlah' => $counter->jumlah]);
    }
}
