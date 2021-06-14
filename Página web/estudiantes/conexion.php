<?php
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$base_datos = "tarea01b2";
	$conectaBD =  new mysqli($servidor, $usuario, $password, $base_datos);

	if (!$conectaBD) {
		echo "Error al conectar la base de datos!";
	}

?>