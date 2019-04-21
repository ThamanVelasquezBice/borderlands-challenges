<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


$table->string('name');
$table->string('flavor_text');
$table->string('image_url');
$table->integer('gun_brand_id');
$table->integer('item_type_id');
$table->integer('game_id');

class Legendaries extends Model
{
    protected $fillable = [
        'name', 'flavor_text', 'image_url', 'gun_brand_id', 'item_type_id', 'game_id'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\GunBrands');
    }

    public function game()
    {
        return $this->belongsTo('App\Models\Games');
    }

    public function item_type()
    {
        return $this->belongsTo('App\Models\ItemTypes');
    }
}
