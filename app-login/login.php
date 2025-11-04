<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HunGGames</title>
  <style>
    body {
      background-color: #14121b;
      height: 100vh;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .formulario-login {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgb(31, 31, 68);
      padding: 60px;
      gap: 15px;
      border-radius: 15px;
      color: white;
      flex-direction: column;
      display: flex;
    }

    h1 {
    font-family: "Casadia Stencil", sans-serif;
      text-align: center;
      margin-bottom: 20px;
    }

    input, button {
      padding: 10px;
      border: none;
      border-radius: 5px;
    }

    button {
      background-color: #eb991e;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background-color: #a56300;
    }

    a {
      color: #9dc6ff;
      text-decoration: none;
      font-size: 16px;
      text-align: center;
      margin-top: 10px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="formulario-login">
    <h1>Login</h1>
    <input type="email" name="email" placeholder="Digite seu email">
    <input type="password" name="password" placeholder="Digite sua senha">
    <button>SUBIR AGORA!</button>
    <a href="formulario.php">Novo usuario? Registre agora!</a>
  </div>
</body>