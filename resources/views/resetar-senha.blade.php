<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-image" style="background-image: url('/imagens/fundo_cadastro_login.png'); background-size: cover; min-height: 100vh;">

    <main class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4">
            <h2 class="text-center mb-4">Redefinir Senha</h2>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">
            
                <!-- Seus campos de senha -->
                <div class="mb-3">
                    <label for="password" class="form-label">Nova Senha</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
            
                <button type="submit" class="btn btn-primary">Redefinir Senha</button>
            </form>
        </div>
    </main>

</body>
</html>