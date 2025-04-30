<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Computadores</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="./css/index.css">

  <style>
    body {
      background-color: #fff;
      color: #000;
    }

    .input-field input[type=text],
    .input-field input[type=number],
    .input-field textarea,
    .input-field select {
      border-bottom: 1px solid #000;
      color: #000;
    }

    .input-field input[type=text]:focus,
    .input-field input[type=number]:focus,
    .input-field textarea:focus {
      border-bottom: 1px solid #000 !important;
      box-shadow: none !important;
    }

    .input-field label {
      color: #000;
    }

    .input-field input[type="checkbox"] + span,
    .input-field input[type="radio"] + span {
      color: #000;

    }
  </style>
</head>
<body>
  <div class="container">

    <h4 class="center formulario-titulo">Cadastro de Computadores</h4>

    <form method="POST" action="processa_formulario.php">

      <!-- Marca -->
      <div class="input-field">
        <select name="marca" required>
          <option value="" disabled selected>Escolha uma marca</option>
          <option value="Samsung">Samsung</option>
          <option value="Lenovo">Lenovo</option>
          <option value="Apple">Apple</option>
        </select>
        <label>Marca do computador</label>
      </div>

      <!-- Processador -->
      <div class="input-field">
        <input type="text" name="processador" id="processador" required>
        <label for="processador">Processador da máquina</label>
      </div>

      <!-- Memória RAM -->
      <div class="input-field">
        <input type="number" name="ram" id="ram" required>
        <label for="ram">Quantidade de memória RAM (GB)</label>
      </div>

      <!-- Softwares (checkboxes) -->
      <label>Softwares instalados:</label>
      <p>
        <label><input type="checkbox" name="softwares[]" value="Office" /><span>Office</span></label><br>
        <label><input type="checkbox" name="softwares[]" value="LibreOffice" /><span>LibreOffice</span></label><br>
        <label><input type="checkbox" name="softwares[]" value="Java" /><span>Java</span></label><br>
        <label><input type="checkbox" name="softwares[]" value="Chrome" /><span>Chrome</span></label>
      </p>

      <!-- Tempo de uso (radio) -->
      <label>Tempo de uso(Escolha a que mais de aproximar):</label>
      <p class="tempo-uso">
        <label><input type="radio" name="tempo_uso" value="1 mês" /><span>Menos de 1 mês</span></label><br>
        <label><input type="radio" name="tempo_uso" value="6 meses" required /><span>6 meses</span></label><br>
        <label><input type="radio" name="tempo_uso" value="1 ano" /><span>1 ano</span></label><br>
        <label><input type="radio" name="tempo_uso" value="3 ano" /><span>3 anos</span></label><br>
        <label><input type="radio" name="tempo_uso" value="mais de 3 anos" /><span>Mais de 3 ano</span></label>
      </p>

      <!-- Satisfação -->
      <div class="input-field">
        <textarea id="satisfacao" name="satisfacao" class="materialize-textarea" required></textarea>
        <label for="satisfacao">Descreva sua satisfação com a máquina</label>
      </div>

      <!-- Botões -->
      <div class="center-align">
        <button type="submit" class="btn white black-text z-depth-1 botao" id="botao-enviar">Enviar</button>
        <button type="reset" class="btn white black-text z-depth-1 botao" id="botao-limpar">Limpar</button>
      </div>

    </form>
  </div>

  <!-- Materialize JS (para funcionar o select, etc.) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      M.FormSelect.init(elems);
    });
  </script>
</body>
</html>
