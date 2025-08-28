<?php

namespace App\Http\Requests\Admin\Profession;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionStoreRequest extends FormRequest
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
            'code' => 'nullable|string|unique:professions,code',
            'title' => 'required|string|unique:professions,title',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'subcategory' => 'nullable|string',
            'is_active' => 'boolean',
        ];
    }
}
