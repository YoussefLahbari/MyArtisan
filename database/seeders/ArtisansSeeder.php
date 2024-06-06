<?php

namespace Database\Seeders;

use App\Models\Artisan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtisansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 50 artisan records
        Artisan::factory()->count(5)->create();

    }
}
