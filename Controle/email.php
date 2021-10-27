<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome= addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem =addslashes($_POST['message']);

$to = "freitaugusto2001@gmail.com";
$subject = "Contato HeReserve";
$body=  "Nome: ".$nome."\n".
        "Email: ".$email."\n".
        "Mensagem: ".$mensagem;

$header = "From: august.contact.or@gmail.com"."\r\n".
          "Reply-To:".$email."\r\n".
          "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso");

}else{
    echo("Email não foi enviado");
}

}


?>