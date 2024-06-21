<?php
require "includes/config/database.php";
$db = conectarBD();

$email = "juan@juan.com";
$password = "123456";
$passwordHasheado = password_hash($password, PASSWORD_DEFAULT);

$consulta = "INSERT INTO usuarios(email, password) VALUES ('${email}', '${passwordHasheado}')";

$resultado = mysqli_query($db, $consulta);

if($resultado){
	echo "Consulta realizada";

}else{
	echo "No se hizo la consulta";
}
