<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pembayarantransaksi>
 */
class PembayarantransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'harga_produk' => mt_rand(1000, 100000),
            'kuantitas_produk' => mt_rand(1000, 100000),
            'biaya_pengiriman' => mt_rand(1000, 100000),
            'biaya_admin' => mt_rand(1000, 100000),
            //////cobacoba/////
            // 'slug' => $this->faker->name(),
        ];
    }
}
