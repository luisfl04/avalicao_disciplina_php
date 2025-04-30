<?php
class Computador {
  public $marca;
  public $processador;
  public $ram;
  public $softwares;
  public $tempoUso;
  public $satisfacao;

  public function __construct($marca, $processador, $ram, $softwares, $tempoUso, $satisfacao) {
    $this->marca = $marca;
    $this->processador = $processador;
    $this->ram = $ram;
    $this->softwares = $softwares;
    $this->tempoUso = $tempoUso;
    $this->satisfacao = $satisfacao;
  }
}

?>
