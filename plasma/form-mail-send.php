<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from = "dev@fuoricorp.com"; 
    $to = "yzbruno@gmail.com";
    $subject = "Shadow";
    
    // capturando os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $newsletter = isset($_POST['newsletter']) ? $_POST['newsletter'] : 'Não informado';

    // criando a mensagem do e-mail
    $message = "Mailing received:\n\n";
    $message .= "Name: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Like a newsletter? $newsletter\n";

    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // envio do e-mail
    if (mail($to, $subject, $message, $headers)) {
        
    } else {
        echo "Error!";
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
    <h1>Data Sent!</h1>
</section>