<?php

$correoDestino = "mauro.02.10.1994@gmail.com";

//Texto emisor; sólo lo leerá quien reciba el contenido.
$textoEmisor = "MIME-VERSION: 1.0\r\n";
$textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";
$textoEmisor .= "From: Formulario creado por DarioBF - www.dariobf.com";


$nombre = strip_tags($_POST['name']);
$telefono = strip_tags($_POST['phone']);
$correo = strip_tags($_POST['email']);
$comentario = strip_tags($_POST['message']);
$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

//Formateo el asunto del correo
$asunto = "Contacto WEB_$nombre $apellido";

//Formateo el cuerpo del correo

$cuerpo = "<b>Enviado por:</b> " . $nombre . ", " . $apellidos . " a las " . $fechaFormateada . "<br />";
//$cuerpo .= "<b>Empresa:</b> " . $empresa . ", <b>en el cargo/departamento de</b> " . $departamento . "<br />";
$cuerpo .= "<b>Teléfono de contacto: </b>" . $telefono . "<br />";
$cuerpo .= "<b>E-mail:</b> " . $correo . "<br />";
$cuerpo .= "<b>Comentario:</b> " . $comentario;

// Envío el mensaje
mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
?>
