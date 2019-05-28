<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Legendaries extends Model
{
    protected $fillable = [
        'name', 'region', 'image_url', 'game_id'
    ];

    public function game()
    {
        return $this->belongsTo('App\Models\Games');
    }
}
