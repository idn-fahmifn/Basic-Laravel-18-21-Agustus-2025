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
        return view('umur.sukses');
    }
    public function proses(Request $request)
    {
        // membuat validasi pada form.
        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:30'], 
            'umur' => ['required', 'numeric', 'min:1', 'max:100'], 
        ],[
            // error nama
            'nama.required' => 'Nama harus lu isi',
            'nama.string' => 'Nama harus berupa text',
            'nama.min' => 'Nama minimal 3 karakter',
            'nama.max' => 'Nama maksimal 30 karakter',
            // error nama
            'umur.required' => 'Umur harus lu isi',
            'umur.numeric' => 'Umur harus berupa angka',
            'umur.min' => 'Umur minimal 1 Tahun',
            'umur.max' => 'Umur maksimal 100 Tahun',
        ]);

        // session data umur untuk dikirim ke middlwware
        $request->session()->put('age', $request->umur);

        // mengrahkan ke route sukses.
        return redirect()->route('umur.sukses')
        ->with('success', 'Berhasil masuk');


    }
}
