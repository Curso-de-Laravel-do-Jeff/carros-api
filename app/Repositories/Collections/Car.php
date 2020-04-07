<?php

namespace App\Repositories\Collections;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';
    protected $collection = 'carros';
    protected $fillable = [
        'brand',
        'model',
        'year',
        'color',
        'value'
    ];
}
