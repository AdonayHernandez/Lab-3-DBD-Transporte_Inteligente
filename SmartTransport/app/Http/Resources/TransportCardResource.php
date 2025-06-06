<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransportCardResource extends JsonResource
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
            'user_id' => new UserResource($this->user),
            'card_code' => $this->card_code,
            'balance' => $this->balance,
            'created_at' => $this->created_at,
        ];
    }
}
