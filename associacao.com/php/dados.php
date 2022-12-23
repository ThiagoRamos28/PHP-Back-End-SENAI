<?php
// Chama as Classe
include 'classes/Pessoa.class.php';
include 'classes/Veiculo.class.php';

// Instancia objeto da classe Pessoa
$motorista-> new Pessoa(101);

// Informa os dados do motorista
$motorista->setNome($_POST['nome']);
$motorista->setCpf($_POST['cpf']);
$motorista->setCnh($_POST['cnh']);
$motorista->setTelefone($_POST['telefone']);
$motorista->setEmail($_POST['email']);

?>