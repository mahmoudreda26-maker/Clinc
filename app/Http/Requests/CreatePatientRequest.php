<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreatePatientRequest extends FormRequest
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
    return [
        "name" => 'required|string|max:255',
        "email" => 'required|email|unique:patients,email,',
        "phone" => ['required', 'regex:/^[0-9+\-\s]+$/'],
        "date_of_birth" => 'required|date',
        "age" => 'required|integer',
        "gender" => 'required|in:male,female',
        "blood_group" => 'required|string',
        "emergency_contact" => "required|string",
        "address" => 'required|string',
        "medical_history" => 'required|string',
        "status" => "required|in:0,1",
    ];
}
}
