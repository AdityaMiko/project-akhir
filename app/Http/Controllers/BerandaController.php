<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\Respone
     */
    public function index()
    {
        $var_nama = "Raihan Restu";
        return view('HalamanDepan.beranda', compact('var_nama'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tampilkan halaman beranda
        return view('home');
    }
}