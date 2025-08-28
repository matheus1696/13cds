<x-app-layout>
    
    <x-slot name="header">
        <x-header.title title="{{ __('Gráficos de Avaliação') }}" />
    </x-slot>

    <div class="container mx-auto py-8 px-5 space-y-5">
        <h1 class="text-2xl font-bold mb-8 text-center">Avaliação do Encontro Presencial</h1>
        <div class="flex flex-col md:flex-row justify-center items-center gap-5">
            <!-- Experiência -->
            <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-300 flex flex-col items-center w-full md:w-[400px] lg:w-[600px]">
                <h2 class="text-lg font-semibold mb-4 text-center">Experiência</h2>
                <canvas id="experienceChart"></canvas>
            </div>
        </div>

        <hr class="py-4">

        <h1 class="text-2xl font-bold mb-8 text-center">Avaliação do Encontro Presencial</h1>
        <div class="flex flex-col md:flex-row justify-center items-center gap-5">

            <!-- Participação -->
            <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-300 flex flex-col items-center w-full md:w-[400px] lg:w-[600px]">
                <h2 class="text-lg font-semibold mb-4 text-center">Participação</h2>
                <canvas id="attendanceChart"></canvas>
            </div>
            
            <!-- Avaliação dos Facilitadores -->
            <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-300 flex flex-col items-center w-full md:w-[400px] lg:w-[600px]">
                <h2 class="text-lg font-semibold mb-4 text-center">Avaliação dos Facilitadores</h2>
                <canvas id="facilitatorsChart"></canvas>
            </div>
        </div>
        
        <hr class="py-4">

        <h1 class="text-2xl font-bold mb-8 text-center">Avaliação da Reflexão</h1>
        <div class="flex flex-col md:flex-row justify-center items-center gap-5">

            <!-- Envio de Reflexões -->
            <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-300 flex flex-col items-center w-full md:w-[400px] lg:w-[600px]">
                <h2 class="text-lg font-semibold mb-4 text-center">Envio de Reflexões</h2>
                <canvas id="reflectionSentChart"></canvas>
            </div>

            <!-- Participação na Reflexão -->
            <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-300 flex flex-col items-center w-full md:w-[400px] lg:w-[600px]">
                <h2 class="text-lg font-semibold mb-4 text-center">Participação na Reflexão</h2>
                <canvas id="reflectionParticipationChart"></canvas>
            </div>

        </div>

        <hr class="py-4">
        
        <h1 class="text-2xl font-bold mb-8 text-center">Avaliação da Atividade Prática</h1>
        <div class="flex flex-col md:flex-row justify-center items-center gap-5">

            <!-- Exercícios Enviados -->
            <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-300 flex flex-col items-center w-full md:w-[400px] lg:w-[600px]">
                <h2 class="text-lg font-semibold mb-4 text-center">Exercícios Enviados</h2>
                <canvas id="exerciseSentChart"></canvas>
            </div>

            <!-- Avaliação dos Exercícios -->
            <div class="bg-white p-6 rounded-lg shadow-xl border border-gray-300 flex flex-col items-center w-full md:w-[400px] lg:w-[600px]">
                <h2 class="text-lg font-semibold mb-4 text-center">Avaliação dos Exercícios</h2>
                <canvas id="exerciseParticipationChart"></canvas>
            </div>
            
        </div>        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Experiência
        new Chart(document.getElementById('experienceChart'), {
            type: 'bar',
            data: {
                labels: ['0-2 anos', '3-5 anos', '+5 anos'],
                datasets: [{
                    label: 'Experiência na Rede',
                    data: [
                        {{ $experience->experience_0_2 }},
                        {{ $experience->experience_3_5 }},
                        {{ $experience->experience_plus_5 }}
                    ],
                    backgroundColor: ['#34D399', '#60A5FA', '#F87171']
                }]
            },
            options: {
                scales: { 
                    y: { 
                        ticks: {
                            stepSize: 1
                        }
                    } 
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Participação
        new Chart(document.getElementById('attendanceChart'), {
            type: 'bar',
            data: {
                labels: ['Participaram', 'Não Participaram'],
                datasets: [{
                    label: 'Atendimento',
                    data: [{{ $attendance->participated }}, {{ $attendance->not_participated }}],
                    backgroundColor: ['#60A5FA', '#FBBF24']
                }]
            },
            options: {
                scales: { 
                    y: { 
                        ticks: {
                            stepSize: 1
                        }
                    } 
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Avaliação dos Facilitadores
        new Chart(document.getElementById('facilitatorsChart'), {
            type: 'bar',
            data: {
                labels: ['Facilitadores','Conteúdo','Competência','Metodologia','Domínio','Apoio Matricial','Acolhimento'],
                datasets: [{
                    label: 'Nota Média',
                    data: [
                        {{ $facilitators->facilitators }},
                        {{ $facilitators->content_relevance }},
                        {{ $facilitators->competence }},
                        {{ $facilitators->methodology }},
                        {{ $facilitators->mastery }},
                        {{ $facilitators->matricial }},
                        {{ $facilitators->welcoming_experience }}
                    ],
                    backgroundColor: '#3B82F6'
                }]
            },
            options: {
                scales: { 
                    y: { 
                        beginAtZero: true, 
                        max: 5,
                    } 
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Envio de Reflexões
        new Chart(document.getElementById('reflectionSentChart'), {
            type: 'bar',
            data: {
                labels: ['Enviaram','Não enviaram'],
                datasets: [{
                    label: 'Reflexões',
                    data: [{{ $reflectionSent->sent }}, {{ $reflectionSent->not_sent }}],
                    backgroundColor: ['#34D399', '#F87171']
                }]
            },
            options: {
                scales: { 
                    y: { 
                        ticks: {
                            stepSize: 1
                        }
                    } 
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Participação na Reflexão
        new Chart(document.getElementById('reflectionParticipationChart'), {
            type: 'bar',
            data: {
                labels: ['Participação Média'],
                datasets: [{
                    label: 'Nota Média',
                    data: [{{ $reflectionParticipation }}],
                    backgroundColor: '#60A5FA'
                }]
            },
            options: {
                scales: { 
                    y: { 
                        beginAtZero: true, 
                        max: 5
                    } 
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Exercícios Enviados
        new Chart(document.getElementById('exerciseSentChart'), {
            type: 'bar',
            data: {
                labels: ['Enviaram','Não enviaram'],
                datasets: [{
                    label: 'Exercícios',
                    data: [{{ $exerciseSent->sent }}, {{ $exerciseSent->not_sent }}],
                    backgroundColor: ['#34D399', '#F87171']
                }]
            },
            options: {
                scales: { 
                    y: { 
                        ticks: {
                            stepSize: 1
                        }
                    } 
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Avaliação dos Exercícios
        new Chart(document.getElementById('exerciseParticipationChart'), {
            type: 'bar',
            data: {
                labels: ['Nota Média Exercício'],
                datasets: [{
                    label: 'Nota Média',
                    data: [{{ $exerciseParticipation }}],
                    backgroundColor: '#FBBF24'
                }]
            },
            options: {
                scales: { 
                    y: { 
                        beginAtZero: true, 
                        max: 5
                    } 
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</x-app-layout>
