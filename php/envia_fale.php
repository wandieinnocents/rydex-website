<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

/*
pt-BR > criar email de origem do seu dominio e colocar em EMAIL_MEUDOMINIO@MEUDOMINIO.COM
en-US >create email from your domain and place it at EMAIL_MEUDOMINIO@MEUDOMINIO.COM
*/ 
$from = "EMAIL_MEUDOMINIO@MEUDOMINIO.COM";

/* 
pt-BR > colocar o email pelo qual você quer enviar para seu controle é EMAIL_QUE_VAI_ENVIAR@gmail.com.
en-US > put the email you want to send for your control is EMAIL_QUE_VAI_ENVIAR@gmail.com.
*/
$to = "wandieinnocent2@gmail.com";

/*
pt-BR > agora busca no html pelo 'name' nome do campo, não precisa alterar nada.
en-US > now search the html for the 'name' field name, don't need to change anything.
*/ 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$assunto = $_POST['assunto'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$corpo = $nome." ".$sobrenome."\n".$assunto."\n".$email."\n".$mensagem;

$headers = "De:". $email;

mail($to, $assunto, $corpo, $headers);

$var = "<script>javascript:history.back(-1)</script>";
echo $var;

?>