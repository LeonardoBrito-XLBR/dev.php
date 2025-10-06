<?php

    include 'conexao.php';

    //RECEBER OS DADOS DO FRONTEND 
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao'];
    $salario = $_POST['salario'];
    
    $sql = "INSERT INTO funcionario (nome, funcao, salario) VALUES ('$nome, $funcao, $salario')";

    $conexao ->query($sql);

?>