<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $random = random_int(100,999);

        // Barang::create([
        //     'nama_barang' => 'laptop',
        //     'merk' => 'Macbook Pro 2022',
        //     'kode_unik' => 'MAC_'.$random,
        //     'stok' => 30,
        //     'harga' => '30000000',
        //     'kategori' => 'elektronik',
        // ]);

        Barang::factory()->count(100)->create();

    }
}
