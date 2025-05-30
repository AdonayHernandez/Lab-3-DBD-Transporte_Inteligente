<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Driver extends Model
{
   protected $connection = 'mongodb';

   protected $fillable = [
      'schedules',
      'assigned_routes',
      'evaluation_details',
      'incident_details'
   ];

   protected $casts = [
      'schedules' => 'array',
      'assigned_routes' => 'array',
   ];

   
}
