<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable = [
        'title', 'description', 'image_url', 'release_date'
    ];

    public function characters()
    {
        return $this->hasMany('App\Models\Characters', 'game_id');
    }

    public function legendaries()
    {
        return $this->hasMany('App\Models\Legendaries', 'game_id');
    }

    public function brands()
    {
        return $this->hasMany('App\Models\GunBrands', 'game_id');
    }

    public function item_types()
    {
        return $this->hasMany('App\Models\ItemTypes', 'game_id');
    }
}
