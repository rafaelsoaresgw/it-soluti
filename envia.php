<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "rafaelsoaresgw@gmail.com";
    $assunto = "Coleta de dados - Soares";

    $corpo = "Nome: " . $nome . "\n" .
             "Email: " . $email . "\n" .
             "Celular: " . $celular . "\n" .
             "Mensagem: " . $mensagem;

    $cabeca = "From: rafaelsoaresgw2003@gmail.com" . "\n" .
              "Reply-To: " . $email . "\n" .
              "X-Mailer: PHP/" . phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail.";
    }
}
?>

