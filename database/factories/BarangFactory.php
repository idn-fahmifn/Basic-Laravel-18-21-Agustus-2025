<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->word(),
            'merk' => fake()->word(),
            'kode_unik' => fake()->numberBetween(0000, 9999),
            'stok' => fake()->numberBetween(10, 50),
            'harga' => fake()->numberBetween(10000,500000000),
            'kategori' => 'elektronik'
        ];
    }
}
