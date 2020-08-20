<?php

namespace App\Models;

class Work extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'works';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'video'
    ];

}
