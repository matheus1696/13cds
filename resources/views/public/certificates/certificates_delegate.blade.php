<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Certificado de Delegado</title>
    <style>
        @page { margin: 0; }
        body { margin: 0; font-family: Arial, sans-serif; }

        .certificate {
            position: relative;
            width: 100%;
            height: 100%;
        }

        /* Imagem de fundo */
        .certificate img.background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        /* Conteúdo centralizado */
        .certificate-content {
            position: relative;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            width: 80%;
            margin: 0 auto;
            color: #064e3b;
        }

        .certificate-content p {
            font-size: 22px;
            line-height: 1.6;
        }

        .name {
            font-weight: bold;
            font-size: 28px;
        }

        .segment {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <!-- Caminho absoluto para Dompdf -->
        <img src="{{ public_path('assets/img/certificates.png') }}" class="background" alt="Certificado">

        <div class="certificate-content">
            <p>
                Certificamos que 
                <span class="name">{{ $delegate->name }}</span> 
                participou na qualidade de Delegado pelo segmento 
                <span class="segment">{{ $delegate->Segment->name ?? '' }}</span> 
                da 13ª Conferência Municipal de Saúde, com o tema: 
                "Caruaru pelo SUS que acolhe, integra e cuida", 
                realizada dia 8 de outubro de 2025 no Auditório da Secretaria Municipal de Educação de Caruaru.
            </p>
        </div>
    </div>
</body>
</html>
