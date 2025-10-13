<?php

    include 'conexao.php';


    $nome = $_POST['nome'];
    $produtora = $_POST['produtora'];
    $console = $_POST['console'];
    $preco = $_POST['preco'];
    $ano_publicacao = (int)$_POST['ano'];


    $sql = "INSERT INTO jogos (nome, produtora, console, preco, ano_publicacao) VALUES ('$nome','$produtora','$console', '$preco', '$ano_publicacao')";

    if ($conexao->query($sql)) {
        header('Location: obrigado.php');
    } else {
        header('Location: index.php');
    }

    echo " $sql O ERRO AQUI"
    

?>