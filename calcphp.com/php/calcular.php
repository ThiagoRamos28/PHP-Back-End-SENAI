<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>

    <!-- CSS Externo -->
    <link href="../css/estilos.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <?php
        // Declaração de Variável
        $num1      =  $_POST['num1'];
        $num2      =  $_POST['num2'];
        $operacao  =  $_POST['operacao'];
        $result;
        
        // Algoritmo
        echo '<div class="container">';
        echo '<h1>Resultado</h1><hr>';
            switch ($operacao) {
                case 'soma':
                    $result = $num1 + $num2;
                    echo '<b>Soma é</b>: ' . $result;
                    break;
                case 'subtracao':
                    $result = $num1 - $num2;
                    echo '<b>Subtração é</b>: ' . $result;
                    break;
                case 'multiplicao':
                    $result = $num1 * $num2;
                    echo '<b>Multiplicação é</b>: ' . $result;
                    break;
                case 'divisao':
                    $result = $num1 / $num2;
                    echo '<b>Divisão é</b>: ' . $result;
                    break;
                default:
                    echo '<b>Operação Inválida</b>';
                    break;
            }
            echo '<br /><br /><button><a href="../index.html">Voltar</a></button>';
        echo '</div>';       
    ?>
</body>
</html>