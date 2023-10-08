<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


    protected $fillable = [
        'player_id',
        'scrap_amount',
        'water_amount',
        'water_container_amount',
    ];

    public function players(){
        return $this->belongsToMany(Player::class);
        
    }
}
