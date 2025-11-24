<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Previsão da Próxima Menstruação</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffafbd, #ffc3a0);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      color: #333;
    }

    h3 {
      text-align: center;
      margin-bottom: 20px;
      color: #ff4b6e;
    }

    form {
      background: #fff;
      padding: 25px;
      border-radius: 16px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      width: 340px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    form:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }

    label {
      font-weight: 600;
      margin-bottom: 5px;
      display: block;
    }

    input[type="date"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 2px solid #ffc1cc;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 15px;
      transition: border 0.3s;
    }

    input[type="date"]:focus,
    input[type="number"]:focus {
      border-color: #ff4b6e;
      outline: none;
    }

    input[type="submit"] {
      background-color: #ff4b6e;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #e04361;
    }

    .resultado {
      margin-top: 25px;
      background: #fff;
      padding: 20px;
      border-radius: 16px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      width: 340px;
      text-align: center;
      animation: fadeIn 0.6s ease;
    }

    .resultado h4 {
      color: #ff4b6e;
      margin-bottom: 10px;
    }

    .resultado p {
      font-size: 15px;
      margin: 8px 0;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <form method="POST" action="">
    <h3>🩸 Previsão da Próxima Menstruação</h3>

    <label for="data">Data da última menstruação:</label>
    <input type="date" id="data" name="data" required>

    <label for="ciclo">Duração média do ciclo (em dias):</label>
    <input type="number" id="ciclo" name="ciclo" required min="20" max="40">

    <input type="submit" value="Calcular">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataUltima = $_POST['data'];
    $ciclo = (int) $_POST['ciclo'];

    // Cálculos simples
    $proxima = date('d/m/Y', strtotime("$dataUltima + $ciclo days"));
    $inicioFertil = date('d/m/Y', strtotime("$dataUltima + 12 days"));
    $fimFertil = date('d/m/Y', strtotime("$dataUltima + 16 days"));

    echo "<div class='resultado'>";
    echo "<h4>🌸 Resultados:</h4>";
    echo "<p><strong>Próxima menstruação:</strong> $proxima</p>";
    echo "<p><strong>Período fértil:</strong> $inicioFertil a $fimFertil</p>";
    echo "</div>";
  }
  ?>
</body>
</html>
