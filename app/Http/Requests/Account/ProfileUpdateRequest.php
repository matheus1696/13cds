<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'cpf' => [ 'required', 'cpf', 'formato_cpf', 'max:14', 'min:14', Rule::unique('users', 'cpf')->ignore(Auth::user()->id)],
            'profession_id' => ['required', 'integer', 'exists:professions,id'],
            'contact' => ['nullable','min:15', 'max:15'],
        ];
    }
}
