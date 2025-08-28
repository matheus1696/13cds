<?php

namespace App\Http\Requests\Admin\Student;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ReflectionUpdateRequest extends FormRequest
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
        $reflection = $this->route('reflection');

        return [
            'title' => ['required','string','max:255','min:5'],
            'description' => ['required','string','min:20','max:500'],
            'workload' => ['required','integer','min:1','max:360'],
            'start_date' => ['required','date'],
            'end_date' => ['required','date','after_or_equal:start_date']
        ];
    }

    /**
     * Custom validation messages
     */
    public function messages(): array
    {
        return [
            'end_date.after_or_equal' => 'A data de término não pode ser anterior à data de início.'
        ];
    }
}
