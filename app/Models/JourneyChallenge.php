<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

Class JourneyChallenge extends Model
{
     use HasFactory;

     protected $table = 'journey_challenge';
     protected $primaryKey = 'journeychallengeid';
     public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'journeychallengeid',
        'journeyid',
        'challengeid',
        'childchallenge',
    ];

    protected static function newFactory()
    {
        return \Modules\Challenge\Database\factories\JourneyChallengeFactory::new();
    }
}
