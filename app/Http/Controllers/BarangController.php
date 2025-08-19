<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // silakan masukan logika aplikasii.
        // return "Ini adalah respon index dari controller barang.";
        return view('nama_halaman');
    }

    public function createBarang(){
        return "ini adlah form untuk menambahkan barang baru";
    }

}
