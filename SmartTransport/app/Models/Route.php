<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Route extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        'route_name', 
        'scheduled_stops',        // array de IDs de paradas (Stop)
        'schedules',              // horarios teóricos, array o JSON
        'time_between_stations',  // JSON con tiempos entre estaciones
        'fare_per_segment',       // array con tarifas por tramo
        'accessibility',          // booleano
    ];

    protected $casts = [
        'scheduled_stops' => 'array',
        'schedules' => 'array',
        'time_between_stations' => 'array', // JSON decodificado a array
        'fare_per_segment' => 'array',
    ];

    // Relación para acceder a las paradas programadas
    public function stops()
    {
        // Asumiendo que scheduled_stops es un array de ObjectId de stops
        return $this->belongsToMany(Stop::class, null, 'route_id', 'stop_id');
    }
}
