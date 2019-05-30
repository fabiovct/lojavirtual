<?php
$to      = Config::EMAIL_USER;
//ECHO $to;
$subject = 'Contato - Loja Virtual';
$message = 'Email de '.$_GET['message']."\r\n".$_GET['name'];
$dest = $_GET['email'];
//echo $message;
$headers = "From: ".$dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0;url=contato">