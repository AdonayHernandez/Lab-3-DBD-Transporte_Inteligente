<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StopResource extends JsonResource
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
            'location' => $this->location,
            'services' => $this->services,                      
            'connections' => $this->connections,                 
            'infrastructure_details' => $this->infrastructure_details,
            'created_at' => $this->created_at,
        ];
    }
}
