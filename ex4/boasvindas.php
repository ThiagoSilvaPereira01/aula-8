<?php
    // Inicia a sessão para recuperar os dados salvos anteriormente
    session_start();

    // Verifica se a sessão existe (se o usuário fez login)
    if (!isset($_SESSION['usuario'])) {
        // Se não estiver logado, redireciona de volta para a tela de login
        header("Location: login.html");
        exit();
    }

    $nomeUsuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Boas-Vindas</title>
</head>
<body>
    <h2>Painel do Usuário</h2>
    
    <!-- Exibe a mensagem de boas-vindas com o nome vindo da sessão -->
    <p>Seja muito bem-vindo(a), <strong><?php echo htmlspecialchars($nomeUsuario); ?></strong>!</p>
    
    <p>Seu login foi realizado com sucesso e seus dados foram persistidos através de <code>$_SESSION</code>.</p>

    <br>
    <a href="logout.php">Sair da conta (Logout)</a>
</body>
</html>
