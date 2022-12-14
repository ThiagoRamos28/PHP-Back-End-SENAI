<?php
// Incluir a classe Pessoa
include 'Pessoa.class.php';

// Instanciando o objeto do tipo Pessoa
$humano = new Pessoa();
$humana = new Pessoa();

// Atribuindo valores ao humano
$humano->nome       = 'Neo';
$humano->idade      = 37;
$humano->profissao  = 'Escolhido';

// Atribuindo valores à humana
$humana->nome       = 'Trinity';
$humana->idade      = 27;
$humana->profissao  = 'Hacker';

// Output
$humano->cumprimentar();
$humana->cumprimentar();

?>