<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
public function rules(): array
{
    $id = $this->route('patient')->id;

    return [
        "name" => 'nullable|string|max:255',
        "email" => 'nullable|email|unique:patients,email,' . $id,
        "phone" => ['nullable', 'regex:/^[0-9+\-\s]+$/'],
        "date_of_birth" => 'nullable|date',
        "age" => 'nullable|integer',
        "gender" => 'nullable|in:male,female',
        "blood_group" => 'nullable|string',
        "emergency_contact" => "nullable|string",
        "address" => 'nullable|string',
        "medical_history" => 'nullable|string',
        "status" => "nullable|in:0,1",
    ];
}
}
