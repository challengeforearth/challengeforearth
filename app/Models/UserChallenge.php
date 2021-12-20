<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserChallenge extends Model
{
    use HasFactory;

    protected $table = 'user_challenge';
    protected $primaryKey = 'userchallengeid';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userchallengeid',
        'userid',
        'challengeid',
        'status',
    ];

    protected static function newFactory()
    {
        return \Modules\Challenge\Database\factories\UserChallengeFactory::new();
    }
}
