<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMaintenanceRequest extends FormRequest
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
            'vehicle_id' => 'required|string', // o exists:vehicles,_id si quieres validar existencia
            'date' => 'required|date',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'workshop' => 'nullable|string|max:255',
            'cost' => 'required|numeric|min:0',
        ];
    }
}
