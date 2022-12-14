<?php
// criando a classe pessoa
abstract class Pessoa {
    // Atributos Pessoa
    public $telefone;
    public $email;

    // Método
    public function apresentarDadosPessoaFisisa() {
        return 'Olá, segue abaixo dados Pessoa Física';
    }

    public function apresentarDadosPessoaJuridica() {
        return 'Olá, segue abaixo dados Pessoa Jurídica';
    }
}
?>