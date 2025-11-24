<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            background: linear-gradient(135deg, #0b48aaff, #0083b0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px);
        }
        h2 {
            margin-bottom: 20px;
            color: #045ca8ff;
        }
        input[type="number"] {
            width: 80%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #9c9c9cff;
            border-radius: 8px;
            outline: none;
            transition: 0.2s;
        }
        input[type="number"]:focus {
            border-color: #1d00dbff;
        }
        button {
            background: #0083b0;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.2s;
        }
        button:hover {
            background: #073386ff;
        }
        .resultado {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            background: #f1f1f1;
        }
        .nota {
            font-size: 1.3em;
            font-weight: bold;
            color: #1a9dc9ff;
        }
        .status {
            
            font-size: 1.1em;
            font-weight: bold;
            margin-top: 5px;
        }

        /* CRIANDO PREDEFINICOES PARA CADA ESTILO */
        .aprovado { color: #2ecc71; }
        .recuperacao { color: #f1c40f; }
        .reprovado { color: #e74c3c; }

    </style>
</head>
<body>

<div class="container">
    <h2>Calcular Média</h2>
    <form method="post">
        <input type="number" name="nota1" step="0.01" placeholder="Nota 1" required><br>
        <input type="number" name="nota2" step="0.01" placeholder="Nota 2" required><br>
        <input type="number" name="nota3" step="0.01" placeholder="Nota 3" required><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $n1 = floatval($_POST["nota1"]);
        $n2 = floatval($_POST["nota2"]);
        $n3 = floatval($_POST["nota3"]);

        $media = number_format(($n1 + $n2 + $n3) / 3, 2);

        /* APLICANDO ESTILO E CATEGORIA DE ACORDO COM A NOTA DELE */
        if ($media >= 6) {
            $status = "Aprovado";
            $classe = "aprovado";
        } elseif ($media >= 4 && $media <= 5.9) {
            $status = "Recuperação";
            $classe = "recuperacao";
        } else {
            $status = "Reprovado";
            $classe = "reprovado";
        }

        echo "
        <div class='resultado'>
            <div class='nota'>Média: $media</div>
            <div class='status $classe'>$status</div>
        </div>";
    }
    ?>
</div>

</body>
</html>