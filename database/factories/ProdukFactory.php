<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nama_produk' => $this->faker->words(3, true), // Membuat 3 kata acak
        'deskripsi' => $this->faker->sentence(),      // Membuat satu kalimat acak
        'harga' => $this->faker->numberBetween(10000, 1000000), // Angka acak antara 10rb - 1jt
    ];
    }
}
