<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Genre::class;
    public function definition(): array
    {
        $genres = ['Pop', 'Rock', 'Hip Hop', 'Jazz', 'Electronic', 'Classical', 'Country'];
        return [
            'name'=>$this->faker->randomElement($genres),
        ];
    }
}
