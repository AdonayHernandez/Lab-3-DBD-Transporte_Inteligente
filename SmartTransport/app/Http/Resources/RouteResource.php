<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RouteResource extends JsonResource
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
            'route_name' => $this->route_name,
            'scheduled_stops' => $this->scheduled_stops,             
            'schedules' => $this->schedules,                           
            'time_between_stations' => $this->time_between_stations, 
            'fare_per_segment' => $this->fare_per_segment,             
            'accessibility' => (bool) $this->accessibility,
            'created_at' => $this->created_at,
        ];
    }
}
