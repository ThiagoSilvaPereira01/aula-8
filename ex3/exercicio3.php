<?php
    // Verifica se os dois números foram enviados via formulário (POST)
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Realiza o cálculo da soma
        $soma = $num1 + $num2;

        // Exibe o resultado utilizando o comando 'print'
        print "<h3>Resultado da Soma:</h3>";
        print "Primeiro número: " . $num1 . "<br>";
        print "Segundo número: " . $num2 . "<br>";
        print "<strong>Soma: " . $soma . "</strong><br><br>";

        // Verificação dos tipos das variáveis utilizando var_dump()
        print "<h3>Verificação de Tipos (var_dump):</h3>";
        
        print "Tipo de \$num1: ";
        var_dump($num1);
        print "<br>";

        print "Tipo de \$num2: ";
        var_dump($num2);
        print "<br>";

        print "Tipo de \$soma: ";
        var_dump($soma);
        print "<br>";
    }
?>
