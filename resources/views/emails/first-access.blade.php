<!DOCTYPE html>
<html>
<head>
    <title>Primeiro Acesso ao Sistema QMulti</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 40px 0; background-color: #1E88E5;">
                <h1 style="color: #fff; font-size: 32px; margin: 0;">Bem-vindo ao Sistema QMulti!</h1>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 40px; background-color: #ffffff;">
                <p style="font-size: 18px; color: #333;">Olá <strong>{{ $user->name }}</strong>,</p>
                <p style="font-size: 16px; color: #555;">Para realizar seu acesso ao sistema é simples:</p>
                <p style="font-size: 20px; color: #1E88E5; font-weight: bold;">Usuário: {{ $user->email }}</p>
                <p style="font-size: 20px; color: #1E88E5; font-weight: bold;">Senha: CPF</p>
                
                <p style="font-size: 16px; color: #555;">Para acessar o sistema, clique no botão abaixo:</p>
                
                <a href="https://qmulti.webxperts.com.br" 
                   style="background-color: #1E88E5; color: #fff; padding: 14px 28px; 
                   text-decoration: none; font-size: 16px; border-radius: 8px; display: inline-block;">
                    Acessar Sistema
                </a>

                <p style="font-size: 14px; color: #999; margin-top: 20px;">
                    Se você não solicitou este acesso, por favor ignore este e-mail.
                </p>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 20px; background-color: #f1f1f1;">
                <p style="font-size: 12px; color: #777;">QMulti - Desenvolvido por Webxperts</p>
            </td>
        </tr>
    </table>

</body>
</html>
