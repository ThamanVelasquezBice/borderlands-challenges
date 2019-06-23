<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Legendaries extends Model
{
    protected $fillable = [
        'name', 'flavor_text', 'image_url', 'gun_brand_id', 'item_type_id', 'game_id'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\GunBrands', 'gun_brand_id');
    }

    public function game()
    {
        return $this->belongsTo('App\Models\Games', 'game_id');
    }

    public function item_type()
    {
        return $this->belongsTo('App\Models\ItemTypes', 'item_type_id');
    }
}
