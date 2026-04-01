<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VideoGame
 *
 * Represents a single video game entry in the database.
 * Each video game belongs to one genre.
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $platform
 * @property int $release_year
 * @property float $rating
 * @property int $genre_id
 *
 * @package App\Models
 */

class VideoGame extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'description',
        'platform',
        'release_year',
        'rating',
        'genre_id',
    ];

    //this is to define the relationship between video game and genre.

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
