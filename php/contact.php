<?php

	$destinatario = 'lucasezequielriera@hotmail.com';
	setlocale(LC_ALL, 'es_ES');
    $fecha = strftime("%A %d/%m/%Y, a las %k:%M:%S");

	$nombre = $_POST['first_name'];
    $apellido = $_POST['last_name'];
	$email = $_POST['email'];
	$telefono = $_POST['phone'];
	$message = $_POST['message'];

    $asunto = 'De Escuelasiade.com el día ' . $fecha . " - " . $nombre;
	$header = "From: tiendas@tooeshop.com";
	$mensaje = "\n\nDatos de Contacto:" . "\n\nNombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $telefono;

	mail($destinatario, utf8_decode($asunto), utf8_decode($mensaje), $header);
	echo "<script>alert('¡Mensaje enviado correctamente!')</script>";
	echo "<script>setTimeout(\"location.href='https://escuelasiade.com/'\",1000)</script>";

?>