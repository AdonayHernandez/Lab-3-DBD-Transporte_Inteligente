<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
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
            'user' => new UserResource($this->whenLoaded('user')),
            'route' => $this->when($this->route, function () {
                return [
                    'id' => (string) $this->route->_id,
                    'route_name' => $this->route->route_name,
                    ];null;
            }),
            'created_at' => $this->created_at,
           
        ];
    }
}
