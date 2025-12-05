<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $msg = trim($_POST["mensagem"]);

    $to = "tuliolopesr@gmail.com";  
    $subject = "Mensagem do site - Portfólio";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$msg";
    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    echo "<h2>Mensagem enviada com sucesso!</h2>";
}
?>
