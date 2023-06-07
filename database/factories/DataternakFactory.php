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
            'berat_ternak' => $this->faker->randomDigit(),
            'tanggal_lahir' => $this->faker->date(),
            'deskripsi_tambahan' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn($p) => "<p>$p<p>")->implode(''),
            'jeniskelamin_id' => mt_rand(1, 2),
            'statusterjual_id' => mt_rand(1, 2),
            'jenisternak_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 5),
            // 'user_role_id' => mt_rand(1, 3),
            // 'jadwalternak_id' => mt_rand(1, 2),
            // 'jadwalternak_juduljadwal_id' => mt_rand(1, 2),
            // 'laporanprogress_id' => mt_rand(1, 2),
            // 'laporanprogress_statuskesehatan_id' => mt_rand(1, 2),
            // 'laporanprogress_kondisi_id' => mt_rand(1, 2),
            // 'laporanprogress_hasilternak_id' => mt_rand(1, 2),
            //cobacoba//
            // 'slug' => $this->faker->name(),
            // 'nama_pemilik' => $this->faker->name(),
            // 'deskripsi_tambahan' => $this->faker->paragraph(mt_rand(50, 100)),
            // 'foto_ternak' => $this->faker->sentence(1)
        ];
    }
}