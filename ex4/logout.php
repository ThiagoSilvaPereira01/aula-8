<?php
    // Inicia a sessão para poder destruí-la
    session_start();

    // Limpa todas as variáveis de sessão
    $_SESSION = array();

    // Destrói a sessão
    session_destroy();

    // Redireciona para o formulário de login
    header("Location: login.html");
    exit();
?>
