<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    protected $table = 'ApiToken';
    protected $primaryKey = 'TokenId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
      'TokenId', 'Email', 'Token', 'Scope', 'State', 'Timestamp', 'Expiration'
    ];

     /**
      * Indicates if the IDs are auto-incrementing.
      *
      * @var bool
      */
    public $incrementing = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Email', 'State'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
