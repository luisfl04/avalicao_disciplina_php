<!-- Incluindo arquivo css para estilização da mensagem: -->
<link rel="stylesheet" href="../includes/css/index.css">

<?php
// Incluindo header:
include('../includes/header.php');


// Obtendo a classe:
require_once 'Computador.php'; 

// Iniciando seção:
session_start();

// Implementação da criação da instância da classe:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  // Recebendo os dados:
  $marca = $_POST['marca'];
  $processador = $_POST['processador'];
  $ram = $_POST['ram'];
  $softwares = isset($_POST['softwares']) ? $_POST['softwares'] : [];
  $tempoUso = $_POST['tempo_uso'];
  $satisfacao = $_POST['satisfacao'];

  // Criar instância da classe
  $novoComputador = new Computador($marca, $processador, $ram, $softwares, $tempoUso, $satisfacao);

  // Armazenando em array:
  if (!isset($_SESSION['computadores'])) {
    $_SESSION['computadores'] = [];
  }
  $_SESSION['computadores'][] = $novoComputador;

  // Mensagem de confirmação:
  echo "<h5 class='mensagem-confirmacao'>Cadastro realizado com sucesso!</h5>";
} else {
  echo "<h5 class='mensagem-requisicao-invalida'>Requisição inválida.</h5>";
}

?>
