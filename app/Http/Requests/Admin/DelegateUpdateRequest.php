<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DelegateUpdateRequest extends FormRequest
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
                'nullable',
                'string',
                'size:14',
                Rule::unique('delegates', 'cpf')->ignore($this->delegate->id),
            ],
            'name' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:15'],
            'is_whatsapp' => ['required', 'boolean'], 
            'votes_count' => ['nullable','integer','min:0'],
            'type' => ['nullable','in:Eleito,Suplente,Não Eleito'],
            'segment_id' => ['required', 'exists:segments,id'],
            'participated' => ['required','boolean'],
            'origin' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * Custom error messages.
     */
    public function messages(): array
    {
        return [
            'cpf.size' => 'O CPF deve ter 14 caracteres, no formato XXX.XXX.XXX-XX.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'name.required' => 'O nome é obrigatório.',
            'contact.required' => 'O contato é obrigatório.',
            'is_whatsapp.required' => 'Informe se é WhatsApp.',
            'segment_id.required' => 'O segmento é obrigatório.',
        ];
    }
}
