<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_games', function (Blueprint $table) {
            $table->id();
            $table->string('title');  //game title e.g "elden ring"
            $table->text('description'); //game description
            $table->string('platform');  //game platform e.g "PC", "PS5", "Xbox"
            $table->integer('release_year'); //game release year e.g 2022
            $table->decimal('rating', 3, 1);  //game rating e.g 9.5
            $table->foreignId('genre_id')->constrained()->onDelete('cascade'); //using foreign key to link to genres table HOpEfully :D
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_games');
    }
}
