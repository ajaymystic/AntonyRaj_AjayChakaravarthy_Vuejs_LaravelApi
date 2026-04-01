<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
