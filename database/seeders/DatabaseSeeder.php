<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Song;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //Artist::factory(10)->create();
        //Album::factory(10)->create();
      $this->call(SongSeeder::class);
    }
}
