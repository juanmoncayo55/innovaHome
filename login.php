<?php
	require "includes/config/database.php";
	$db = conectarBD();

	$errores = [];

	//Autenticar el usuario
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		$email = mysqli_real_escape_string($db, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) );
		$password = mysqli_real_escape_string($db, $_POST["password"] );

		if(!$email){
			$errores[] = "El email es obligatorio o el email es incorrecto";
		}

		if(!$password){
			$errores[] = "El password es obligatorio";
		}


		if(empty($errores)){
			//revisar si el usuario existe
			$consulta = " SELECT * FROM usuarios WHERE email = '${email}' ";
			$resultado = mysqli_query($db, $consulta);

			if($resultado->num_rows){
				//revisar si el password existe
				$usuario = mysqli_fetch_assoc($resultado);
				//verificar que el password hasheado sea igual al que dio el usuario
				$auth = password_verify($password, $usuario["password"]);

				if($auth){
					session_start();
					//Si el usuario esta autenticado
					$_SESSION["usuario"] = $usuario["email"];
					$_SESSION["login"] = true;

					header('Location: /admin');
				}else{
					$errores[] = "El password es incorrecto";
				}
			}else{
				$errores[] = "El usuario no existe";
			}
		}
	}


	//Incluye el header
	require 'includes/funciones.php';
	incluirTemplate('header');
?>
	<section class="contenedor register-contenedor contenedor-md">
		<form class="form-login" method="POST" novalidate>
			<div class="register">
				<p class="register-title">Iniciar Sesion</p>

				<?php foreach($errores as $error): ?>
					<p class="alerta error"><?php echo $error; ?></p>
				<?php endforeach; ?>

				<div class="register-form">
					<div class="register-field">
						<label for="email">e-mail</label>
						<input type="email" name="email" id="email" placeholder="Escribe tu e-mail">
					</div>
					<div class="register-field">
						<label for="password">password</label>
						<input type="password" name="password" id="password" placeholder="Tu password">
					</div>
				</div>
			</div>
			<input type="submit" value="Enviar" class="form-submit">
		</form>

	</section>
	
<?php
	incluirTemplate('footer');
?>