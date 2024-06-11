<?php

namespace Database\Seeders;

use App\Models\Lyric;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LyricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lyric::factory()->count(10)->create();
    }
}
