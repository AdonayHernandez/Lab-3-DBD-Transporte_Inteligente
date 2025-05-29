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
            'capacity_max' => 'required|integer|min:1',
            'fuel_type' => 'required|string|max:50',
            'manufacture_year' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'driver_id' => 'required|string', // o exists:drivers,_id
            'special_equipment' => 'required|array',
        ];
    }
}
