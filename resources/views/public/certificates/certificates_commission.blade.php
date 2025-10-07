<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Certificado</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-image: url(" asset{{ ('assets/img/certificado.png') }}");
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
        }

        .content {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 48px;
            color: #004d00;
            margin: 0;
        }

        p {
            font-size: 24px;
            color: #004d00;
        }
    </style>
</head>
<body style="background-image: url('{{ asset('assets/img/certificado.png') }}'); background-size: cover; background-position: center;">
    <div class="content">
        <h1>Certificado de Participação</h1>
        <p>Conferimos que</p>
        <h2>{{ $delegate->name }}</h2>
        <p>participou da XIII Conferência Municipal de Saúde de Caruaru-PE</p>
        <p class="date">Emissão: {{ now()->format('d/m/Y') }}</p>
    </div>
</body>
</html>
