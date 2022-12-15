<?php
// Criando Váriáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];

//Algoritmo
if ($senha == $confirmaSenha) {
    echo '<h1>Cadastro Realizado Com Sucesso</h1><hr />';
    echo '<b> Nome: </b>' . $nome . '.<br />';
    echo '<b> E-mail: </b>' . $email . '.<br />';
    echo '<b> Telefone: </b>' . $telefone . '.<br />';
    echo '<b> Endereço: </b>' . $endereco . '.<br />';
    echo '<a href="../index.html"><button>Voltar</button></a>';
} else {
    echo '<h1>Atenção! Senhas não conferem.</h1>';
    echo '<a href="../index.html"><button>Voltar</button></a>';
}
?>

