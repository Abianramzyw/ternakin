<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produkternak>
 */
class ProdukternakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_produk' => $this->faker->name(),
            'kategori_produk' => $this->faker->name(),
            'harga_produk' => mt_rand(1000, 100000),
            'stok_produk' => mt_rand(10, 100),
            'deskripsi_produk' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn($p) => "<p>$p<p>")->implode(''),
            'user_id' => mt_rand(1, 5),
            //////////cobacoba////////
            'slug' => $this->faker->name(),
        ];
    }
}