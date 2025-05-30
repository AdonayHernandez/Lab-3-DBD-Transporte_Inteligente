<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
            'plate_number' => 'required|string|',
            'capacity_max' => 'required|integer|min:1',
            'fuel_type' => 'required|string|max:50',
            'manufacture_year' => 'required|digits:4|integer|min:1900',
            'driver_id' => 'required|string|',
            'type_of_vehicle_id' => 'required|string',
            'special_equipment' => 'required|array',
        ];
    }
}
