<?php

namespace App\Http\Requests\Evaluation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EvaluationStoreRequest extends FormRequest
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
            // Campos básicos
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],

            // FKs (precisam existir nas tabelas relacionadas)
            'presential_activity_id' => ['required', 'integer', Rule::exists('presential_activities', 'id'),],
            'reflection_id' => ['required', 'integer', Rule::exists('reflections', 'id'),],
            'exercise_id' => ['required', 'integer', Rule::exists('exercises', 'id'),],
        ];
    }

    public function attributes(): array
    {
        return [
            'title'                  => 'título',
            'description'            => 'descrição',
            'presential_activity_id' => 'atividade presencial',
            'reflection_id'          => 'fichamento',
            'exercise_id'            => 'atividade prática',
            'start_date'             => 'data de início',
            'end_date'               => 'data de término',
        ];
    }
}
