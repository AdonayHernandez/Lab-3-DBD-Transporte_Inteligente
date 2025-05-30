<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Maintenance extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        'vehicle_id',
        'date',
        'type',
        'description',
        'workshop',
        'cost'
    ];

    protected $casts = [
        'date' => 'datetime',
        'cost' => 'float',
    ];

   
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
