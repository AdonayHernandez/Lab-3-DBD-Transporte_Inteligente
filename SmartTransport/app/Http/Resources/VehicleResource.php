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
            'capacity_max' => $this->capacity_max,
            'fuel_type' => $this->fuel_type,
            'manufacture_year' => $this->manufacture_year,
            'driver_id' => (string) $this->driver_id,
            'special_equipment' => $this->special_equipment, // array
            'created_at' => $this->created_at,
        ];
    }
}
