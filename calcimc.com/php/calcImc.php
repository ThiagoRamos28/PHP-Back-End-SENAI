<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>

    <!-- CSS Externo -->
    <link href="../css/estilos.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <?php
        // Declaração de variáveis
        $nome    =  $_POST['nome'];
        $altura  =  $_POST['altura'];
        $peso    =  $_POST['peso'];
        $imc;

        $imc = $peso / ($altura * $altura);

        echo '<div class="container">';
        echo '<h1>Resultado IMC</h1><hr>';
        switch ($imc) {
            case ($imc < 18.5):
                echo '<b> Olá, </b>' . $nome . '.<br />';
                echo '<b> Seu IMC é: </b>' . round($imc, 2) .'.<br />';
                echo '<b> Você está abaixo do normal. </b> <br />';
                break;
            case ($imc >= 18.5 and $imc < 25):
                echo '<b> Olá, </b>' . $nome . '.<br />';
                echo '<b> Seu IMC é: </b>' . round($imc, 2) .'.<br />';
                echo '<b> Você está no peso normal. </b> <br />';
                break;
            case ($imc >= 25 and $imc < 30):
                echo '<b> Olá, </b>' . $nome . '.<br />';
                echo '<b> Seu IMC é: </b>' . round($imc, 2) .'.<br />';
                echo '<b> Você está com excesso de peso. </b> <br />';
                break;
            case ($imc >= 30 and $imc < 35):
                echo '<b> Olá, </b>' . $nome . '.<br />';
                echo '<b> Seu IMC é: </b>' . round($imc, 2) .'.<br />';
                echo '<b> Você está com grau de Obesidade Classe I. </b> <br />';
                break;
            case($imc >= 35 and $imc < 40):
                echo '<b> Olá, </b>' . $nome . '.<br />';
                echo '<b> Seu IMC é: </b>' . round($imc, 2) .'.<br />';
                echo '<b> Você está com grau de Obesidade Classe II. </b> <br />';
                break;
            case ($imc >= 40):
                echo '<b> Olá, </b>' . $nome . '.<br />';
                echo '<b> Seu IMC é: </b>' . round($imc, 2) .'.<br />';
                echo '<b> Você está com grau de Obesidade Classe III. </b> <br />';
                break;
            default:
                echo '<b> Cálculo não realizado </b> <br />';
                break;            
        }
        echo '<br /><br /><a href=" ../index.html"><button>Voltar</button></a>';
        echo '</div>';
    ?>
</body>
</html>

