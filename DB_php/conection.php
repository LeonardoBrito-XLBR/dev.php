<?php
    $servidor = 'localhost';
    $user = 'root';
    $senha = '';
    $banco = 'empresa';
    
    $conexao = new mysqli($servidor, $user, $senha, $banco);


    if ($conexao) {
        echo "BANCO CONECTADO";
    } 
?>