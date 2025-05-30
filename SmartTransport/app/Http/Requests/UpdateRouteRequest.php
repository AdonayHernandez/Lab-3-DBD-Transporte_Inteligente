<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRouteRequest extends FormRequest
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
            'scheduled_stops'=> ['required', 'array'],   
            'scheduled_stops.*'=> ['string'],              
            'schedules'=> ['required', 'array'],   
            'schedules.*'=> ['string'],              
            'time_between_stations'=> ['required', 'array'],    
            'fare_per_segment'=> ['required', 'array'],   
            'fare_per_segment.*'=> ['numeric', 'min:0'],     
            'accessibility'=> ['required', 'boolean'],  
        ];
    }
}