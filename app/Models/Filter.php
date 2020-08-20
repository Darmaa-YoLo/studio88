<?php

namespace App\Models;


class Filter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'filter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
