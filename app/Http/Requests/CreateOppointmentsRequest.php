<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateOppointmentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'appointment_date' => 'nullable|date|after_or_equal:today',
            'appointment_time' => 'nullable|date_format:H:i',
            'appointment_type' => 'nullable|string|max:255',
            'status' => 'nullable|string|in:pending,confirmed,cancelled,completed',
            'reason' => 'nullable|string|max:255',
            'additional_notes' => 'nullable|string',
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
        ];
    }
}
