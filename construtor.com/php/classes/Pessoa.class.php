<?php
// Criando a classe pessoa
class Pessoa {
    // Definindo atributos
    public $idUsuario;
    public $nome;
    public $sobrenome;
    public $profissao;
    public $genero;
    public $nacionalidade;

    // Método Construtor
    public function __construct($idUsuario, $nacionalidade) {
        $this->idUsuario = $idUsuario;
        $this->nacionalidade = $nacionalidade;
    }

    // Métodos
    public function cumprimentar() {
        echo '<h1>Olá, segue abaixo meus dados:</h1>';
    }
}

?>