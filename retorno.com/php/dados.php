<?php
// Chamar classe Pessoa
include 'classes/Pessoa.class.php';

// Instância o objeto
$usuario = new Pessoa();

// Algoritmo
echo '<b>Nome: </b>' . $usuario->exibeNome($_POST['nome']) . '.<br />';
echo '<b>Idade: </b>' . $usuario->exibeIdade($_POST['idade']) . '.<br />';
echo '<a href="../index.html"><button>Voltar</button></a>';

?>