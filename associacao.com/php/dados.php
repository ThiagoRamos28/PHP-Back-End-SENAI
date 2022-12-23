<?php
// Chama as Classe
include 'classes/Pessoa.class.php';
include 'classes/Veiculo.class.php';

// Instancia objeto da classe Pessoa
$motorista = new Pessoa(101);

// Recebe os dados do motorista
$motorista->setNome($_POST['nome']);
$motorista->setCpf($_POST['cpf']);
$motorista->setCnh($_POST['cnh']);
$motorista->setTelefone($_POST['telefone']);
$motorista->setEmail($_POST['email']);

// instanciar o objeto da classe Veículo
$veiculo = new Veiculo(201,$motorista);

// Recebe os dados do Veiculo;
$veiculo->setTipo($_POST['tipo']);
$veiculo->setModelo($_POST['modelo']);
$veiculo->setFabricante($_POST['fabricante']);
$veiculo->setAno($_POST['ano']);
$veiculo->setPlaca($_POST['placa']);
$veiculo->setCor($_POST['cor']);

// exibir os dados do veiculo
echo '<h1>Dados do Veículo</h1><hr />';
echo '<b>Tipo de Veículo: </b>' . $veiculo->getTipo() . '.<br />';
echo '<b>Id do Veículo: </b>' . $veiculo->getIdVeiculo() . '.<br />';
echo '<b>Modelo do Veículo: </b>' . $veiculo->getModelo() . '.<br />';
echo '<b>Fabricante do Veículo: </b>' . $veiculo->getFabricante() . '.<br />';
echo '<b>Ano do Veículo: </b>' . $veiculo->getAno() . '.<br />';
echo '<b>Placa do Veículo: </b>' . $veiculo->getPlaca() . '.<br />';
echo '<b>Cor do Veículo: </b>' . $veiculo->getCor() . '.<br />';
echo '<b>Nome do Motorista do Veículo: </b>' . $veiculo->getMotorista()->getNome() . '.<br />';
echo '<b>Cpf do Motorista do Veículo: </b>' . $veiculo->getMotorista()->getCpf() . '.<br />';
echo '<b>Cnh do Motorista do Veículo: </b>' . $veiculo->getMotorista()->getCnh() . '.<br />';
echo '<b>Telefone do Motorista do Veículo: </b>' . $veiculo->getMotorista()->getTelefone() . '.<br />';
echo '<b>E-mail do Motorista do Veículo: </b>' . $veiculo->getMotorista()->getEmail() . '.<br />';
echo '<a href="../index.html"><button>Voltar</button></a>';

?>