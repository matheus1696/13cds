<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Certificado de Participação</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        h1 { font-size: 32px; color: #2F855A; }
        p { font-size: 18px; color: #333; margin: 20px 0; }
        .name { font-size: 24px; font-weight: bold; margin: 30px 0; }
    </style>
</head>
<body>
    <h1>Certificado de Participação</h1>
    <p>Conferimos a</p>
    <div class="name">{{ $delegate->name }}</div>
    <p>como Delegado(a) na XIII Conferência Municipal de Saúde de Caruaru.</p>
    <p>Data: {{ now()->format('d/m/Y') }}</p>
</body>
</html>
