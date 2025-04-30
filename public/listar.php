<?php

// Obtendo classe:
require_once 'Computador.php'; 

// Iniciando seção:
session_start();

// Obtendo as instâncias da classe:
$computadores = $_SESSION['computadores'] ?? [];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">
  <title>Valores cadastrados</title>
  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../includes/css/index.css">

  <style>
    body {
      background-color: #fff;
      color: #000;
    }
    th, td {
      color: #000;
    }
  </style>

</head>
<body>
    <?php include('../includes/header.php'); ?>

  <div class="container">
    <h4 class="listagem-titulo">Valores cadastrados</h4>

    <?php if (count($computadores) > 0): ?>
      <div class="responsive-table">
        <table class="highlight">
          <thead>
            <tr>
              <th>Marca</th>
              <th>Processador</th>
              <th>RAM (GB)</th>
              <th>Softwares</th>
              <th>Tempo de Uso</th>
              <th>Satisfação</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($computadores as $comp): ?>
              <tr>
                <td><?= htmlspecialchars($comp->marca) ?></td>
                <td><?= htmlspecialchars($comp->processador) ?></td>
                <td><?= htmlspecialchars($comp->ram) ?></td>
                <td><?= htmlspecialchars(implode(', ', $comp->softwares)) ?></td>
                <td><?= htmlspecialchars($comp->tempoUso) ?></td>
                <td><?= nl2br(htmlspecialchars($comp->satisfacao)) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <p class="listagem-mensagem-vazio">Nenhum computador cadastrado ainda.</p>
    <?php endif; ?>

    <br>
    <div class="botao-voltar">
      <a href="index.php" class="btn white black-text">Voltar ao formulário</a>
    </div>
  </div>



  <!-- JS Materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
