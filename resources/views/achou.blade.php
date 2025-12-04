<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de cadastro para novos usuários">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/login.js"></script> 
    <link rel="stylesheet" href="css/cadastro_login.css">
    <title>Login</title>
</head>
<body class="bg-image" style="background-image: url(/imagens/fundo_cadastro_login.png); background-size: cover; min-height: 100vh; font-family: 'Segoe UI', system-ui, sans-serif;">

    <nav class="navbar sticky-top bg-dark bg-opacity-75">
        <div class="container-fluid d-flex justify-content-center align-items-center py-2">
            <img src="/imagens/logo.png" alt="Logo do Site" class="img-fluid" style="height: 32px;">
            <div class="dummy-space" style="width: 48px;"></div>
        </div>
    </nav>

    <main class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card auth-card">
            <div class="card-body p-4">

                <form id="loginForm" method="POST">

                    <h1 style="color:black" class="text-center">Bem-vindo 🥳</h1>
                    <p style="color:black" class="text">Parabéns seu email já foi verficado e confirmado</p>

                    <a style="background-color: #660a0a;border-color: #530808" href="http://127.0.0.1:5500/login.html" type="submit" class="btn btn-primary w-100 py-2">
                        Fechar
                    </a>
                </form>
            </div>
        </div>
    </main>

</body>
</html>