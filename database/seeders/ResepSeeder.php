<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resep;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        Resep::factory()->count(20)->create();
    }
}
?>