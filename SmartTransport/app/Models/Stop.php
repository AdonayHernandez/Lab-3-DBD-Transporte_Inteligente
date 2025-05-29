<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Stop extends Model
{
     protected $connection = 'mongodb';

     protected $fillable = [
        'location',
        'services',
        'connections',
        'infrastructure_details',
    ];

    protected $casts = [
        'services' => 'array',
        'connections' => 'array',
        'infrastructure_details' => 'array', 
    ];
}
