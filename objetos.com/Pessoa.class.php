<?php
// Criando Classe Pessoa
class Pessoa {
    // Atributos
    public $nome;
    public $idade;
    public $profissao;

    // Método
    public function cumprimentar() {
        echo '<h1> Olá eu sou ' . $this->nome . ', tenho ' . $this->idade . ' anos e sou ' . $this->profissao . '.</h1>';
    }
}

?>