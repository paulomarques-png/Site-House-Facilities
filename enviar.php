<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$nome  = utf8_decode($_POST['f_nome']);
$email = utf8_decode($_POST['f_email']);
$telefone = utf8_decode($_POST['f_tel']);
$msg   = utf8_decode($_POST['f_mensagem']);
$email_destino = 'contato@housefacilities.com.br';
$email_remetente = utf8_decode($_POST['f_email']);

$body = "<h2>Contato feito pelo site</h2>";       
$body .= "<b>Nome:</b> $nome <br>";       
$body .= "<b>E-mail:</b> $email  <br>";
$body .= "<b>Telefone:</b> $telefone  <br>"; 
$body .= "<br>";
$body .= "<b>Mensagem:</b> <br>";        
$body .= $msg;
$body .= "<br>";
$body .= "----------------------------";
$body .= "<br>";
$body .= "Enviado em <b>".date("h:m:i d/m/Y")." por ".$_SERVER['REMOTE_ADDR']."</b>"; //Mostra data e Endereço IP
$body .= "<br>";
$body .= "----------------------------";


// Instância da classe
$mail = new PHPMailer(true);
try
{
    // Configurações do servidor
    $mail->isSMTP();        //Define o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'contato@housefacilities.com.br';
    $mail->Password   = 'Webmailcontato22*';
    // Criptografia do envio SSL também é aceito
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    // Define o remetente
    $mail->setFrom('contato@housefacilities.com.br', $nome);
    // Define o destinatário
    $mail->addAddress('contato@housefacilities.com.br', 'House Facilities');
    // Conteúdo da mensagem
   $mail->AddReplyTo($email, $nome); //Responder para
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = utf8_decode('Contato feito pela página FALE CONOSCO');
    $mail->Body    = $body;
    $mail->AltBody = utf8_decode('Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML');
    // Enviar
    $mail->send();
    echo 'A mensagem foi enviada!';
}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}