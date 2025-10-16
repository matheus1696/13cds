<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommissionUpdateRequest extends FormRequest
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
            'cpf' => [
                'required',
                'cpf',
                'formato_cpf',
                'string',
                'size:14',
                Rule::unique('commissions', 'cpf')->ignore($this->commission->id),
            ],
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'contact' => ['nullable', 'celular_com_ddd', 'string', 'max:15'],
            'is_whatsapp' => ['nullable', 'boolean'],
        ];
    }
}
