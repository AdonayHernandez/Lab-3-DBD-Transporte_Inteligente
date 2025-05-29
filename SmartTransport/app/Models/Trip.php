<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Trip extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        'user_id',
        'route_id',
    ];

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con la ruta
    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
