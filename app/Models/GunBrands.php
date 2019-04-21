<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GunBrands extends Model
{
    protected $fillable = [
        'name', 'image_url'
    ];

    public function legendaries()
    {
        return $this->hasMany('App\Models\Legendaries');
    }
}
