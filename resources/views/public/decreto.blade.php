<x-guest-layout>
    
    @include('public._partials.navigation')

    <!-- Decreto -->
    <section id="decreto" class="py-16 bg-white" aria-labelledby="decreto-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Documento Oficial</span>
                <h1 id="decreto-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Decreto Municipal Nº 100/2025</h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Convoca a 13ª Conferência Municipal de Saúde de Caruaru-PE</p>
            </div>

            <!-- Decreto Content -->
            <div class="max-w-7xl mx-auto overflow-hidden">

                <!-- Document Header -->
                <div class="bg-green-50 border-l-4 border-r border-y border-green-600 p-6 rounded-r-lg mb-12">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-green-800">DECRETO Nº 100, DE 11 DE SETEMBRO DE 2025</h2>
                            <p class="text-green-700">Prefeitura Municipal de Caruaru - Estado de Pernambuco</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="{{ asset('assets/docs/decreto.pdf') }}" 
                               download="Decreto_100_2025_Conferencia_Saude_Caruaru.pdf"
                               class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors inline-flex items-center">
                                <i class="fas fa-download mr-2"></i>
                                Baixar PDF
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Preâmbulo -->
                <div class="prose prose-lg max-w-none text-gray-700 space-y-6 mb-12">
                    <p>
                        <strong>O PREFEITO DO MUNICÍPIO DE CARUARU, ESTADO DE PERNAMBUCO,</strong> no uso das atribuições que lhe são conferidas pela legislação em vigor:
                    </p>

                    <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500">
                        <h3 class="font-bold text-blue-800 mb-4">CONSIDERANDO:</h3>
                        <div class="space-y-2 text-blue-700">
                            <p>✓ A Constituição Federal de 05 de outubro de 1988;</p>
                            <p>✓ A Lei nº 8.080/1990, que dispõe sobre as condições para promoção, proteção e recuperação da saúde;</p>
                            <p>✓ O disposto na Lei Federal nº 8.142/1990, especialmente o art. 1º, § 1º, que estabelece a obrigatoriedade das Conferências de Saúde a cada quatro anos;</p>
                            <p>✓ A Lei Complementar nº 141, de 13 de janeiro de 2012, que regulamenta o § 2º do art. 196 da Constituição Federal;</p>
                            <p>✓ A Portaria nº 2.135, de 25 de setembro de 2013, que estabelece diretrizes para o planejamento no âmbito do SUS;</p>
                            <p>✓ A Portaria de Consolidação nº 01, de 28 de setembro de 2017, que organiza normas sobre os direitos e deveres dos usuários do SUS;</p>
                            <p>✓ A Resolução CNS nº 453, de 10 de maio de 2012, que atribui ao Conselho de Saúde a função de convocar as Conferências de Saúde;</p>
                            <p>✓ A importância da participação social como princípio do SUS;</p>
                            <p>✓ A deliberação do Conselho Municipal de Saúde de Caruaru, em reunião realizada no dia 25 de fevereiro de 2025;</p>
                        </div>
                    </div>
                </div>

                <div class="text-center my-8">
                    <h3 class="text-2xl font-bold text-green-700">DECRETA:</h3>
                </div>

                <!-- Artigos -->
                <div class="space-y-8">
                    <div class="border-l-4 border-green-500 pl-6">
                        <h4 class="font-bold text-green-700 text-lg mb-2">Art. 1º</h4>
                        <p class="text-gray-700">
                            Fica convocada a 13ª Conferência Municipal de Saúde de Caruaru, a realizar-se no dia 08 de outubro de 2025, no Auditório da Secretaria Municipal de Educação e Esportes de Caruaru, sob coordenação do Conselho Municipal de Saúde e da Secretaria Municipal de Saúde, com o tema: <strong>"Caruaru pelo SUS que acolhe, integra e cuida"</strong>.
                        </p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <h4 class="font-bold text-green-700 text-lg mb-2">Art. 2º</h4>
                        <p class="text-gray-700">
                            A 13ª Conferência Municipal de Saúde de Caruaru será presidida pela mesa diretora do Conselho Municipal de Saúde.
                        </p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <h4 class="font-bold text-green-700 text-lg mb-2">Art. 3º</h4>
                        <p class="text-gray-700">
                            O Regimento Interno da 13ª Conferência Municipal de Saúde de Caruaru será apreciado e aprovado pelo Pleno do Conselho Municipal de Saúde de Caruaru ou pela Comissão Organizadora.
                        </p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <h4 class="font-bold text-green-700 text-lg mb-2">Art. 4º</h4>
                        <p class="text-gray-700">
                            As despesas com a organização e realização da 13ª Conferência correrão por conta dos recursos orçamentários da Secretaria Municipal de Saúde.
                        </p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <h4 class="font-bold text-green-700 text-lg mb-2">Art. 5º</h4>
                        <p class="text-gray-700">
                            Este Decreto entra em vigor na data da sua publicação.
                        </p>
                    </div>
                </div>

                <!-- Informações Adicionais -->
                <div class="bg-gray-50 rounded-lg p-6 my-12">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Informações do Decreto</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-medium text-gray-700 mb-2">Publicação Oficial</h4>
                            <p class="text-gray-600">Diário Oficial do Município de Caruaru</p>
                            <p class="text-gray-600">Edição de 11 de setembro de 2025</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-700 mb-2">Vigência</h4>
                            <p class="text-gray-600">A partir de 11 de setembro de 2025</p>
                            <p class="text-gray-600">Decreto nº 100/2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>
