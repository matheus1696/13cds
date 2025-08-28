<!DOCTYPE html>
<html>
<head>
    <title>Seu trabalho foi avaliado</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 40px 0; background-color: #1E88E5;">
                <h1 style="color: #fff; font-size: 32px; margin: 0;">Trabalho Avaliado!</h1>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 40px; background-color: #ffffff;">
                <p style="font-size: 18px; color: #333;">Olá <strong>{{ $studentName }}</strong>,</p>

                <p style="font-size: 16px; color: #555;">
                    Informamos que o seu trabalho intitulado <strong>"{{ $workTitle }}"</strong> teve um desempenho <strong>{{ $evaluation }}</strong>.
                </p>

                <p style="font-size: 16px; color: #555;">
                    Avaliador: <strong>{{ $evaluatorName }}</strong>.
                </p>

                <p style="font-size: 16px; color: #555;">
                    Você já pode acessar o sistema para visualizar as demais observações da avaliação.
                </p>

                <p style="font-size: 16px; color: #555;">Para acessar o sistema, clique no botão abaixo:</p>

                <a href="https://qmulti.webxperts.com.br/login"
                   style="background-color: #1E88E5; color: #fff; padding: 14px 28px;
                          text-decoration: none; font-size: 16px; border-radius: 8px; display: inline-block;">
                    Acessar Sistema
                </a>

                <p style="font-size: 14px; color: #999; margin-top: 20px;">
                    Caso tenha alguma dúvida, entre em contato com a equipe responsável.
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
