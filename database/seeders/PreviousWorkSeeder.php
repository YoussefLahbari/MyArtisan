<?php

namespace Database\Seeders;

use App\Models\PreviousWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreviousWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PreviousWork::factory()->count(5)->create();
    }
}
