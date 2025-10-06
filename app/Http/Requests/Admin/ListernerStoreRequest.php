<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ListernerStoreRequest extends FormRequest
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
            //
            'cpf' => ['nullable', 'cpf', 'formato_cpf', 'string', 'size:14', 'unique:listerners,cpf'],
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'contact' => ['required', 'celular_com_ddd', 'string', 'max:15'],
            'is_whatsapp' => ['required', 'boolean'],
        ];
    }
}
