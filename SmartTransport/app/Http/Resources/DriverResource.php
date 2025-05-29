<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
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
            'schedules' => $this->schedules,                     
            'assigned_routes' => $this->assigned_routes,         
            'evaluation_details' => $this->evaluation_details,   
            'incident_details' => $this->incident_details,       
            'created_at' => $this->created_at,
        ];
    }
}
