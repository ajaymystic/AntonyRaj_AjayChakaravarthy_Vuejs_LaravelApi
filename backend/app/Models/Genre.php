<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 *
 * Represents a video game genre in the database.
 * A genre can be associated with many video games.
 *
 * @property int $id
 * @property string $name
 * @property string $description
 *
 * @package App\Models
 */

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    //this is to get all video games that belonmg to a specific genre

    public function videoGames()
    {
        return $this->hasMany(VideoGame::class);
    }

    
}


