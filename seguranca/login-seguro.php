<?php

    //SUPOSTO BANCO DE DADOS

    $login_correto = "leonardo@hot";
    $senha_correta = '123456';

?>

<?php 

    if(isset($_POST['login'])){

        $login_usu = $_POST['login'];
        $senha_usu = $_POST['senha'];

        if($login_usu == $login_correto && password_verify($senha, $senha_correta)){

            header("location:http//www.google.com");
        } else {
            echo "<h1>  ACESSO NEGADO - LOGIN OU SENHA INCORRETO </h1>";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post" action="login-seguro.php">
            <input type="text" name="login" placeholder="digite seu login">
            <input type="password" name="senha" placeholder="digite sua senha">
            <button type="submit">acessar</button>
        </form>
    </div>

</body>
</html>