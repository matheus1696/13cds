# Sistema de Gestão - Conferência Municipal de Saúde de Caruaru

## Apresentação

Este projeto consiste no desenvolvimento de um sistema web completo para gerenciar a 13º Conferência Municipal de Saúde de Caruaru. A plataforma foi projetada para centralizar e simplificar todas as etapas do evento, desde o cadastro dos participantes até a geração de relatórios pós-evento, proporcionando uma experiência eficiente e organizada para a equipe responsável.

O sistema é composto por um painel administrativo robusto, um site público informativo e um aplicativo moderno de credenciamento (PWA) que funciona perfeitamente mesmo sem conexão com a internet. Focado em segurança, simplicidade e baixo custo, esta solução utiliza tecnologias estáveis e amplamente adotadas no mercado para garantir confiabilidade e facilidade de manutenção.

## Funcionalidades Principais

- **Cadastro Interno de Participantes:** Interface administrativa para registro manual de participantes, com validação de CPF e prevenção de duplicidades.

- **Gestão de Conteúdo do Evento:** Painel para administrar listas de delegados, propostas aprovadas e a programação completa da conferência.

- **Site Público Institucional:** Páginas informativas sobre o evento, incluindo história, programação, local, lista de delegados e propostas.

- **Credenciamento Offline (PWA):** Aplicativo otimizado para smartphones e tablets que permite realizar o check-in dos participantes mesmo sem acesso à internet, sincronizando os dados automaticamente quando a conexão for restabelecida.

- **Emissão de Certificados:** Módulo automático que gera certificados personalizados em PDF mediante consulta de CPF, validando a presença no evento.

- **Geração de Relatórios:** Ferramentas para exportar listas de presença, inscritos por segmento e outros dados relevantes em formatos PDF e Excel.

- **Pesquisa de Satisfação:** Formulário simples para coletar feedback dos participantes sobre a organização do evento.

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

- **Usuário Padrão:** `admin`  
- **Senha:** `admin`  

## Licença

Este projeto é de uso interno e restrito à Secretaria Municipal de Saúde de Caruaru. 
Para mais detalhes, consulte o arquivo [LICENSE.md](LICENSE.md).
