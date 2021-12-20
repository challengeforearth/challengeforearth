<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Challenge extends Model
{
    use HasFactory;

    protected $primaryKey = 'challengeid';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'challengeid',
        'title',
        'category',
        'description',
        'howto',
        'expawarded',
        'imagename',
    ];

    protected static function newFactory()
    {
        return \Modules\Challenge\Database\factories\ChallengeFactory::new();
    }

    public function journeys()
    {
        return $this->belongsToMany(Journey::class,'journey_challenge', 'challengeid','journeyid');
    }
}
