<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Genre::class;

    public function definition()
    {
        $genres = [
            'Action',
            'RPG',
            'Adventure',
            'Sports',
            'Simulation',
            'Horror',
            'Strategy',
            'Puzzle',
        ];  //Static list of genres

        return [
            'name' => $this->faker->unique()->randomElement($genres),
            'description' => $this->faker->sentence(12),
        ];
    }
}