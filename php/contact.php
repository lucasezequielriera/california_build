<?php

	$destinatario = 'californiabuilders@tooeshop.com';
	setlocale(LC_ALL, 'es_ES');

	$nombre = $_POST['first_name'];
    $apellido = $_POST['last_name'];
	$email = $_POST['email'];
	$telefono = $_POST['phone'];
	$mensaje = $_POST['message'];

    $asunto = 'De californiabuilders.tooeshop.com el día ' . $fecha . " - " . $nombre;
	$header = "From: californiabuilders@tooeshop.com";
	$mensaje = "\n\nDatos de Contacto:" . "\n\nNombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $telefono . "\nMensaje Escrito: " . $mensaje;

	mail($destinatario, utf8_decode($asunto), utf8_decode($mensaje), $header);
	echo "<script>alert('Mensaje enviado correctamente')</script>";
	echo "<script>setTimeout(\"location.href='https://californiabuilders.tooeshop.com/'\",1000)</script>";

?>