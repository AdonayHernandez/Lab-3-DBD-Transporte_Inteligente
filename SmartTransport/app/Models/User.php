<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mongodb';

    protected $fillable=[
        'name',
        'lastName',
        'email',
        'phoneNumber',
        'password'
    ];
}
