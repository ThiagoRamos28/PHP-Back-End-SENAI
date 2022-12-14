<?php
// Cria a subclasse Pessoa Jurídica
final class PessoaJuridica extends Pessoa {
    // Atributos da subclasse Pessoa Jurídica
    public $razaoSocial;
    public $nomeFantasia;

    // Método Construtor
    public function __construct($idPessoa) {
        parent::__construct($idPessoa);
    }

    // Método
    public function apresentar() {
        return 'Olá, sou a empresa ' . $this->nomeFantasia . ', Razão Social ' . $this->razaoSocial . '.' . parent::apresentar();
    }
}
?>