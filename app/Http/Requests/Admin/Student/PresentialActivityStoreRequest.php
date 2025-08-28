<?php

namespace App\Http\Requests\Admin\Student;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class PresentialActivityStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'workload' => ['required', 'integer', 'min:1'],
            'start_date' => ['required', 'date', 'after:' . Carbon::now()->toDateString()]
        ];
    }

    public function messages()
    {
        return [
            'start_date.after'  => 'A data de início não pode ser posterior à data de hoje.',
        ];
    }
}
