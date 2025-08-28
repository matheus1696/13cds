<!DOCTYPE html>
<html>
<head>
    <title>Confirmação de Envio do Fichamento</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 40px 0; background-color: #1E88E5;">
                <h1 style="color: #fff; font-size: 32px; margin: 0;">Fichamento Encaminhado pelo Tutor!</h1>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 40px; background-color: #ffffff;">
                <p style="font-size: 18px; color: #333;">Olá <strong>{{ $user->name }}</strong>,</p>
                <p style="font-size: 16px; color: #555;">Seu fichamento foi recebido com sucesso.</p>
                
                <p style="font-size: 20px;">
                    <span style="color: #1E88E5; font-weight: bold;">Título: </span>
                    {{ $submissionReflection->title }}
                </p>

                <p style="font-size: 18px;">
                    <span style="color: #1E88E5; font-weight: bold;">Assunto:</span>
                    {{ $submissionReflection->subject }}
                </p>

                <p style="font-size: 16px;">
                    <span style="color: #1E88E5; font-weight: bold;">Comentário sobre o Texto: </span>
                    {{ $submissionReflection->description }}
                </p>

                <p style="font-size: 16px;">
                    <span style="color: #1E88E5; font-weight: bold;">Citações: </span>
                    {{ $submissionReflection->quote }}
                </p>

                <!-- Aviso adicional -->
                <hr style="border: none; border-top: 1px solid #ddd; margin: 30px 0;">
                <p style="font-size: 14px; color: #d32f2f; font-weight: bold;">
                    Atenção: O fichamento foi encaminhado pelo tutor. Não perca o próximo prazo para envio dos seus fichamentos.
                </p>
                <p style="font-size: 14px; color: #555;">
                    Caso tenha ocorrido algum erro ou dúvida, por favor, entre em contato com nosso suporte através do email: 
                    <a href="mailto:suporte@webxperts.com.br" style="color: #1E88E5;">suporte@webxperts.com.br</a>
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
