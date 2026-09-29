<?php
    // Verifica se os campos foram enviados na URL ($_GET)
    if (isset($_GET['nome']) && isset($_GET['cidade'])) {
        $nome = $_GET['nome'];
        $cidade = $_GET['cidade'];

        echo "<h3>Dados Recebidos:</h3>";
        echo "Nome: " . $nome . "<br>";
        echo "Cidade: " . $cidade . "<br>";
    }
?>

