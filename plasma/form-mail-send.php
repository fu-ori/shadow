<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = "amper@fuoricorp.com"; // Seu e-mail de envio
    $to = "yzbruno@gmail.com"; // Destinatário

    $subject = "Novo Cadastro - Formulário";
    
    // Capturando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $instituicao = $_POST['instituicao'];
    $pais = $_POST['pais'];
    $cidade = $_POST['cidade'];
    $cargo = $_POST['cargo'];
    $newsletter = isset($_POST['newsletter']) ? $_POST['newsletter'] : 'Não informado';

    // Criando a mensagem do e-mail
    $message = "FORUM BPG - Novo cadastro recebido:\n\n";
    $message .= "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Celular: $celular\n";
    $message .= "Instituição: $instituicao\n";
    $message .= "País: $pais\n";
    $message .= "Cidade: $cidade\n";
    $message .= "Cargo: $cargo\n";
    $message .= "Aceita receber e-mails? $newsletter\n";

    // Cabeçalhos do e-mail
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envio do e-mail
    if (mail($to, $subject, $message, $headers)) {
        
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>

<!-- custom css -->
<style type="text/css">
    body{
        padding: 0;
        margin: 0;
        font-family: Arial;
    }
    .thankyou{
        width: 100%;
        height: 100vh;
        background-color: #616161;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
    }
    .thankyou img{
        width: 100px;
    }
</style>

<!-- ui -->
<section class="thankyou">
    <img src="form-mail-thankyou.svg">
    <h1>Cadastro efetuado com sucesso.</h1>
</section>