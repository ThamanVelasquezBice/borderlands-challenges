<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GunBrands extends Model
{
    protected $fillable = [
        'name', 'image_url', 'game_id'
    ];

    public function legendaries()
    {
        return $this->hasMany('App\Models\Legendaries', 'gun_brand_id');
    }

    public function game()
    {
        return $this->belongsTo('App\Models\Games', 'game_id');
    }
}
