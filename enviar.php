<?php
/*Variables del documento para el correo*/
$pnombre_reserva=$_POST['pnombre_reserva'];
$snombre_reserva=$_POST['snombre_reserva'];
$papellido_reserva=$_POST['papellido_reserva'];
$sapellido_reserva=$_POST['sapellido_reserva'];
$correo_reserva=$_POST['correo_reserva'];
$telefono_reserva=$_POST['telefono_reserva'];
$servicio_reserva=$_POST['servicio_reserva'];
$npersonas_reserva=$_POST['npersonas_reserva'];
$fh_reserva=$_POST['fh_reserva'];
$comentarios_reserva=$_POST['comentarios_reserva'];

/*Encabezado*/
$header = 'From: jaot037@gmail.com '."\r\n";
$header .= ' GRUPO 5 JUVENTIC '."\r\n";

$message = "Sal&Salsa datos de la reserva: "."\r\n";
$message .= "Reserva realizada a nombre de ". $papellido_reserva." ".$sapellido_reserva." ".$pnombre_reserva." ".$snombre_reserva."\r\n";
$message .= "Reserva realizada a nombre de ". $papellido_reserva." ".$sapellido_reserva." ".$pnombre_reserva." ".$snombre_reserva."\r\n";
$message .= "Telefono de contacto: ". $telefono_reserva ."\r\n";
$message .= "Correo de contacto: ". $correo_reserva ."\r\n";
$message .= "Servicio que se va a ofrecer: ". $servicio_reserva ."\r\n";
$message .= "Fecha y hora acordada: ". $fh_reserva ."\r\n";
$message .= "Comentarios: ". $comentarios_reserva ."\r\n";

$para = $correo_reserva;
$asunto = 'Prueba Reserva';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: index.html");
?>