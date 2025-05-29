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
            'scheduled_stops' => $this->scheduled_stops,               // array de IDs o puedes anidar recursos si haces la relación
            'schedules' => $this->schedules,                           // array o json
            'time_between_stations' => $this->time_between_stations,  // json
            'fare_per_segment' => $this->fare_per_segment,             // array
            'accessibility' => (bool) $this->accessibility,
            'created_at' => $this->created_at,
        ];
    }
}
