<?php
include "class.phpmailer.php";
include "class.smtp.php";

$email_user = "mauro.02.10.1994@gmail.com";
$email_password = "mauro0210";
$the_subject = "Phpmailer prueba by Evilnapsis.com";
$address_to = "mauro_02_10@hotmail.com";
$from_name = "Evilnapsis";
$phpmailer = new PHPMailer();

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password;
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;

$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email

$phpmailer->Subject = $the_subject;
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Mundo!</h1>";
$phpmailer->Body .= "<p>Mensaje personalizado</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);

$phpmailer->Send();
?>
