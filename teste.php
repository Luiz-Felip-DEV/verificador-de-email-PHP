<?php
    require_once('func.php');
    $mensagem = "ERRO, codigo invalido!";
    echo '<script>alert("'.$mensagem.'");</script>';

    confirmEmail($email,$nome);

    
?>