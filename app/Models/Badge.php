<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $primaryKey = 'badgeid';
    public $incrementing = false;

    protected $fillable = [
        'badgeid',
        'name',
        'description',
        'imagename',
    ];
}
