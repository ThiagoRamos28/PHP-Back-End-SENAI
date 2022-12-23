<?php
// Criando Interface para a classe Conta
interface ContaInterface {
    // Regras a serem obedecidas pela classe
    public function consultarDados();
    public function sacarValor($valor);
    public function depositarValor($valor);
}
?>