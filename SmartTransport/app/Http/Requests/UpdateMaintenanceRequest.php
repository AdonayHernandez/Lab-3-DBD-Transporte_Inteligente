<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMaintenanceRequest extends FormRequest
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
            'vehicle_id' => 'sometimes|exists:vehicles,_id',
            'description' => 'sometimes|string',
            'maintenance_date' => 'sometimes|date',
            'completion_date' => 'sometimes|date|nullable|after_or_equal:maintenance_date',
            'cost' => 'sometimes|numeric|min:0',
            'status' => 'sometimes|in:scheduled,in_progress,completed,cancelled',
            'notes' => 'sometimes|string|nullable',
        ];
    }
}