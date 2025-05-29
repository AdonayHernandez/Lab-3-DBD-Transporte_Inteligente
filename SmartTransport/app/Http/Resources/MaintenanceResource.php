<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MaintenanceResource extends JsonResource
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
            'vehicle_id' => (string) $this->vehicle_id,
            'date' => $this->date,
            'type' => $this->type,
            'description' => $this->description,
            'workshop' => $this->workshop,
            'cost' => $this->cost,
            'created_at' => $this->created_at,
        ];
    }
}
