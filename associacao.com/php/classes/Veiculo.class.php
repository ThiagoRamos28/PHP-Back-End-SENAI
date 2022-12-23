<?php
// Cria a classe Veiculo
class Veiculo {
    // Atributos classe Veiculo
    private $idVeiculo;
    private $modelo;
    private $fabricante;
    private $Ano;
    private $placa;
    private $cor;

    // atributo de associação entre classe
    private $motorista;

    // Método Construtor
    public function __construct($idVeiculo) {
        $this->idVeiculo = $idVeiculo;
    }

    // Métodos de acesso (get e set)
    public function setIdVeiculo($idVeiculo) {
        $this->idVeiculo = $idVeiculo;
    }

    public function getIdVeiculo() {
        return $this->idVeiculo;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getCor() {
        return $this->cor;
    }
    public function setMotorista($motorista) {
        $this->motorista = $motorista;
    }

    public function getMotorista() {
        return $this->motorista;
    }
}
?>