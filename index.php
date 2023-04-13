<?php
    require_once('func.php');

    session_start();
    $nome = $_SESSION['nome'];
    $mensagem = "SUCESSO, email validado com sucesso, Seja Bem Vindo $nome";
    echo '<script>alert("'.$mensagem.'");</script>';

    confirmEmail($_SESSION['email'], $_SESSION['nome'], $_SESSION['mensagem']);
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMAIL CONFIRMADO</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="img">
        <img src="imagens/server-animate.svg" class="left-mudSenha-image" alt="Animação Unicornio">
    </div>
    <div class="tit">
            <p>Email verificado com Sucesso</p>
    </div>
</body>
</html>