<?php 
    session_start();
    require_once('func.php');
    if (isset($_POST['submit'])){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['nome'] = ucwords($_POST['nome']);
        $confUsu = $_POST['conf_usu'];
        $_SESSION['mensagem'] = $_POST['escreva_algo'];
        if ($_SESSION['email'] == $confUsu){
            if (testarEmail($_SESSION['email'])){
                $_SESSION['cod'] = enviarEmail($_SESSION['email'],  $_SESSION['nome']);
                header('Location: conf_codigo.php');
                exit();
            }else{
                $mensagem = "Dados Incorretos, digite um email válido!";
                echo '<script>alert("'.$mensagem.'");</script>';
            }
        }else{
                $mensagem = "Dados Incorretos, emails inválidos!";
                echo '<script>alert("'.$mensagem.'");</script>';
        }
    }
    

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Nos confirme o seu email <br>Para sabermos se realmente é você 😵🥴</h1>
            <img src="imagens/astronauta_animado.svg" class="left-mudSenha-image" alt="Animação Unicornio">
        </div>

        <form action="conf_email.php" method="POST"> 
            <div class="right-login">
                    <div class="card-login">
                    <h1>VERIFICAÇÃO EMAIL</h1>
                            <div class="textfield">
                                <label for="usuario">Nome</label>
                                <input type="text" name="nome" placeholder="Nome" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Email</label>
                                <input type="text" name="email" placeholder="E-mail" required>
                            </div>

                            <div class="textfield">
                                <label for="usuario">Confirmação Email</label>
                                <input type="text" name="conf_usu" placeholder="Confirmação Email" required>
                            </div>


                            <div class="textfield">
                                <label for="usuario">Escreva algo</label>
                                <input type="text" name="escreva_algo" placeholder="Escreva Algo"required>
                            </div>

                            

                            <button type="submit" name="submit" id="submit" class="btn-login">enviar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>