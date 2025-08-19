<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // silakan masukan logika aplikasii.
        // return "Ini adalah respon index dari controller barang.";

        $data = Barang::all();

        // return view('halaman', compact('data'));
        return view('halaman', [
            'barang' => $data
        ]);
    }

    public function createBarang(){
        return "ini adlah form untuk menambahkan barang baru";
    }

}
