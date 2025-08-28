<?php

namespace App\Http\Requests\Evaluation;

use Illuminate\Foundation\Http\FormRequest;

class EvaluationAnswerStoreRequest extends FormRequest
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

            'network_experience' => ['required'],
            
            // Bloco: Encontro Presencial
            'attended_meeting' => ['required', 'in:sim,nao'],

            'facilitators_participation' => ['required_if:attended_meeting,sim', 'integer', 'between:1,5'],
            'facilitators_participation_note' => ['nullable', 'string'],

            'content_relevance' => ['required_if:attended_meeting,sim', 'integer', 'between:1,5'],
            'content_relevance_note' => ['nullable', 'string'],

            'competence_contribution' => ['required_if:attended_meeting,sim', 'integer', 'between:1,5'],
            'competence_contribution_note' => ['nullable', 'string'],

            'methodology_exchange' => ['required_if:attended_meeting,sim', 'integer', 'between:1,5'],
            'methodology_exchange_note' => ['nullable', 'string'],

            'facilitators_mastery' => ['required_if:attended_meeting,sim', 'integer', 'between:1,5'],
            'facilitators_mastery_note' => ['nullable', 'string'],

            'matricial_support_comprehension' => ['required_if:attended_meeting,sim', 'integer', 'between:1,5'],
            'matricial_support_comprehension_note' => ['nullable', 'string'],

            'welcoming_experience' => ['required_if:attended_meeting,sim', 'integer', 'between:1,5'],
            'welcoming_experience_note' => ['nullable', 'string'],

            // Bloco: Fichamento
            'sending_reflection' => ['required', 'in:sim,nao'],
            'reflection_participation' => ['required_if:sending_reflection,sim', 'integer', 'between:1,5'],
            'reflection_participation_note' => ['nullable', 'string'],

            // Bloco: Exercícios
            'sending_exercises' => ['required', 'in:sim,nao'],
            'exercises_participation' => ['required_if:sending_exercises,sim', 'integer', 'between:1,5'],
            'exercises_participation_note' => ['nullable', 'string'],

            // Bloco: Perguntas Gerais
            'course_highlight' => ['required', 'string'],
            'expected_changes' => ['required', 'string'],
            'improvements' => ['required', 'string'],
            'course_impact' => ['required', 'string'],
            'additional_comments' => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'network_experience.required' => 'Por favor, compartilhe sua experiência na rede.',

            // Bloco: Reunião
            'attended_meeting.required' => 'Informe se participou da reunião.',
            'attended_meeting.in' => 'Valor inválido para participação na reunião.',

            'facilitators_participation.required_if' => 'Avalie a participação dos facilitadores.',
            'facilitators_participation.integer' => 'A nota deve ser um número entre 1 e 5.',
            'facilitators_participation.between' => 'A nota para os facilitadores deve estar entre 1 e 5.',

            'content_relevance.required_if' => 'Avalie a relevância do conteúdo da reunião.',
            'content_relevance.integer' => 'A nota deve ser um número entre 1 e 5.',
            'content_relevance.between' => 'A nota para relevância do conteúdo deve estar entre 1 e 5.',

            'competence_contribution.required_if' => 'Avalie a contribuição para suas competências.',
            'competence_contribution.integer' => 'A nota deve ser um número entre 1 e 5.',
            'competence_contribution.between' => 'A nota para contribuição de competências deve estar entre 1 e 5.',

            'methodology_exchange.required_if' => 'Avalie a troca de metodologias e experiências.',
            'methodology_exchange.integer' => 'A nota deve ser um número entre 1 e 5.',
            'methodology_exchange.between' => 'A nota para troca de metodologias deve estar entre 1 e 5.',

            'facilitators_mastery.required_if' => 'Avalie o domínio dos facilitadores sobre o conteúdo.',
            'facilitators_mastery.integer' => 'A nota deve ser um número entre 1 e 5.',
            'facilitators_mastery.between' => 'A nota para domínio dos facilitadores deve estar entre 1 e 5.',

            'matricial_support_comprehension.required_if' => 'Avalie o quanto compreendeu sobre o Apoio Matricial.',
            'matricial_support_comprehension.integer' => 'A nota deve ser um número entre 1 e 5.',
            'matricial_support_comprehension.between' => 'A nota para compreensão do apoio matricial deve estar entre 1 e 5.',

            'welcoming_experience.required_if' => 'Avalie sua experiência de acolhimento durante a reunião.',
            'welcoming_experience.integer' => 'A nota deve ser um número entre 1 e 5.',
            'welcoming_experience.between' => 'A nota para acolhimento deve estar entre 1 e 5.',

            // Bloco: Reflexão
            'sending_reflection.required' => 'Informe se você enviou seu fichamento.',
            'sending_reflection.in' => 'Valor inválido para participação na reflexão.',

            'reflection_participation.required_if' => 'Avalie sua participação na reflexão.',
            'reflection_participation.integer' => 'A nota deve ser um número entre 1 e 5.',
            'reflection_participation.between' => 'A nota para participação na reflexão deve estar entre 1 e 5.',

            // Bloco: Exercícios
            'sending_exercises.required' => 'Informe se você participou da atividade prática.',
            'sending_exercises.in' => 'Valor inválido para participação nos exercícios.',

            'exercises_participation.required_if' => 'Avalie sua participação na atividade prática.',
            'exercises_participation.integer' => 'A nota deve ser um número entre 1 e 5.',
            'exercises_participation.between' => 'A nota para participação nos exercícios deve estar entre 1 e 5.',

            // Finais (abertas)
            'course_highlight.required' => 'Compartilhe qual foi o maior destaque do curso.',
            'expected_changes.required' => 'Quais mudanças você espera aplicar após o curso?',
            'improvements.required' => 'Indique o que pode ser melhorado.',
            'course_impact.required' => 'Descreva o impacto que o curso teve em você.',
        ];
    }

}
