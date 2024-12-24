<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);


$para = "rafaelsoaresgw@gmail.com";
$assunto = "Coleta de dados - Soares";

$corpo = "Nome: ".$Nome."\n"."Email: ".$email."\n"."Celular: ".$celular;

$cabeca ="From: rafaelsoaresgw2003@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}

else{
   
    echo("Houve um erro ao enviar o E-mail");

}

?>