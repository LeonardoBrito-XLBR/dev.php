<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'banco_dados';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


    if ($conexao-> connect_error) {
        echo 'Erro na conexão com o banco de dados: ' . $conexao->connect_error;
    } else {
        
        echo "conexao funcionando";
    }

?>