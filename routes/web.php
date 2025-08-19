<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// output : ini adalah respon fahmi
Route::get('fahmi', function () {
    return "Ini adalah respon fahmi";
})->name('respon-fahmi');



Route::get('about', function () {
    return view('about');
})->name('halaman-about');

// Route dengan parameter
Route::get('mobil/{merek}', function ($mobil) {
    $merek_mobil = $mobil;
    return view('mobil', compact('merek_mobil'));
})->name('parameter.mobil');

// Route parameter optional
Route::get('motor/{parameter?}', function ($motor = "honda beat") {
    return "saya punya motor Mereknya : " . $motor;
})->name('parameter.motor');



// membuat group
// untuk memanggil : domain/training/nama-uri
Route::prefix('training')->group(function () {
    Route::get('mtcna', function () {
        return "ini adalah halaman mtcna";
    });
    Route::get('mtcre', function () {
        return "ini adalah halaman mtcre";
    });

    // group baru.
    Route::prefix('programming')->group(function () {

        Route::get('laravel', function () {
            return "ini adalah halaman laravel";
        });
        // menampilkan output halaman.
        Route::get('azis', function () {
            return view('halaman');
        })->name('halaman-azis');
    });

    Route::get('comptia', function () {
        return "ini adalah halaman comptia";
    });
});

// Route::get('barang', 'BarangController@index');

// memanggil perintah yang ada di controller.
Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('barang/create', [BarangController::class, 'createBarang'])->name('barang.create');


Route::resource('kendaraan', KendaraanController::class);

Route::prefix('umur')->group(function(){
    Route::get('form-umur', [AgeController::class, 'form'])
    ->name('umur.form');
    Route::get('sukses', [AgeController::class, 'sukses'])
    ->name('umur.sukses');
    
    // proses data
     Route::post('proses', [AgeController::class, 'proses'])
    ->name('umur.proses');
});