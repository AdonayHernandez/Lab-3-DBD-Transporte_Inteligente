<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string) $this->_id,
            'plate_number' => $this->plate_number,
            'capacity_max' => $this->capacity_max,
            'fuel_type' => $this->fuel_type,
            'manufacture_year' => $this->manufacture_year,
            'driver_id' => new DriverResource($this->driver),
            'vehicle_type' => new TypeOfVehicleResource(
                \App\Models\TypeOfVehicle::find($this->type_of_vehicle_id)
            ),
            'special_equipment' => $this->special_equipment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
