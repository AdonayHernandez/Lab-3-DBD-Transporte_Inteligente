<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
            'plate_number' => 'sometimes|string|unique:vehicles,plate_number,' . $this->vehicle,
            'brand' => 'sometimes|string',
            'model' => 'sometimes|string',
            'year' => 'sometimes|integer|min:1900|max:' . (date('Y') + 1),
            'capacity' => 'sometimes|integer|min:1',
            'status' => 'sometimes|in:active,maintenance,inactive',
            'driver_id' => 'sometimes|exists:drivers,_id',
            'type_of_vehicle_id' => 'sometimes|exists:type_of_vehicles,_id',
        ];
    }
}