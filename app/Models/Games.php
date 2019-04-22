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
        return $this->hasMany('App\Models\Characters');
    }

    public function legendaries()
    {
        return $this->hasMany('App\Models\Legendaries');
    }

    public function brands()
    {
        return $this->hasMany('App\Models\GunBrands');
    }
}
