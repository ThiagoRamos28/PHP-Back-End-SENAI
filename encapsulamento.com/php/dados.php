<?php
// Chamando a classe Pessoa
include 'classes/Pessoa.class.php';

// Instanciando Objeto
$usuario = new Pessoa();

// Recebe os dados do formulário e envia para os atributos do objeto
$usuario->setNome($_POST['nome']);
$usuario->setEmail($_POST['email']);
$usuario->setProfissao($_POST['profissao']);
$usuario->setCidade($_POST['cidade']);
$usuario->setCpf($_POST['cpf']);

//Exibe dados na tela
echo '<h1>Dados do Usuário</h1><hr />';
echo '<b>Nome: </b>' . $usuario->getNome() . '.<br />';
echo '<b>E-mail: </b>' . $usuario->getEmail() . '.<br />';
echo '<b>Profissão: </b>' . $usuario->getProfissao() . '.<br />';
echo '<b>Cidade: </b>' . $usuario->getCidade() . '.<br />';
echo '<b>CPF: </b>' . $usuario->getCpf() . '.<br />';
?>