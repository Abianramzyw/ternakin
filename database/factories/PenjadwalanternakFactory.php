<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penjadwalanternak>
 */
class PenjadwalanternakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tanggal_jadwal' => $this->faker->dateTime(),
            'dokter' => $this->faker->name(),
            'juduljadwal_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            //////coba/coba////
            'slug' => $this->faker->name(),
        ];
    }
}