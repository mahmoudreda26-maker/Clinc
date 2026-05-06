<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
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
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'phone' => [' nullable', 'regex:/^[0-9+\-\s]+$/'],
            'address' => 'nullable|string|max:500',
            'major_id' => 'nullable|exists:majors,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ];
    }
}
