<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email',
            'phone' => ['required ', 'regex:/^[0-9+\-\s]+$/'],
            'address' => 'nullable|string|max:500',
            'major_id' => 'required|exists:majors,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'الإيميل مطلوب',
            'email.email' => 'صيغة الإيميل غير صحيحة',
            'phone.required' => 'رقم الهاتف مطلوب',
            'major_id.required' => 'التخصص مطلوب',
            'major_id.exists' => 'التخصص غير موجود',
            'image.image' => 'الملف يجب أن يكون صورة',
        ];
    }
    public function attributes(): array
    {
        return [
            'major_id' => 'التخصص',
            'image' => 'الصورة الشخصية',
        ];
    }
}
