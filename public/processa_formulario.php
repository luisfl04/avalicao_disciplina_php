<?php
require_once 'Computador.php'; // ou defina a classe neste arquivo
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recebendo os dados
  $marca = $_POST['marca'];
  $processador = $_POST['processador'];
  $ram = $_POST['ram'];
  $softwares = isset($_POST['softwares']) ? $_POST['softwares'] : [];
  $tempoUso = $_POST['tempo_uso'];
  $satisfacao = $_POST['satisfacao'];

  // Criar instância da classe
  $novoComputador = new Computador($marca, $processador, $ram, $softwares, $tempoUso, $satisfacao);

  // Armazenar na sessão (array volátil enquanto a aplicação estiver rodando)
  if (!isset($_SESSION['computadores'])) {
    $_SESSION['computadores'] = [];
  }
  $_SESSION['computadores'][] = $novoComputador;

  // Mensagem de confirmação
  echo "<h5>Cadastro realizado com sucesso!</h5>";
  echo "<a href='index.php'>Voltar ao formulário</a>";
} else {
  echo "<p>Requisição inválida.</p>";
}
?>
