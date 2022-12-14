<?php
// Criar a superclasse abstrata Pessoa
abstract class Pessoa {
    // Atributos superclasse Pessoa
    public $idPessoa;
    public $email;
    public $cidade;

    // Método Construtor para a superclass
    public function __construct($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    // Método
    public function apresentar() {
        return ' Meu e-mail é: ' . $this->email . ', sou da cidade ' . $this->cidade . ', e meu ID é: ' . $this->idPessoa . '.';
    }
}
?>