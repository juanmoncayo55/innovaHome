<?php

function conectarBD(): mysqli{
	$db = mysqli_connect("localhost", "root", "root", "innovahome"); //Realizo la conexion a la base de datos (host, nombre de usuario, contraseña, nombre de la base de datos)

	if(!$db){ //Verifico si falla la conexion
		echo "Error no se puedo conectar";

		exit;
	}

	return $db; //Si no falla devuelvo la instancia de mysqli
}