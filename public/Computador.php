<?php
class Computador {
  private $marca;
  private $processador;
  private $ram;
  private $softwares;
  private $tempoUso;
  private $satisfacao;

  public function __construct($marca, $processador, $ram, $softwares, $tempoUso, $satisfacao) {
    $this->marca = $marca;
    $this->processador = $processador;
    $this->ram = $ram;
    $this->softwares = $softwares;
    $this->tempoUso = $tempoUso;
    $this->satisfacao = $satisfacao;
  }

  // Getters
  public function getMarca() {
    return $this->marca;
  }

  public function getProcessador() {
    return $this->processador;
  }

  public function getRam() {
    return $this->ram;
  }

  public function getSoftwares() {
    return $this->softwares;
  }

  public function getTempoUso() {
    return $this->tempoUso;
  }

  public function getSatisfacao() {
    return $this->satisfacao;
  }

  // Setters
  public function setMarca($marca) {
    $this->marca = $marca;
  }

  public function setProcessador($processador) {
    $this->processador = $processador;
  }

  public function setRam($ram) {
    $this->ram = $ram;
  }

  public function setSoftwares($softwares) {
    $this->softwares = $softwares;
  }

  public function setTempoUso($tempoUso) {
    $this->tempoUso = $tempoUso;
  }

  public function setSatisfacao($satisfacao) {
    $this->satisfacao = $satisfacao;
  }
}


?>
