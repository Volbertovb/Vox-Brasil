<?php





$para = "volbertovb@gmail.com";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];




/*
echo $nome."<br>";
echo $telefone."<br>";
echo $cidade."<br>";
echo $mensagem."<br>";
*/

//$assunto
$assunto = "Email Contato Site Caluba";

$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem = "<strong>Telefone/WhatsApp:  </strong>".$telefone;
$mensagem = "<strong>Cidade:  </strong>".$cidade;
$mensagem .= "<br>  <strong>Mensagem: </strong>"


.$_POST['mensagem'];


$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  dominio.com.br<sistema@dominio.com.br>\n";
$headers .= "X-Sender:  <sistema@dominio.com.br>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@dominio.com.br>\n";
$headers .= "MIME-Version: 1.0\n";

mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.




?>