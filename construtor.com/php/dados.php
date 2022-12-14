<?php
// Importar a classe pessoa
include 'classes/Pessoa.class.php';

// Instancia o objeto da classe Pessoa
$usuario = new Pessoa(10001, "Brasileiro");

// Pegando os valores de formulário e armazenando nos atributos do objeto
$usuario->nome = $_POST['nome'];
$usuario->sobrenome = $_POST['sobrenome'];
$usuario->profissao = $_POST['profissao'];
$usuario->genero = $_POST['genero'];

// Output
$usuario-> cumprimentar();

echo '<b>Nome: </b>' . $usuario->idUsuario . '.<br />';
echo '<b>Sobrenome: </b>' . $usuario->nome . " " . $usuario->sobrenome . '.<br />';
echo '<b>Gênero: </b>' . $usuario->genero . '.<br />';
echo '<b>Profissão: </b>' . $usuario->profissao . '.<br />';
echo '<b>Nacionalidade: </b>' . $usuario->nacionalidade . '.<br /><br />';
echo '<br /><br /><a href="../index.html"><button>Voltar</button></a>';
?>