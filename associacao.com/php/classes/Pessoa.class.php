<?php
// Criar classe Pessoa
class Pessoa {
    // Atributos classe Pessoa
    private $idPessoa;
    private $nome;
    private $cpf;
    private $cnh;
    private $telefone;
    private $email;

    // Método Construtor
    public function __construct($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    // Métodos de acesso (get e set)
    public function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    public function getIdPessoa() {
        return $this->idPessoa;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }
    
    public function setCnh($cnh) {
        $this->cnh = $cnh;
    }

    public function getCnh() {
        return $this->cnh;
    }
    
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }
} 
?>