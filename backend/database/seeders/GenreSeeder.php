<?php

namespace Database\Seeders;


use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Genre::factory()->count(8)->create();//8 genres to be created using the factory

        $genres = [
            [
                'name'        => 'Action',
                'description' => 'Fast-paced games focused on combat, reflexes, and movement. Players engage in physical challenges including hand-to-hand combat and shooting.',
            ],
            [
                'name'        => 'RPG',
                'description' => 'Role-playing games where players assume the role of a character and progress through a story-driven world, leveling up stats and abilities.',
            ],
            [
                'name'        => 'Adventure',
                'description' => 'Games focused on exploration, puzzle-solving, and narrative. Players interact with their environment to uncover a story.',
            ],
            [
                'name'        => 'Sports',
                'description' => 'Games that simulate real-world sports such as football, basketball, and soccer, allowing players to compete individually or in teams.',
            ],
            [
                'name'        => 'Simulation',
                'description' => 'Games designed to simulate real-world activities or systems, from city building and farming to flying and driving.',
            ],
            [
                'name'        => 'Horror',
                'description' => 'Games designed to frighten and unsettle players through atmospheric tension, jump scares, and dark storylines.',
            ],
            [
                'name'        => 'Strategy',
                'description' => 'Games that require careful planning and decision-making to achieve victory, often involving resource management and tactical combat.',
            ],
            [
                'name'        => 'Puzzle',
                'description' => 'Games that challenge players to solve logic-based problems and brain teasers, often with increasing levels of difficulty.',
            ],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
