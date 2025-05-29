<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class TypeOfVehicle extends Model
{
    protected $connection = 'mongodb';

    protected $fillable=[
        'name'
    ];
}
