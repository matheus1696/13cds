<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Certificado de Delegado</title>
    <style>
        @page { 
            margin: 0; 
            size: A4 landscape; 
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            position: relative;
            width: 100%;
            height: 100vh;
        }
        /* Conteúdo centralizado */
        .content {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
            padding: 0 80px;
            box-sizing: border-box;
        }
        .content p {
            font-size: 22px;
            color: #065f46;
            line-height: 1.6;
        }
        .content .nome {
            font-weight: bold;
            font-size: 28px;
            color: #064e3b;
        }
        .content .segmento {
            font-weight: bold;
            color: #064e3b;
        }
    </style>
</head>
<body style="background: url('{{ public_path('assets/img/certificates.png') }}') no-repeat center center; background-size: cover; height: 100vh; width: 100vw;">

    <!-- Conteúdo do certificado -->
    <div class="content">
        <p>
            Certificamos que <span class="nome">{{ $delegate->name }}</span> participou na qualidade de Delegado pelo segmento <span class="segmento">{{ $delegate->Segment->name ?? '' }}</span> da 13ª Conferência Municipal de Saúde, com o tema: "<strong>Caruaru pelo SUS que acolhe, integra e cuida</strong>", realizada dia 8 de outubro de 2025 no Auditório da Secretaria Municipal de Educação de Caruaru.
        </p>
    </div>
</body>
</html>
