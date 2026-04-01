<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
        GenreSeeder::class, //calling the genre seeder to seed the genres table
        VideoGameSeeder::class, //calling the video game seeder to seed the video games table
       ]);
    }
}
