<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BonusRules extends Model
{
    protected $fillable = [
        'name', 'challenge_description_id'
    ];

    public function description()
    {
        return $this->belongsTo('App\Models\ChallengeDescriptions');
    }
}
