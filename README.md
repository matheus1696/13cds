# Portal do Aluno - Sistema de Gestão e Acompanhamento

## Apresentação

O **Portal do Aluno** é um sistema desenvolvido para o acompanhamento completo das atividades e progresso dos participantes do curso de aperfeiçoamento das equipes multiprofissionais da Atenção Primária à Saúde (APS) de Caruaru-PE. A plataforma tem como objetivo facilitar a gestão eficiente dos dados do projeto, oferecendo suporte para o monitoramento contínuo e a geração de relatórios detalhados.

Com uma interface intuitiva e recursos otimizados, o sistema proporciona uma visão ampla do desempenho das equipes, permitindo que gestores e coordenadores tomem decisões mais assertivas e promovam melhorias no processo de capacitação.

## Funcionalidades Principais

- **Acompanhamento:** Visualização completa do progresso dos alunos ao longo do curso, com acesso a indicadores de desempenho e frequência.
- **Gestão:** Controle administrativo das turmas, módulos e avaliações, facilitando a organização geral do curso.
- **Relatórios:** Geração de relatórios analíticos com dados consolidados para avaliação do impacto e eficiência do programa de capacitação.

## Instalação

Siga os passos abaixo para instalar e configurar o sistema:

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/matheus1696/portalaluno.git
    ```

2. **Instale as dependências:**

    ```bash
    composer install
    ```

    ```bash
    npm install
    ```

3. **Configure o ambiente:**

    ```bash
    cp .env.example .env
    ```

    ```bash
    php artisan key:generate
    ```

4. **Configure o banco de dados no arquivo `.env`** e execute as migrations:

    ```bash
    php artisan migrate --seed
    ```

5. **Inicie o servidor:**

    ```bash
    php artisan serve
    ```

    ```bash
    npm run dev
    ```

## Acesso ao Sistema

- **Usuário Padrão:** `admin@portaldoaluno.com.br`  
- **Senha:** `admin`  

## Licença

Este projeto é de uso interno e restrito aos envolvidos na gestão do curso de aperfeiçoamento das equipes multiprofissionais da APS de Caruaru-PE.
