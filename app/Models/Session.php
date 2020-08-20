<?php

namespace App\Models;

class Session extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sessions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_code', 
        'country_name', 
        'device_type', 
        'platform', 
        'browser', 
        'created'
    ];
}