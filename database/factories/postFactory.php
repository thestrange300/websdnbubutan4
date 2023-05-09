<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => 'teguh kontol',
            'slug' => $this->faker->slug(),
            'konten' => $this->faker->paragraph(),
            'kategori' => 'Siswa',
            'mainKategori' => 'Karya dan Prestasi',
            'warna1' => 'blue',
            'warna2' => 'indigo'
        ];
    }
}
