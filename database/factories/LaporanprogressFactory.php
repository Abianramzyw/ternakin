<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laporanprogress>
 */
class LaporanprogressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tanggal_progress' => $this->faker->date(),
            'berat_ternak' => $this->faker->randomDigit(),
            'deskripsi_progress' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn($p) => "<p>$p<p>")->implode(''),
            // 'statuskesehatan_id' => mt_rand(1, 3),
            'kondisiternak_id' => mt_rand(1, 2),
            'hasilternak_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
        ///////cobacoba/////
        // 'slug' => $this->faker->name(),
        ];
    }
}
