<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChallengeDescriptions extends Model
{
    protected $fillable = [
        'description'
    ];

    public function bonus_rules()
    {
        return $this->hasOne('App\Models\BonusRules');
    }

    public function challenge_types()
    {
        return $this->hasOne('App\Models\ChallengeTypes');
    }
}
