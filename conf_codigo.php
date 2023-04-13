<?php 
    session_start();
    if(isset($_POST['submit'])){
        $codUsu = $_POST['codigo'];
        if ($codUsu == $_SESSION['cod']){
            header("location: index.php");
        }else{
            $mensagem = "ERRO, codigo invalido!";
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

        <form action="conf_codigo.php" method="POST"> 
            <div class="right-login">
                    <div class="card-login">
                    <h1>CONFIRMAÇÃO DO CODIGO</h1>
                            <div class="textfield">
                                <label for="usuario">Codigo</label>
                                <input type="number" name="codigo" placeholder="Codigo">
                            </div>

                            <button type="submit" name="submit" id="submit" class="btn-login">Confirmar</button>
                    </div>
            </div>
        </form>
    </div>
    </form>
</body>
</html>