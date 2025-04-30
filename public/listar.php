<?php

require_once 'Computador.php'; // Apenas necessário se você for usar métodos/validação adicionais
session_start();



$computadores = $_SESSION['computadores'] ?? [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Valores cadastrados</title>
  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

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
    <h4>Valores cadastrados</h4>

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
      <p>Nenhum computador cadastrado ainda.</p>
    <?php endif; ?>

    <br>
    <a href="index.php" class="btn white black-text">Voltar ao formulário</a>
  </div>

  <?php include('../includes/footer.php'); ?>


  <!-- JS Materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
