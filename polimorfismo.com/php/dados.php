<?php
// Chamando as classes
include 'classes/Pessoa.class.php';
include 'classes/PessoaFisisca.class.php';
include 'classes/PessoaJuridica.class.php';

// Instânciando Objetos
$usuario = new PessoaFisica(10001, 'Masculino');
$empresa = new PessoaJuridica(20001);

// Recebendo dados do usuário através do formulário
$usuario->nome           =  $_POST['nome'];
$usuario->profissao      =  $_POST['profissao'];
$usuario->email          =  $_POST['emailUsuario'];
$usuario->cidade         =  $_POST['cidadeUsuario'];

// Recebendo dados da empresa através do formulário
$empresa->razaoSocial    =  $_POST['razaoSocial'];
$empresa->nomeFantasia   =  $_POST['nomeFantasia'];
$empresa->email          =  $_POST['emailEmpresa'];
$empresa->cidade         =  $_POST['cidadeEmpresa'];

// Exibe os dados na tela
echo '<h2>Dados do usuário:</h2>';
echo $usuario->apresentar();
echo '<br /><br />';
echo '<h2>Dados da empresa:</h2>';
echo $empresa->apresentar();
echo '<br /><br />';
echo '<a href="../index.html"><button>Voltar</button></a>';

?>