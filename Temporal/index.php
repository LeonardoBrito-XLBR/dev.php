<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperaturas da Semana</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }

    .container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 450px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
      color: #555;
      text-align: left;
    }

    input[type="number"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background: #007BFF;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 8px;
      margin-top: 20px;
      cursor: pointer;
      transition: background 0.3s;
    }

    input[type="submit"]:hover {
      background: #0056b3;
    }

    .resultado {
      margin-top: 25px;
      padding: 15px;
      border-radius: 10px;
      background: #f9f9f9;
      border-left: 5px solid #007BFF;
      animation: aparecer 0.5s ease;
    }

    @keyframes aparecer {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Temperaturas da Semana</h2>

    <form method="POST" action="">
      <label for="dia1">Segunda-feira:</label>
      <input type="number" id="dia1" name="dia1" step="0.1" required>

      <label for="dia2">Terça-feira:</label>
      <input type="number" id="dia2" name="dia2" step="0.1" required>

      <label for="dia3">Quarta-feira:</label>
      <input type="number" id="dia3" name="dia3" step="0.1" required>

      <label for="dia4">Quinta-feira:</label>
      <input type="number" id="dia4" name="dia4" step="0.1" required>

      <label for="dia5">Sexta-feira:</label>
      <input type="number" id="dia5" name="dia5" step="0.1" required>

      <label for="dia6">Sábado:</label>
      <input type="number" id="dia6" name="dia6" step="0.1" required>

      <label for="dia7">Domingo:</label>
      <input type="number" id="dia7" name="dia7" step="0.1" required>

      <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura as temperaturas
        $dias = [
            $_POST['dia1'],
            $_POST['dia2'],
            $_POST['dia3'],
            $_POST['dia4'],
            $_POST['dia5'],
            $_POST['dia6'],
            $_POST['dia7']
        ];

        // Converte pra float
        $temperaturas = array_map('floatval', $dias);

        // Calcula média
        $media = array_sum($temperaturas) / count($temperaturas);
        $mediaFormatada = number_format($media, 1, ',', '');

        // Define mensagem
        if ($media < 15) {
            $mensagem = "Semana fria ❄️";
            $cor = "#00aaff";
        } elseif ($media <= 25) {
            $mensagem = "Semana agradável 🙂";
            $cor = "#28a745";
        } else {
            $mensagem = "Semana quente 🔥";
            $cor = "#ff4500";
        }

        // Mostra resultado
        echo "<div class='resultado' style='border-left: 5px solid $cor;'>";
        echo "<h3>Resultado da Semana</h3>";
        echo "<p><strong>Média das temperaturas:</strong> $mediaFormatada °C</p>";
        echo "<p style='color: $cor; font-weight: bold;'>$mensagem</p>";
        echo "</div>";
    }
    ?>

  </div>
</body>
</html>
