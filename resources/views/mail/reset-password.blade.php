<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Redefinição de Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #640909;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 40px;
            margin: 50px auto;
            border-radius: 8px;
            max-width: 600px;
            text-align: center;
        }
        .btn {
            background-color: #640909;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Redefinição de Senha</h2>
        <p>Olá {{ $user->name }},</p>
        <p>Você solicitou a redefinição de senha. Clique no botão abaixo para prosseguir:</p>
        <a href="{{ $resetUrl }}" class="btn">Redefinir Senha</a>
        <p style="margin-top: 20px; font-size: 12px; color: #777;">
            Se você não solicitou a redefinição, ignore este e-mail.
        </p>
    </div>
</body>
</html>
