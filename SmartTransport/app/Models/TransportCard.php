<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;

class TransportCard extends Model
{
     protected $connection = 'mongodb';

     protected $fillable = [
        'user_id',
        'card_code',
        'balance',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
