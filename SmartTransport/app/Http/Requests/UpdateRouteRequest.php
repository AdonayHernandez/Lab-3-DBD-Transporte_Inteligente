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
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'start_point' => 'sometimes|string',
            'end_point' => 'sometimes|string',
            'distance' => 'sometimes|numeric|min:0',
            'estimated_time' => 'sometimes|integer|min:1',
            'status' => 'sometimes|in:active,inactive,suspended',
            'scheduled_stops' => 'sometimes|array',
            'scheduled_stops.*' => 'exists:stops,_id',
        ];
    }
}