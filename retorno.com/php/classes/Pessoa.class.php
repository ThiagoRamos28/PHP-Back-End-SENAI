<?php
class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function exibeNome($nome) {
        $this->nome = $nome;

        return $this->nome;
    }

    public function exibeIdade($idade) {
        $this->idade = $idade;

        return $this->idade;
    }
}
?>