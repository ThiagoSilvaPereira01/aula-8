<?php
    // Verifica se os campos foram enviados via POST
    if (isset($_POST['nome']) && isset($_POST['cidade'])) {
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];

        echo "<h3>Dados Recebidos:</h3>";
        echo "Nome: " . $nome . "<br>";
        echo "Cidade: " . $cidade . "<br><br>";

        // Condicional: se a cidade for Curitiba, exibe "Curitibano!"
        if (strtolower(trim($cidade)) == "curitiba") {
            echo "Curitibano!<br>";
        }
    }
?>
