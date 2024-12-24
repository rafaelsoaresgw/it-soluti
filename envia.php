<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ini_set('display_errors', 1); // Ativar exibição de erros
    error_reporting(E_ALL);

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

    $cabeca = "From: noreply@seudominio.com" . "\n" . // Use um e-mail do domínio do servidor
              "Reply-To: " . $email . "\n" .
              "X-Mailer: PHP/" . phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail.";
    }
}
?>
