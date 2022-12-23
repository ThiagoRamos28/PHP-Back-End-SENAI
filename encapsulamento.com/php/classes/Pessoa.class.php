<?php
// Criando a classe Pessoa
class Pessoa {
    // Atributos classe Pessoa
    private $nome;
    private $email;
    private $profissao;
    private $cidade;
    private $cpf;
    private $cor;

    // Métodos de acesso
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setProfissao($profissao){
        $this->profissao = $profissao;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getProfissao(){
        return $this->profissao;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getCpf(){
        return $this->cpf;
    }
}
?>