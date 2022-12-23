<?php
// Crianco a classe Conta
class Conta implements ContaInterface {
    // Atributos da class conta
    private $nomeTitular;
    private $numAgencia;
    private $numConta;
    private $saldo;

    // construtor
    public function __construct($numAgencia, $numConta, $saldo) {
        $this->numAgencia = $numAgencia;
        $this->numConta = $numConta;
        $this->saldo = $saldo;
    }

    // métodos
    public function consultarDados() {
        return '<b>Nome do titular da conta: </b>' . $this->nomeTitular . '.<br /><b>Agência:</b>' . $this->numAgencia . '.<br /><b>Conta</b>' . $this->numConta . '.<br /><b>Saldo:</b> R$ ' . $this->saldo . '.';
    }

    public function depositarValor($valor) {
        $this->saldo += $valor;

        return 'Deposito efetuado com sucesso. Novo saldo: R$ ' . $this->saldo . '.';
    }

    public function sacarValor($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;

            return 'Saque efetuado com sucesso. Saldo atual: R$ ' . $this->saldo . '.';
        } 
        else {
            return 'Não foi possível efetuar o saque. Saldo atual: R$ ' . $this->saldo . '.';
        }
    }

    // Métodos de acesso do atributo nomeTitular
    public function setNomeTitular($nomeTitular) {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular() {
        return $this->nomeTitular;
    }
}
?>