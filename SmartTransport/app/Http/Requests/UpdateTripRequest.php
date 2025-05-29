<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTripRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'route_id' => 'sometimes|exists:routes,_id',
            'driver_id' => 'sometimes|exists:drivers,_id',
            'vehicle_id' => 'sometimes|exists:vehicles,_id',
            'start_time' => 'sometimes|date',
            'end_time' => 'sometimes|date|nullable|after_or_equal:start_time',
            'status' => 'sometimes|in:scheduled,in_progress,completed,cancelled',
            'passenger_count' => 'sometimes|integer|min:0',
            'notes' => 'sometimes|string|nullable',
        ];
    }
}