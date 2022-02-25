<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

/*
pt-BR > criar email de origem do seu dominio e colocar em EMAIL_MEUDOMINIO@MEUDOMINIO.COM
en-US >create email from your domain and place it at EMAIL_MEUDOMINIO@MEUDOMINIO.COM
*/ 
$from = "info@rydex.com";

/* 
pt-BR > colocar o email pelo qual você quer enviar para seu controle é EMAIL_QUE_VAI_ENVIAR@gmail.com.
en-US > put the email you want to send for your control is EMAIL_QUE_VAI_ENVIAR@gmail.com.
*/
$to = "wandieinnocent2@gmail.com";

/*
pt-BR > agora busca no html pelo 'name' nome do campo, não precisa alterar nada.
en-US > now search the html for the 'name' field name, don't need to change anything.
*/ 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$corpo = $first_name." ".$last_name."\n".$subject."\n".$email."\n".$message;

$headers = "De:". $email;

mail($to, $subject, $corpo, $headers);

$var = "<script>javascript:history.back(-1)</script>";
echo $var;

?>