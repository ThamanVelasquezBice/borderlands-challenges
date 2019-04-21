<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTypes extends Model
{
    protected $fillable = [
        'name', 'is_a_weapon'
    ];
    
    public function legendaries()
    {
        return $this->hasMany('App\Models\Legendaries');
    }
}
