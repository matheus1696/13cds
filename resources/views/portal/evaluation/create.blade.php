<x-app-layout>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="text-justify text-gray-700 leading-relaxed mt-6 space-y-3 px-6">
                    <h3 class="text-xl font-semibold text-blue-500 mb-4">{{ $evaluation->title }}</h3>
                    <p class="text-sm font-medium leading-5 text-gray-500">{{ $evaluation->description }}</p>
                    <p class="text-sm font-semibold leading-5 text-gray-700">Sua contribuição é essencial para aprimorar o curso!</p>
                </div>
                
                <div class="mb-8 mt-6 h-3 bg-blue-500"></div>

                <section class="mb-8">
                    <form action="{{ route('evaluation_answers.store', $evaluation->id) }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Tempo de atuação na rede -->
                        <div class="px-6 mb-4">
                            <p class="text-sm font-medium leading-5 text-gray-500">
                                Para iniciarmos a avaliação, informe há quanto tempo você atua na rede municipal de saúde de Caruaru. Esse dado nos ajuda a entender o perfil.
                            </p>
                            <hr class="mt-4 mb-6">
                        </div>

                        <div class="px-6">
                            <x-form.input-label for="network_experience" :value="__('Tempo de atuação na rede de Caruaru-PE?')" />
                            <div class="grid md:grid-cols-3 gap-4 my-2">
                                <x-form.input-radio id="xp_0-2" name="network_experience" value="0-2" label="0 a 2 anos" :checked="old('network_experience') == '0-2'" />
                                <x-form.input-radio id="xp_3-5" name="network_experience" value="3-5" label="3 a 5 anos" :checked="old('network_experience') == '3-5'" />
                                <x-form.input-radio id="xp_5_mais" name="network_experience" value="+5" label="Mais de 5 anos" :checked="old('network_experience') == '+5'" />
                            </div>
                            <x-form.input-error :messages="$errors->get('network_experience')" class="mt-2" />
                        </div>

                        <div class="mb-8 mt-6 h-0.5 bg-blue-500"></div>

                        <!-- Atividade Presencial -->
                        <div>
                            <!-- Participou do encontro? -->
                            <div class="px-6 mb-4">
                                <p class="text-sm font-medium leading-5 text-gray-500">
                                    Nesta etapa, você avaliará a atividade presencial vinculada ao tema <strong>{{ $evaluation->PresentialActivity->title }}</strong>. Suas percepções são essenciais para o aprimoramento das formações presenciais.
                                </p>
                            <hr class="mt-4 mb-6">
                            </div>

                            <div class="px-6">
                                <x-form.input-label for="attended_meeting" :value="__('Você participou do encontro presencial sobre').' '.$evaluation->PresentialActivity->title" />
                                <div class="grid md:grid-cols-2 gap-6 my-2">
                                    <x-form.input-radio id="attended_meeting_yes" name="attended_meeting" value="sim" label="Participei do encontro presencial" :checked="old('attended_meeting') == 'sim'" />
                                    <x-form.input-radio id="attended_meeting_no" name="attended_meeting" value="nao" label="Não participei do encontro presencial" :checked="old('attended_meeting') == 'nao'"  class="peer-checked:bg-red-600 peer-checked:text-white peer-checked:border-red-600 hover:border-red-600"/>
                                </div>
                                <x-form.input-error :messages="$errors->get('attended_meeting')" class="mt-2" />
                            </div>

                            <!-- Perguntas que aparecem apenas se "sim" for selecionado -->
                            <div id="follow-up-questions-meeting" @if(old('attended_meeting') !== 'sim') style="display:none" @endif>

                                <div class="mb-8 mt-6 h-0.5 bg-blue-500"></div>

                                @php
                                $statements = [
                                    'facilitators_participation' => 'Os facilitadores promoveram participação e escuta ativa durante o encontro sobre o tema '.$evaluation->PresentialActivity->title,
                                    'content_relevance' => 'O conteúdo foi relevante e aplicável à minha prática profissional sobre o tema '.$evaluation->PresentialActivity->title,
                                    'competence_contribution' => 'O encontro sobre o tema '.$evaluation->PresentialActivity->title.' contribuiu para o fortalecimento das minhas competências técnicas',
                                    'methodology_exchange' => 'A metodologia favoreceu a troca de experiências e saberes entre os participantes',
                                    'facilitators_mastery' => 'Os facilitadores demonstraram domínio sobre o tema '.$evaluation->PresentialActivity->title,
                                    'matricial_support_comprehension' => 'O encontro ampliou minha compreensão sobre o papel do apoio matricial sobre o tema '.$evaluation->PresentialActivity->title,
                                    'welcoming_experience' => 'Senti-me acolhido(a), respeitado(a) e escutado(a) ao longo da atividade',
                                ];
                                $options = [
                                    '1' => __('Discordo totalmente'),
                                    '2' => __('Discordo'),
                                    '3' => __('Neutro'),
                                    '4' => __('Concordo'),
                                    '5' => __('Concordo totalmente'),
                                ];
                                @endphp

                                @foreach($statements as $field => $label)
                                <div class="mb-8 px-6">
                                    <x-form.input-label :for="$field" :value="$label" />
                                    <div class="grid md:grid-cols-5 gap-2 mt-2">
                                        @foreach($options as $key => $option)
                                            @php
                                                $colorClass = match((int)$key) {
                                                    1 => 'peer-checked:bg-red-800 peer-checked:text-white peer-checked:border-red-800 hover:border-red-800',
                                                    2 => 'peer-checked:bg-red-600 peer-checked:text-white peer-checked:border-red-600 hover:border-red-600',
                                                    3 => 'peer-checked:bg-gray-400 peer-checked:text-white peer-checked:border-gray-400 hover:border-gray-400',
                                                    4 => 'peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600',
                                                    5 => 'peer-checked:bg-blue-800 peer-checked:text-white peer-checked:border-blue-800 hover:border-blue-800',
                                                    default => '',
                                                };
                                            @endphp
                                            <x-form.input-radio id="{{ $field }}_{{ $key }}" name="{{ $field }}" value="{{ $key }}" :label="$option" :checked="old($field) == $key" class="{{ $colorClass }}"/>
                                        @endforeach
                                    </div>
                                    <x-form.input-error :messages="$errors->get($field)" class="mt-2 mb-4" />

                                    <hr class="mt-4 mb-6">

                                    <x-form.input-label :for="$field.'_note'" :value="__('Explique a resposta anterior (Opcional)')" class="mt-4" />
                                    <x-form.textarea name="{{ $field }}_note" id="{{ $field }}_note" rows="3">{{ old($field.'_note') }}</x-form.textarea>
                                    <x-form.input-error :messages="$errors->get($field.'_note')" class="mt-2" />
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="mb-8 mt-6 h-0.5 bg-blue-500"></div>

                        <!-- Fichamento -->
                        <div>
                            <!-- Participou do envio do fichamento? -->
                            <div class="px-6 mb-4">
                                <p class="text-sm font-medium leading-5 text-gray-500">
                                    Agora, avalie o processo de leitura e envio do fichamento referente ao texto <strong>{{ $evaluation->Reflection->title }}</strong>. Queremos compreender como essa etapa contribuiu para o seu aprendizado.
                                </p>
                                <hr class="mt-4 mb-6">
                            </div>

                            <div class="px-6">
                                <x-form.input-label for="sending_reflection" :value="__('Você participou do envio do fichamento sobre '). $evaluation->Reflection->title" />
                                <div class="grid md:grid-cols-2 gap-6 my-2">
                                    <x-form.input-radio id="sending_reflection_yes" name="sending_reflection" value="sim" label="Encaminhei o fichamento" :checked="old('sending_reflection') == 'sim'" />
                                    <x-form.input-radio id="sending_reflection_no" name="sending_reflection" value="nao" label="Não encaminhei o fichamento" :checked="old('sending_reflection') == 'nao'"  class="peer-checked:bg-red-600 peer-checked:text-white peer-checked:border-red-600 hover:border-red-600"/>
                                </div>
                                <x-form.input-error :messages="$errors->get('sending_reflection')" class="mt-2" />
                            </div>

                            <!-- Perguntas que aparecem apenas se "sim" for selecionado -->
                            <div id="follow-up-questions-reflection" @if(old('sending_reflection') !== 'sim') style="display:none" @endif>

                                <div class="mb-8 mt-6 h-0.5 bg-blue-500"></div>

                                @php
                                $statementsReflection = [
                                    'reflection_participation' => 'A leitura e fichamento do texto "'. $evaluation->Reflection->title .'" foi relevante para o meu aprendizado sobre o conteúdo de '. $evaluation->PresentialActivity->title,
                                ];
                                @endphp

                                @foreach($statementsReflection as $field => $label)
                                    <div class="mb-8 px-6">
                                        <x-form.input-label :for="$field" :value="$label" />
                                        <div class="grid md:grid-cols-5 gap-2 mt-2">
                                            @foreach($options as $key => $option)
                                                @php
                                                    $colorClass = match((int)$key) {
                                                        1 => 'peer-checked:bg-red-800 peer-checked:text-white peer-checked:border-red-800 hover:border-red-800',
                                                        2 => 'peer-checked:bg-red-600 peer-checked:text-white peer-checked:border-red-600 hover:border-red-600',
                                                        3 => 'peer-checked:bg-gray-400 peer-checked:text-white peer-checked:border-gray-400 hover:border-gray-400',
                                                        4 => 'peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600',
                                                        5 => 'peer-checked:bg-blue-800 peer-checked:text-white peer-checked:border-blue-800 hover:border-blue-800',
                                                        default => '',
                                                    };
                                                @endphp
                                                <x-form.input-radio id="{{ $field }}_{{ $key }}" name="{{ $field }}" value="{{ $key }}" :label="$option" :checked="old($field) == $key" class="{{ $colorClass }}"/>
                                            @endforeach
                                        </div>
                                        <x-form.input-error :messages="$errors->get($field)" class="mt-2 mb-4" />

                                        <hr class="mt-4 mb-6">

                                        <x-form.input-label :for="$field.'_note'" :value="__('Explique a resposta anterior (Opcional)')" class="mt-4" />
                                        <x-form.textarea name="{{ $field }}_note" id="{{ $field }}_note" rows="3">{{ old($field.'_note') }}</x-form.textarea>
                                        <x-form.input-error :messages="$errors->get($field.'_note')" class="mt-2" />
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="mb-8 mt-6 h-0.5 bg-blue-500"></div>

                        <!-- Atividade Prática -->
                        <div>
                            <!-- Participou do envio do relatório de atividade prática? -->
                            <div class="px-6 mb-6">
                                <p class="text-sm font-medium leading-5 text-gray-500">
                                    Agora, queremos conhecer sua percepção sobre a <strong>atividade prática</strong> realizada durante o curso. Avalie como foi sua vivência, aplicabilidade dos conteúdos e contribuições para sua prática profissional.
                                </p>
                                <hr class="mt-4 mb-6">
                            </div>

                            <div class="px-6">
                                <x-form.input-label for="sending_exercises" :value="__('Você participou do envio do relatório de atividade prática sobre o tema '). $evaluation->Exercise->title" />
                                <div class="grid md:grid-cols-2 gap-6 my-2">
                                    <x-form.input-radio id="sending_exercises_yes" name="sending_exercises" value="sim" label="Encaminhei a atividade prática em grupo" :checked="old('sending_exercises') == 'sim'" />
                                    <x-form.input-radio id="sending_exercises_no" name="sending_exercises" value="nao" label="Não encaminhei a atividade prática em grupo" :checked="old('sending_exercises') == 'nao'"  class="peer-checked:bg-red-600 peer-checked:text-white peer-checked:border-red-600 hover:border-red-600"/>
                                </div>
                                <x-form.input-error :messages="$errors->get('sending_exercises')" class="mt-2" />
                            </div>

                            <!-- Perguntas que aparecem apenas se "sim" for selecionado -->
                            <div id="follow-up-questions-exercises" @if(old('sending_exercises') !== 'sim') style="display:none" @endif>

                                <div class="mb-8 mt-6 h-0.5 bg-blue-500"></div>

                                @php
                                $statementsExercises = [
                                    'exercises_participation' => 'A realização da atividade prática foi relevante para o meu aprendizado sobre o conteúdo de '. $evaluation->PresentialActivity->title .', pois ampliou a reflexão sobre as práticas',
                                ];
                                @endphp

                                @foreach($statementsExercises as $field => $label)
                                <div class="mb-8 px-6">
                                    <x-form.input-label :for="$field" :value="$label" />
                                    <div class="grid md:grid-cols-5 gap-2 mt-2">
                                        @foreach($options as $key => $option)
                                            @php
                                                $colorClass = match((int)$key) {
                                                    1 => 'peer-checked:bg-red-800 peer-checked:text-white peer-checked:border-red-800 hover:border-red-800',
                                                    2 => 'peer-checked:bg-red-600 peer-checked:text-white peer-checked:border-red-600 hover:border-red-600',
                                                    3 => 'peer-checked:bg-gray-400 peer-checked:text-white peer-checked:border-gray-400 hover:border-gray-400',
                                                    4 => 'peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600',
                                                    5 => 'peer-checked:bg-blue-800 peer-checked:text-white peer-checked:border-blue-800 hover:border-blue-800',
                                                    default => '',
                                                };
                                            @endphp
                                            <x-form.input-radio id="{{ $field }}_{{ $key }}" name="{{ $field }}" value="{{ $key }}" :label="$option" :checked="old($field) == $key" class="{{ $colorClass }}"/>
                                        @endforeach
                                    </div>
                                    <x-form.input-error :messages="$errors->get($field)" class="mt-2 mb-4" />

                                    <hr class="mt-4 mb-6">

                                    <x-form.input-label :for="$field.'_note'" :value="__('Explique a resposta anterior (Opcional)')" class="mt-4" />
                                    <x-form.textarea name="{{ $field }}_note" id="{{ $field }}_note" rows="3">{{ old($field.'_note') }}</x-form.textarea>
                                    <x-form.input-error :messages="$errors->get($field.'_note')" class="mt-2" />
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="mb-8 mt-6 h-0.5 bg-blue-500"></div>

                        <!-- Perguntas gerais -->

                        <div class="px-6 mb-6">
                            <p class="text-sm font-medium leading-5 text-gray-500">
                                Por fim, avalie o curso de forma geral, considerando todos os seus componentes: encontros presenciais, fichamentos, atividades práticas e interações. Sua opinião é fundamental para aperfeiçoarmos as próximas edições!
                            </p>
                            <hr class="mt-4 mb-6">
                        </div>

                        <div class="space-y-6 px-6">
                            <div>
                                <x-form.input-label for="course_highlight" :value="__('O que mais te marcou no curso?')" />
                                <x-form.textarea name="course_highlight" id="course_highlight" rows="4">{{ old('course_highlight') }}</x-form.textarea>
                                <x-form.input-error :messages="$errors->get('course_highlight')" />
                            </div>

                            <hr class="mt-4 mb-6">

                            <div>
                                <x-form.input-label for="expected_changes" :value="__('Que mudanças você já percebe (ou espera perceber) na sua atuação após o curso?')" />
                                <x-form.textarea name="expected_changes" id="expected_changes" rows="4">{{ old('expected_changes') }}</x-form.textarea>
                                <x-form.input-error :messages="$errors->get('expected_changes')" />
                            </div>

                            <hr class="mt-4 mb-6">

                            <div>
                                <x-form.input-label for="course_impact" :value="__('Como esse curso impactou (ou pode impactar) sua equipe e o cuidado ofertado à população?')" />
                                <x-form.textarea name="course_impact" id="course_impact" rows="4">{{ old('course_impact') }}</x-form.textarea>
                                <x-form.input-error :messages="$errors->get('course_impact')" />
                            </div>

                            <hr class="mt-4 mb-6">
                            
                            <div>
                                <x-form.input-label for="improvements" :value="__('Quais sugestões você tem para melhorar o curso?')" />
                                <x-form.textarea name="improvements" id="improvements" rows="4">{{ old('improvements') }}</x-form.textarea>
                                <x-form.input-error :messages="$errors->get('improvements')" />
                            </div>
                            
                            <hr class="mt-4 mb-6">

                            <div>
                                <x-form.input-label for="additional_comments" :value="__('Comentários adicionais (opcional)')" />
                                <x-form.textarea name="additional_comments" id="additional_comments" rows="3">{{ old('additional_comments') }}</x-form.textarea>
                                <x-form.input-error :messages="$errors->get('additional_comments')" />
                            </div>
                        </div>

                        <!-- Botão de Envio -->
                        <div class="mb-4 px-6">
                            <x-button.btn-primary type="submit" class="w-full">Enviar Experiências do Curso </x-button.btn-primary>
                        </div>

                    </form>
                </section>

            </div>
        </div>
    </div>

    <script>
        // Scripts para mostrar/esconder blocos condicionalmente
        document.addEventListener('DOMContentLoaded', function () {
            const meetingRadios = document.querySelectorAll('input[name="attended_meeting"]');
            const meetingSection = document.getElementById('follow-up-questions-meeting');

            const reflectionRadios = document.querySelectorAll('input[name="sending_reflection"]');
            const reflectionSection = document.getElementById('follow-up-questions-reflection');

            const exercisesRadios = document.querySelectorAll('input[name="sending_exercises"]');
            const exercisesSection = document.getElementById('follow-up-questions-exercises');

            function toggleSection(radios, section) {
                radios.forEach(radio => {
                    radio.addEventListener('change', () => {
                        if (radio.value === 'sim' && radio.checked) {
                            section.style.display = '';
                        } else if (radio.value === 'nao' && radio.checked) {
                            section.style.display = 'none';
                        }
                    });
                });
            }

            toggleSection(meetingRadios, meetingSection);
            toggleSection(reflectionRadios, reflectionSection);
            toggleSection(exercisesRadios, exercisesSection);
        });
    </script>
</x-app-layout>
