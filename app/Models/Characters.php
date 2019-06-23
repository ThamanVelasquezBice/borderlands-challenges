<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    protected $fillable = [
        'name', 'image_url', 'game_id'
    ];

    public function game()
    {
        return $this->belongsTo('App\Models\Games', 'game_id');
    }
}
