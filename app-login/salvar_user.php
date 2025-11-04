<?php
include ('config.php');


$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$bio = $_POST['bio'];
$senha = password_hash($_POST['senha']);
$confirmar = $_POST['confirmar'];

    // Verifica se as senhas conferem
    if ($senha !== $confirmar) {
        die("As senhas não conferem!");
    }

    // Criptografa a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepara o statement seguro
    $stmt = $conexao->prepare("INSERT INTO usuarios (nome, usuario, email, telefone, data_nascimento, genero, cidade, estado, bio, senha) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Vincula os parâmetros
    $stmt->bind_param("ssssssssss", $nome, $usuario, $email, $telefone, $data_nascimento, $genero, $cidade, $estado, $bio, $senha_hash);

    // Executa
    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fecha o statement e a conexão
    $stmt->close();
    $conexao->close();
   echo "Usuário cadastrado com sucesso!";
?>