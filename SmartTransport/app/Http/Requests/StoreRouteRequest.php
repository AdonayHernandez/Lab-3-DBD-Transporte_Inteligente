<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRouteRequest extends FormRequest
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
             'route_name' => ['required', 'string', 'max:255'],
            'scheduled_stops'=> ['required', 'array'],    // Debe ser array de IDs
            'scheduled_stops.*'=> ['string'],               // Cada ID como string (puede ser ObjectId)
            'schedules'=> ['required', 'array'],    // Array de horarios
            'schedules.*'=> ['string'],               // Cada horario es string (puedes ajustar según formato)
            'time_between_stations'=> ['required', 'array'],    // JSON traducido a array asociativo
            'fare_per_segment'=> ['required', 'array'],    // Tarifas por tramo en array
            'fare_per_segment.*'=> ['numeric', 'min:0'],     // Cada tarifa debe ser número >= 0
            'accessibility'=> ['required', 'boolean'],  // Booleano
        ];
    }
}
