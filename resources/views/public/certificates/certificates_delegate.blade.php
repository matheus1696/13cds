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
            padding: 0;
            font-family: 'Arial', sans-serif;
            width: 100%;
            height: 100vh;
            background-image: url('<?php echo $_SERVER["DOCUMENT_ROOT"].'\assets\img\certificado.png';?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .certificate-content {
            position: absolute;
            top: 42%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 80%;
            color: #064e3b;
        }

        .certificate-content p {
            font-size: 32px;
            line-height: 1.8;
        }

        .name {
            font-weight: 600;
            font-size: 32px;
            color: #022c22;
        }

        .segment {
            font-weight: 600;
            font-size: 32px;
            color: #022c22;
        }
    </style>
</head>
<body>
    <div class="certificate-content">
        <p>
            Certificamos que 
            <span class="name">{{ $delegate->name }}</span> 
            participou na qualidade de Delegado pelo segmento 
            <span class="segment">{{ $delegate->Segment->name ?? 'Segmento não informado' }}</span> 
            da 13ª Conferência Municipal de Saúde, com o tema: 
            "Caruaru pelo SUS que acolhe, integra e cuida", 
            realizada dia 8 de outubro de 2025 no Auditório da Secretaria Municipal de Educação e Esporte de Caruaru, com carga horária de 8 horas.
        </p>
    </div>
</body>
</html>