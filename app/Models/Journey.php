<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

Class Journey extends Model
{

    use HasFactory;

    protected $primaryKey = 'journeyid';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'journeyid',
        'title',
        'description',
        'level',
    ];

    protected static function newFactory()
    {
        return \Modules\Challenge\Database\factories\JourneyFactory::new();
    }

    public function challenges()
    {
        return $this->belongsToMany(Challenge::class,'journey_challenge', 'journeyid','challengeid')->orderBy('order');
                    //->withPivot('status');
                    //->as('metadata');
    }
}
