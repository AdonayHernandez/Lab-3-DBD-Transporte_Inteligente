<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDriverRequest extends FormRequest
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
            'email' => 'sometimes|email|unique:drivers,email,' . $this->driver,
            'phone' => 'sometimes|string',
            'license_number' => 'sometimes|string|unique:drivers,license_number,' . $this->driver,
            'status' => 'sometimes|in:active,inactive,suspended',
            'user_id' => 'sometimes|exists:users,_id',
        ];
    }
}