<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTypes extends Model
{
    protected $fillable = [
        'name', 'is_a_weapon', 'game_id'
    ];

    public function legendaries()
    {
        return $this->hasMany('App\Models\Legendaries');
    }

    public function game()
    {
        return $this->belongsTo('App\Models\Games');
    }
}
