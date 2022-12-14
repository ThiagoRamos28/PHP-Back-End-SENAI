<?php
// Chamando Classes
include 'classes/Pessoa.class.php';
include 'classes/PessoaFisica.class.php';
include 'classes/PessoaJuridica.class.php';

// Instancia objetos
$usuario = new PessoaFisica();
$empresa = new PessoaJuridica();

// Recebe Dados Pessoa Física
$usuario->nome      =  $_POST['nome'];
$usuario->cpf       =  $_POST['cpf'];
$usuario->profissao =  $_POST['profissao'];
$usuario->telefone  =  $_POST['telefone'];
$usuario->email     =  $_POST['email'];

// Recebe Dados Pessoa Jurídica
$empresa->razaoSocial   =  $_POST['razaoSocial'];
$empresa->nomeFantasia  =  $_POST['nomeFantasia'];
$empresa->cnpj          =  $_POST['cnpj'];
$empresa->telefone      =  $_POST['telefoneEmpresa'];
$empresa->email         =  $_POST['emailEmpresa'];


// Exibe dados do usuário na tela
echo '<h1>Segue dados do Usuário:</h1><hr />';
echo '<h2>' . $usuario->apresentarDadosPessoaFisisa() . '</h2>';
echo '<b>Nome: </b>' . $usuario->nome . '.<br />';
echo '<b>CPF: </b>' . $usuario->cpf . '.<br />';
echo '<b>Profissão: </b>' . $usuario->profissao . '.<br />';
echo '<b>Telefone: </b>' . $usuario->telefone . '.<br />';
echo '<b>E-mail: </b>' . $usuario->email . '.<br />';
echo '<h3>' . $usuario->testeMetodo() . '</h3>';

// Exibe dados da empresa na tela
echo '<h1>Segue dados da Empresa:</h1><hr />';
echo '<h2>' . $empresa->apresentarDadosPessoaJuridica() . '</h2>';
echo '<b>Razão Social: </b>' . $empresa->razaoSocial . '.<br />';
echo '<b>Nome Fantasia: </b>' . $empresa->nomeFantasia . '.<br />';
echo '<b>CNPJ: </b>' . $empresa->cnpj . '.<br />';
echo '<b>Telefone Empresa: </b>' . $empresa->telefone . '.<br />';
echo '<b>E-mail Empresa: </b>' . $empresa->email . '.<br />';

// Botão para voltar para página inicial
echo '<br /><a href="../index.html"><button>Voltar</button></a>';

?>