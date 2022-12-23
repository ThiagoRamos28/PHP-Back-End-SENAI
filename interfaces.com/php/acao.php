<?php
// chama a classe conta
include 'classes/ContaInterface.php';
include 'classes/Contas.class.php';

// Instancia objeto da classa Conta
$conta = new Conta(1111, 10101, 100);

// Recebe dados do formulário
$conta->setNomeTitular($_POST['nome']);

$acao = $_POST['opcoes'];

switch ($acao) {
    case 'Consultar Dados':
        echo $conta->consultarDados();
        break;
    case 'Sacar': 
        echo $conta->sacarValor(25);
        break;
    case 'Depositar':
        echo $conta->depositarValor(25);
        break;
    default:
        echo 'Opção Inválida';
        break;
}

?>