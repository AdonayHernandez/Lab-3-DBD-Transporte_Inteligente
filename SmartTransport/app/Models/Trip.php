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

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   
    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
