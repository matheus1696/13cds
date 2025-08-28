<?php

namespace App\Http\Requests\Tutor;

use Illuminate\Foundation\Http\FormRequest;

class ExerciseEvaluationUpdateRequest extends FormRequest
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
            'dominio_conteudo' => 'required|in:0,1,2',
            'organizacao_estrutura' => 'required|in:0,1,2',
            'pensamento_critico' => 'required|in:0,1,2',
            'uso_referencias' => 'required|in:0,1,2',
            'evaluation_feedback' => 'required|string|max:100000',
        ];
    }
}
