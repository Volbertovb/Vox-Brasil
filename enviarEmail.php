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

$mensagem = "<strong>Nome:  </strong>".$nome."<br>";
$mensagem .= "<strong>Telefone/WhatsApp:  </strong>".$telefone."<br>";
$mensagem .= "<strong>Cidade:  </strong>".$cidade."<br>";
$mensagem .= "<br>  <strong>Mensagem: </strong>"."<br>"


.$_POST['mensagem'];


$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From: Email Site Caluba <caluba@caluba>\n";
$headers .= "X-Sender:  <caluba@caluba>\n";
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <caluba@caluba>\n";
$headers .= "MIME-Version: 1.0\n";

$enviaremail = mail($para, $assunto, $mensagem, $headers);
	
if($enviaremail){

  echo " <meta http-equiv='refresh' content='0;URL=index.php'>";
  } else {
  echo "ERRO AO ENVIAR E-MAIL!";
  }
	




?>