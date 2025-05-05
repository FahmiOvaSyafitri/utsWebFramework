<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResepFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul_resep' => $this->faker->sentence(3),
            'kategori' => $this->faker->randomElement(['Makanan', 'Minuman', 'Snack']),
            'bahan' => $this->faker->paragraph(),
            'langkah_pembuatan' => $this->faker->paragraph(),
            'waktu_memasak' => $this->faker->numberBetween(10, 120),
            'penulis' => $this->faker->name(),
            'tingkat_kesulitan' => $this->faker->randomElement(['Mudah', 'Sedang', 'Sulit']),
        ];
    }
}
?>