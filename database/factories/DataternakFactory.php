<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dataternak>
 */
class DataternakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jenisternak_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'nama_pemilik' => $this->faker->name(),
            'jenis_ternak' => $this->faker->sentence(1),
            'berat_ternak' => $this->faker->randomDigit(),
            // 'tanggal_lahir' => $this->faker->sentence(1),
            'status_terjual' => $this->faker->sentence(mt_rand(1, 2)),
            // 'deskripsi_tambahan' => $this->faker->paragraph(mt_rand(50, 100)),
            'deskripsi_tambahan' => collect($this->faker->paragraphs(mt_rand(10, 20)))->map(fn($p) => "<p>$p<p>")->implode(''),
            //cobacoba//
            // 'foto_ternak' => $this->faker->sentence(1)
        ];
    }
}