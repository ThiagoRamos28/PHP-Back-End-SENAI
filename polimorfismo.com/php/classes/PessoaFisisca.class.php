<?php
// Criar a subclasse PessoaFisica
final class PessoaFisica extends Pessoa {
    // Atributos subclasse PessoaFisica
    public $nome;
    public $profissao;
    public $genero;

    // Método Construtor
    public function __construct($idPessoa, $genero) {
        parent::__construct($idPessoa);
        $this->genero = $genero;
    }

    public function apresentar() {
        return 'Olá, meu nome é ' . $this->nome . ', trabalho como ' . $this->profissao . ' , sou do gênero ' . $this->genero . '.' . parent::apresentar();
    }
}
?>