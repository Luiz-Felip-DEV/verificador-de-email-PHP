<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function gerarCodigo(){
    return rand(3000, 100000);
}

function enviarEmail($emai, $nome){
    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                             //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'multimidiaconexoes@gmail.com';                     //SMTP username
        $mail->Password   = 'vdvjiztziykssdbz';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('multimidiaconexoes@gmail.com', 'Multi Midia');
        $mail->addAddress($emai, $nome);     //Add a recipient        
        $mail->addReplyTo('multimidiaconexoes@gmail.com', 'Multi Midia');
        

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mensagem de confirmacao de email, do site Comunicacoes Multi Midia ';
        $numAleat = gerarCodigo();

        $body = "Mensagem de confirmação de email, segue o codigo de confirmação: $numAleat<br><br><br><br>
        Nome: $nome<br>
        E-mail: $emai<br><br><br><br>
        Se você já confirmou o email, ignore essa mensagem;
        ";
        
        $mail->Body    = $body;

        $mail->send();
        echo 'E-mail enviado com sucesso!';
        return $numAleat;
    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
}
}

function testarEmail($email){
    if (strpos($email, '@') && strpos($email, 'gmail.com') || strpos($email, 'icloud.com') || strpos($email, 'hotmail.com') || strpos($email, 'yahoo.com')){
        echo "<script>console.log('Email confirmado!') </script>";
        return true;
    }else{
        echo "<script>console.log('Email Negado!') </script>";
        return false;
    }
}

function confirmEmail($emai, $nome, $mensag){
      //Load Composer's autoloader
      require 'vendor/autoload.php';

      //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);
  
      try {
          //Server settings
          //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
          $mail->isSMTP();                                             //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'multimidiaconexoes@gmail.com';                     //SMTP username
          $mail->Password   = 'vdvjiztziykssdbz';                               //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
          //Recipients
          $mail->setFrom('multimidiaconexoes@gmail.com', 'Multi Midia');
          $mail->addAddress($emai, $nome);     //Add a recipient        
          $mail->addReplyTo('multimidiaconexoes@gmail.com', 'Multi Midia');
          
  
          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'Comunicacoes Multi Midia';
  
          $body = "Email confirmado com sucesso...<br><br><br><br>
          Parabens $nome o email
            $emai foi confirmado com sucesso!<br><br><br><br><br>
            <pre><strong>mensagem do usuario:</strong>$mensag</pre>
          ";
          
          $mail->Body    = $body;
  
          $mail->send();
          echo "<script>console.log('Email enviado com sucesso!')</script>";
      } catch (Exception $e) {
        echo "<script>console.log('ERRO, email não foi enviado')</script>";;
  }
  }



?>