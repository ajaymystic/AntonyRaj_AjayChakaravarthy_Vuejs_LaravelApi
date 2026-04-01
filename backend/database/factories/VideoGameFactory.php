<?php

namespace Database\Factories;
use App\Models\Genre;
use App\Models\VideoGame;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoGameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = VideoGame::class;
    public function definition()
    {
        $platforms = ['PC', 'PS5', 'Xbox Series X', 'Nintendo Switch', 'PS4'];

        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(15),
            'platform' => $this->faker->randomElement($platforms),
            'release_year' => $this->faker->numberBetween(2000, 2024),
            'rating' => $this->faker->randomFloat(1, 1, 10),
            'genre_id' => Genre::inRandomOrder()->first()->id,
        ];
    }
}