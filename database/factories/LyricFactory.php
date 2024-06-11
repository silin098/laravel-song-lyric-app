<?php

namespace Database\Factories;

use App\Models\Lyric;
use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lyric>
 */
class LyricFactory extends Factory
{

    protected $model = Lyric::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'song_id'=>Song::factory(),
            'content'=>$this->faker->realText(),

        ];
    }
}
