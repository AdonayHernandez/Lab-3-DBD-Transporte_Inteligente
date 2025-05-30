<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Vehicle extends Model
{
   protected $connection = 'mongodb';

   protected $fillable = [
      'plate_number',
      'capacity_max',
      'fuel_type',
      'vehicle_type',
      'manufacture_year',
      'driver_id',
      'type_of_vehicle_id',
      'special_equipment'
   ];

   protected $casts = [
      'special_equipment' => 'array',
   ];

   public function driver()
   {
      return $this->belongsTo(Driver::class);
   }

   public function vehicleType(){
      return $this->belongsTo(TypeOfVehicle::class, 'type_of_vehicle_id');
   }
}
