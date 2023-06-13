<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datatransaksi>
 */
class DatatransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alamat_transaksi' => $this->faker->address(),
            'no_rekening' => mt_rand(1000, 100000),
            'tanggal_transaksi' => $this->faker->date(),
            'pembayarantransaksi_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'user_role_id' => mt_rand(1, 3),
            'dataproduk_id' => mt_rand(1, 3),
            ////coba coba///
            // 'slug' => $this->faker->name(),
        ];
    }
}
