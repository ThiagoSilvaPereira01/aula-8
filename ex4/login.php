<?php
    // Inicia a sessão obrigatoriamente antes de qualquer saída de texto
    session_start();

    // Verifica se os dados foram enviados
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = trim($_POST['usuario']);
        $senha = trim($_POST['senha']);

        // Armazena o nome do usuário na sessão global ($_SESSION)
        $_SESSION['usuario'] = $usuario;

        // Redireciona o usuário para a página de boas-vindas
        header("Location: boasvindas.php");
        exit();
    } else {
        // Caso acesse diretamente sem enviar dados, redireciona para o login
        header("Location: login.html");
        exit();
    }
?>
