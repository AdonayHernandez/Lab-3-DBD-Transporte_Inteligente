<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransportCardRequest extends FormRequest
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
            'card_code' => 'sometimes|string|unique:transport_cards,card_code,' . $this->route('id'),
            'balance' => 'sometimes|numeric|min:0',
            'user_id' => 'sometimes|exists:users,_id',
            'status' => 'sometimes|in:active,inactive,suspended',
            'last_use' => 'sometimes|date',
        ];
    }
}