<?php

namespace Database\Seeders;

use App\Models\VideoGame;
use Illuminate\Database\Seeder;

class VideoGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VideoGame::factory()->count(20)->create(); //20 video games to be created using the factory

        $games = [
            // Action
            [
                'title'        => 'Devil May Cry 5',
                'description'  => 'A stylish action game where players fight demonic enemies using a variety of weapons and abilities across a dark, gothic world.',
                'platform'     => 'PS5',
                'release_year' => 2019,
                'rating'       => 9.0,
                'genre_id'     => 1,
            ],
            [
                'title'        => 'Sekiro: Shadows Die Twice',
                'description'  => 'A challenging action game set in feudal Japan where players control a shinobi on a quest for revenge against a samurai clan.',
                'platform'     => 'PS4',
                'release_year' => 2019,
                'rating'       => 9.3,
                'genre_id'     => 1,
            ],
            [
                'title'        => 'Doom Eternal',
                'description'  => 'A fast-paced first-person shooter where the Doom Slayer battles overwhelming demon forces across Earth and beyond.',
                'platform'     => 'PC',
                'release_year' => 2020,
                'rating'       => 9.0,
                'genre_id'     => 1,
            ],

            // RPG
            [
                'title'        => 'Elden Ring',
                'description'  => 'An open world action RPG developed by FromSoftware and George R.R. Martin, set in the vast and mysterious Lands Between.',
                'platform'     => 'PS5',
                'release_year' => 2022,
                'rating'       => 9.8,
                'genre_id'     => 2,
            ],
            [
                'title'        => 'The Witcher 3: Wild Hunt',
                'description'  => 'A story-driven open world RPG set in a war-ravaged fantasy universe. Players control Geralt of Rivia, a monster hunter for hire.',
                'platform'     => 'PC',
                'release_year' => 2015,
                'rating'       => 9.7,
                'genre_id'     => 2,
            ],
            [
                'title'        => 'Persona 5 Royal',
                'description'  => 'A critically acclaimed JRPG where high school students become Phantom Thieves to change the hearts of corrupt adults.',
                'platform'     => 'PS4',
                'release_year' => 2020,
                'rating'       => 9.5,
                'genre_id'     => 2,
            ],

            // Adventure
            [
                'title'        => 'The Last of Us Part II',
                'description'  => 'A gripping narrative adventure set in a post-apocalyptic world, following Ellie on a journey driven by love and revenge.',
                'platform'     => 'PS4',
                'release_year' => 2020,
                'rating'       => 9.3,
                'genre_id'     => 3,
            ],
            [
                'title'        => 'Red Dead Redemption 2',
                'description'  => 'An epic tale of life in America at the dawn of the modern age, following outlaw Arthur Morgan across a vast open world.',
                'platform'     => 'PS4',
                'release_year' => 2018,
                'rating'       => 9.7,
                'genre_id'     => 3,
            ],
            [
                'title'        => 'Uncharted 4: A Thief\'s End',
                'description'  => 'Nathan Drake embarks on a globe-trotting adventure to find a legendary pirate treasure before a dangerous mercenary group.',
                'platform'     => 'PS4',
                'release_year' => 2016,
                'rating'       => 9.2,
                'genre_id'     => 3,
            ],

            // Sports
            [
                'title'        => 'FIFA 23',
                'description'  => 'The world\'s most popular football simulation game featuring real teams, players, and leagues from around the globe.',
                'platform'     => 'PS5',
                'release_year' => 2022,
                'rating'       => 7.8,
                'genre_id'     => 4,
            ],
            [
                'title'        => 'NBA 2K23',
                'description'  => 'A basketball simulation game featuring current NBA stars and legendary players with deep career and franchise modes.',
                'platform'     => 'Xbox Series X',
                'release_year' => 2022,
                'rating'       => 7.5,
                'genre_id'     => 4,
            ],

            // Simulation
            [
                'title'        => 'Stardew Valley',
                'description'  => 'A farming simulation RPG where players build and manage their own farm, explore caves, and build relationships with townsfolk.',
                'platform'     => 'Nintendo Switch',
                'release_year' => 2016,
                'rating'       => 9.5,
                'genre_id'     => 5,
            ],
            [
                'title'        => 'Cities: Skylines',
                'description'  => 'A modern city-building simulation where players design, build, and manage a growing city while balancing citizen needs.',
                'platform'     => 'PC',
                'release_year' => 2015,
                'rating'       => 9.0,
                'genre_id'     => 5,
            ],

            // Horror
            [
                'title'        => 'Resident Evil Village',
                'description'  => 'A survival horror game where Ethan Winters searches for his kidnapped daughter in a mysterious and terrifying European village.',
                'platform'     => 'PS5',
                'release_year' => 2021,
                'rating'       => 8.8,
                'genre_id'     => 6,
            ],
            [
                'title'        => 'Silent Hill 2',
                'description'  => 'A classic psychological horror game where James Sunderland travels to the foggy town of Silent Hill after receiving a letter from his deceased wife.',
                'platform'     => 'PS2',
                'release_year' => 2001,
                'rating'       => 9.5,
                'genre_id'     => 6,
            ],

            // Strategy
            [
                'title'        => 'Civilization VI',
                'description'  => 'A turn-based strategy game where players lead a civilization from the Stone Age to the Information Age, competing to dominate the world.',
                'platform'     => 'PC',
                'release_year' => 2016,
                'rating'       => 9.2,
                'genre_id'     => 7,
            ],
            [
                'title'        => 'XCOM 2',
                'description'  => 'A turn-based tactical strategy game where players command a resistance force against an alien occupation of Earth.',
                'platform'     => 'PC',
                'release_year' => 2016,
                'rating'       => 8.9,
                'genre_id'     => 7,
            ],

            // Puzzle
            [
                'title'        => 'Portal 2',
                'description'  => 'A first-person puzzle game where players use a portal gun to solve increasingly complex spatial challenges inside a research facility.',
                'platform'     => 'PC',
                'release_year' => 2011,
                'rating'       => 9.8,
                'genre_id'     => 8,
            ],
            [
                'title'        => 'Tetris Effect',
                'description'  => 'A visually stunning and immersive version of the classic Tetris game enhanced with music and effects that react to your gameplay.',
                'platform'     => 'PS4',
                'release_year' => 2018,
                'rating'       => 9.0,
                'genre_id'     => 8,
            ],
            [
                'title'        => 'The Witness',
                'description'  => 'An open world puzzle game set on a mysterious island filled with hundreds of panel-based puzzles woven into the environment.',
                'platform'     => 'PC',
                'release_year' => 2016,
                'rating'       => 8.9,
                'genre_id'     => 8,
            ],
        ];

        foreach ($games as $game) {
            VideoGame::create($game);
        }
    }
}
