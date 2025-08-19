<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function form()
    {
        return view('umur.form');
    }
    public function sukses()
    {
        return "Anda berhasil masuk";
    }
    public function proses(Request $request)
    {
        // membuat validasi pada form.
        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:30'], 
            'umur' => ['required', 'numeric', 'min:1', 'max:100'], 
        ]);
    }
}
