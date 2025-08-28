<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Modelo de Relatório de Atividade Prática') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($exercises as $exercise)
                <div class="flex flex-col md:flex-row gap-5 bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 mb-5">
                    <div class="flex-1 text-gray-900">
                        <h2>{{ $exercise->title }}</h2>
                        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">
                            Prazo: {{ date('d/m/Y', strtotime($exercise->start_date)) }} até {{ date('d/m/Y', strtotime($exercise->end_date)) }}
                        </p>
                    </div>

                    <!-- Botões -->
                    <div class="flex justify-center items-center gap-2">

                        @if ($exercise->title == "Aplicação Prática em Território: Abordagem Centrada na Pessoa" || 
                            $exercise->title == "Aplicação Prática em Território: Cuidados Paliativos" || 
                            $exercise->title == "Aplicação Prática em Território: PTS e Saúde Mental")

                                <x-modal.modal title="Orientações">
                                                            
                                    <x-slot name="button">
                                        <x-button.btn-secondary @click="openModal = true">Orientações</x-button.btn-secondary>
                                    </x-slot>

                                    @if ($exercise->title == "Aplicação Prática em Território: Abordagem Centrada na Pessoa")
                                        <div class="space-y-2">
                                            <p class="text-sm text-justify text-gray-700">A atividade deve ser feita dentro do grupo da e-multi e consiste em uma entrevista com um usuário de qualquer equipe da ESF.</p>
                                            <p class="text-sm text-justify text-gray-700">Para a execução da atividade você contará com a ajuda de um colega e de um checklist (disponibilizado em anexo).</p>
                                            <p class="text-sm text-justify text-gray-700">A atividade tem 2 passos a serem seguidos, no primeiro deles você fará uma entrevista utilizando-se dos conceitos da clínica ampliada e seu colega irá observar a consulta e preencher o checklist com base nos questionamentos que você incluir na consulta. Em um segundo momento, você e seu colega irão refletir sobre a entrevista a partir do checklist, verificando o que foi plenamente feito, parcialmente feito ou ausente.</p>
                                            <p class="text-sm text-justify text-gray-700">Na "Descrição da atividade feita" deve-se colocar a data da entrevista, o nome (colocar apenas as iniciais), a idade do usuário entrevistado, a UBS do usuário e o nome do entrevistador.</p>
                                            <p class="text-sm text-justify text-gray-700">Na "Reflexão sobre a prática" cada membro do grupo deve escrever um parágrafo sobre como foi fazer uma entrevista com alguém observando e fazendo um checklist de tudo que era dito. Além disso, o grupo deve trazer uma reflexão sobre o uso do checklist como ferramenta, buscando entender se facilitou ou atrapalhou o olhar clínico ampliado sobre a pessoa que está sendo cuidada.</p>
                                        </div>
                                        <p class="text-end mt-5">
                                            <x-button.link-secondary href="/assets/doc/material_apoio_checklist_abordagem_centrada_pessoa.pdf" target="_blank">Anexo (Checklist)</x-button.link-secondary>
                                        </p>
                                    @endif

                                    @if ($exercise->title == "Aplicação Prática em Território: Cuidados Paliativos")
                                        <div class="space-y-2">
                                            <p class="text-sm text-justify text-gray-700">A equipe multi deve fazer uma matriz FOFA para todas as equipes da Estratégia de Saúde da Família que acompanham.</p>
                                            <p class="text-sm text-justify text-gray-700">A matriz FOFA significa identificar Forças, Oportunidades, Fraquezas e Ameaças dos fatores internos da equipe multiprofissional e os fatores externos à equipe (que são as equipes da Estratégia de Saúde da Família).</p>
                                            <p class="text-sm text-justify text-gray-700">Considere os seguintes significados:
                                                <ul>
                                                    <li class="text-sm text-justify text-gray-700">Força = São os pontos fortes da sua equipe multi, ou seja, vantagens internas que ajudam a alcançar o objetivo de realizar discussões de caso com a equipe da ESF;</li>
                                                    <li class="text-sm text-justify text-gray-700">Oportunidade = São tendências ou situações favoráveis da equipe da ESF que a vocês da equipe multi podem aproveitar para fazer discussão de casos;</li>
                                                    <li class="text-sm text-justify text-gray-700">Fraqueza = São limitações internas da equipe multi que dificultam o desempenho de vocês a fazerem discussão de caso com as equipes de ESF;</li>
                                                    <li class="text-sm text-justify text-gray-700">Ameaças = São fatores da equipe da ESF que podem prejudicar o desempenho ou ameaçar o trabalho de discutir casos com a sua equipe multi.</li>
                                                </ul>
                                            </p>
                                        </div>
                                        <p class="text-end mt-5">
                                            <x-button.link-secondary href="/assets/doc/material_apoio_cuidado_paliativo.pdf" target="_blank">Anexo (Checklist)</x-button.link-secondary>
                                        </p>
                                    @endif

                                    @if ($exercise->title == "Aplicação Prática em Território: PTS e Saúde Mental")
                                        <div class="space-y-2">
                                            <p class="text-sm text-justify text-gray-700">Identificar 1 pessoa ou família para realizar PTS em cada UBS;</p>
                                            <p class="text-sm text-justify text-gray-700">Conversar com a Equipe de Referência, oferecendo a oportunidade de fazer um PTS a partir do modelo desenvolvido pelo curso;</p>
                                            <p class="text-sm text-justify text-gray-700">Identificar na Equipe de Referência as facilidades e dificuldades para fazer o PTS;</p>
                                            <p class="text-sm text-justify text-gray-700">Escrever no relatório uma reflexão sobre cada uma das etapas anteriores (quais os desafios em identificar pessoas para fazer PTS? como podemos superar esse desafio? Quais os desafios para conversar e executar com a Equipe de Referência um PTS? Como podemos superar esses desafios?).</p>
                                        </div>
                                        <p class="text-end mt-5">
                                            <x-button.link-secondary href="/assets/doc/material_apoio_pratica_de_cuidado_em_saude_mental.pdf" target="_blank">Anexo (Checklist)</x-button.link-secondary>
                                        </p>
                                    @endif
                                    
                                </x-modal.modal>
                            
                        @endif
                        

                        <!-- Botão de Envio -->
                        <div class="flex items-center">

                            @php

                                $submmited = null;

                                foreach ($exerciseUsers as $value) {
                                    if($value->ExerciseAnswer->exercise_id == $exercise->id){
                                        $submmited = $value->ExerciseAnswer->status;
                                    }
                                }

                            @endphp
                            
                            @if ($submmited == "Concluído")
                                <x-button.link-alternative href="{{ route('exercises.show', $exercise->id) }}">Enviado</x-button.link-alternative>

                            @elseif (now()->lt($exercise->start_date))
                                <x-button.link-secondary>Aguardando</x-button.link-secondary>

                            @elseif (now()->between($exercise->start_date, Carbon\Carbon::parse($exercise->end_date)->addDay()))

                                <x-button.link-primary href="{{ route('exercises.create', $exercise->id) }}">Liberado</x-button.link-primary>

                            {{-- 4. Passou do prazo --}}
                            @elseif (now()->gt(Carbon\Carbon::parse($exercise->end_date)->addDay()))
                                <x-button.link-tertiary>Fora do Prazo</x-button.link-tertiary>
                            @endif

                        </div>
                        
                    </div>
                </div>
            @endforeach      
        </div>
    </div>
</x-app-layout>
