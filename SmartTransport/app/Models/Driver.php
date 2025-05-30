<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Driver extends Model
{
   protected $connection = 'mongodb';

   protected $fillable = [
      'name',
      'schedules',
      'route_id',
      'evaluation_details',
      'incident_details'
   ];

   protected $casts = [
      'schedules' => 'array',
   ];

 
}
