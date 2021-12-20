<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metachallenge extends Model
{
    use HasFactory;

    protected $table = 'metachallenges';
    protected $primaryKey = 'metachallengeid';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'metachallengeid',
        'challengeid',
        'key',
        'value',
    ];
}
