<?php
  
  if (isset($_POST['submit']))
  {
    print_r($_POSOT['nome']);
  }

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - HunGGames</title>
  <style>
    body {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(-45deg, #1e3c72, #2a5298, #0f2027, #203a43);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      font-family: Arial, sans-serif;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .formulario-cadastro {
      display: flex;
      flex-direction: column;
      gap: 12px;
      background-color: rgba(11, 11, 104, 0.9);
      padding: 40px;
      border-radius: 10px;
      color: white;
      width: 340px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    .formulario-cadastro h1 {
      margin-bottom: 10px;
      text-align: left;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    label {
      font-size: 14px;
      margin-top: 5px;
    }

    input, select, button, textarea {
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 14px;
    }

    input, select, textarea {
      background-color: #f0f0f0;
    }

    button {
      background-color: #4CAF50;
      font-size: 18px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 10px;
    }

    button:hover {
      background-color: #45a049;
    }

    a {
      color: #9dc6ff;
      text-decoration: none;
      text-align: center;
      margin-top: 10px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <form class="formulario-cadastro" method="POST" action="salvar_usuario.php">
    <h1>Novo Usuário</h1>

    <label>Nome Completo</label>
    <input type="text" name="nome" placeholder="Digite seu nome completo" required>

    <label>Nome de Usuário</label>
    <input type="text" name="usuario" placeholder="Escolha um nome de usuário" required>

    <label>Email</label>
    <input type="email" name="email" placeholder="Digite seu email" required>

    <label>Telefone</label>
    <input type="tel" name="telefone" placeholder="(XX) XXXXX-XXXX">

    <label>Data de Nascimento</label>
    <input type="date" name="data_nascimento" required>

    <label>Gênero</label>
    <select name="genero" required>
      <option value="">Selecione</option>
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
      <option value="outro">Outro</option>
      <option value="prefiro_nao_dizer">Prefiro não dizer</option>
    </select>

    <label>Cidade</label>
    <input type="text" name="cidade" placeholder="Digite sua cidade">

    <label>Estado</label>
    <input type="text" name="estado" placeholder="Digite seu estado">

    <label>Sobre você</label>
    <textarea name="bio" rows="3" placeholder="Fale um pouco sobre você..."></textarea>

    <label>Senha</label>
    <input type="password" name="senha" placeholder="Crie uma senha" required>

    <label>Confirme sua Senha</label>
    <input type="password" name="confirmar" placeholder="Confirme sua senha" required>

    <button type="submit">Cadastrar</button>
    <a href="login.php">Já tem uma conta? Faça login</a>
  </form>
</body>
</html>
