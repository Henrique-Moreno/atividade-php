<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados Recebidos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f0f0f0;
    }

    .result-container {
      text-align: left;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    p {
      margin: 10px 0;
    }

    strong {
      color: #2A438C;
    }

    a {
      color: #BF3B3B;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <main class="result-container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nome = isset($_REQUEST['nome']) ? htmlspecialchars($_REQUEST['nome']) : 'Não informado';
      $cidade = isset($_REQUEST['cidade']) ? htmlspecialchars($_REQUEST['cidade']) : 'Não informado';
      $telefone = isset($_REQUEST['telefone']) ? htmlspecialchars($_REQUEST['telefone']) : 'Não informado';

      echo "<h2>Dados Recebidos:</h2>";
      echo "<p><strong>Nome:</strong> " . $nome . "</p>";
      echo "<p><strong>Cidade:</strong> " . $cidade . "</p>";
      echo "<p><strong>Telefone:</strong> " . $telefone . "</p>";
      echo "<p><a href='index.php'>Voltar ao formulário</a></p>";
    } else {
      echo "<h2>Erro</h2>";
      echo "<p>Nenhum dado foi enviado. Por favor, use o formulário.</p>";
      echo "<p><a href='index.php'>Voltar ao formulário</a></p>";
    }
    ?>
  </main>
</body>

</html>