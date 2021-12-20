<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserJourney extends Model
{
    use HasFactory;

    protected $table = 'user_journey';
    protected $primaryKey = 'userjourneyid';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userjourneyid',
        'userid',
        'journeyid',
        'status',
    ];

    protected static function newFactory()
    {
        return \Modules\Challenge\Database\factories\UserJourneyFactory::new();
    }
}
