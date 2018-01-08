<?php

	$destino = "inverlago.gerencia@gmail.com";
	
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];

	$contenido = "nombre: " . $nombre . "\ncorreo: " . $correo . "\ntelefono: " . $telefono . "\nmensaje: " . $mensaje;


	mail($destino, $asunto, $contenido);

	header("location: http://floridascoreboardservices.com");

?>