<?php
	require "../../includes/funciones.php";

	$auth = estaAutenticado();
	if(!$auth){
		header("Location: /");
	}

	//Validar id por la URL
	$id = $_GET["id"];
	$id = filter_var($id, FILTER_VALIDATE_INT);

	if(!$id){
		header("Location: /admin");
	}

	require "../../includes/config/database.php";
	$db = conectarBD();


	//Obtener los datos de la propiedad
	$consulta = "SELECT * FROM propiedad WHERE id = ${id}";
	$resultado = mysqli_query($db, $consulta);
	$propiedad = mysqli_fetch_assoc($resultado);

	/*echo "<pre>";
	var_dump($_POST);
	echo "</pre>";*/

	//exit;

	/*echo "<pre>";
	var_dump($propiedad);
	echo "</pre>";*/


	//Consulta para obtener vendedores
	$consulta = "SELECT * FROM vendedor";
	$resultadoVendedores = mysqli_query($db, $consulta);

	$titulo = $propiedad["titulo"];
	$precio = $propiedad["precio"];
	$message = $propiedad["descripcion"];
	$habitaciones = $propiedad["habitaciones"];
	$wc = $propiedad["wc"];
	$estacionamiento = $propiedad["estacionamiento"];
	$vendedorId = $propiedad["vendedor_id"];
	$imagenPropiedad = $propiedad["imagen"];

	//Array con mensajes de errores
	$errores = [];


	if($_SERVER["REQUEST_METHOD"] === "POST"){


		$titulo = mysqli_real_escape_string( $db, $_POST["titulo"] );
		$precio = mysqli_real_escape_string( $db, $_POST["precio"] );
		$message = mysqli_real_escape_string( $db, $_POST["message"] );
		$habitaciones = mysqli_real_escape_string( $db, $_POST["habitaciones"] );
		$wc = mysqli_real_escape_string( $db, $_POST["wc"] );
		$estacionamiento = mysqli_real_escape_string( $db, $_POST["estacionamiento"] );
		$vendedorId = mysqli_real_escape_string( $db, $_POST["vendedor"] );
		$creado = date("Y/m/d");

		//Guardando la informacion de la imagen a subir
		$imagen = $_FILES["imagen"];

		if(!$titulo){
			$errores[] = "Debes añadir un titulo";
		}
		if(!$precio){
			$errores[] = "El precio es obligatorio";
		}
		if(strlen($message) < 50) {
			$errores[] = "La descripcion es obligatoria y debe tener mas de 50 caracteres";
		}
		if(!$habitaciones){
			$errores[] = "El numero de habitaciones es obligatorio";
		}
		if(!$wc){
			$errores[] = "El numero de baños es obligatorio";
		}
		if(!$estacionamiento){
			$errores[] = "El numero de estacionamiento es obligatorio";
		}
		if(!$vendedorId){
			$errores[] = "Elige un vendedor";
		}
		// Validacion por el tamaño de la imagen (100 kb maximo)
		$medida = 1000 * 1000;

		if($imagen["size"] > $medida){
			$errores[] = "La imagen es muy grande";
		}



		/*echo "<pre>";
			var_dump($_FILES);
		echo "</pre>";*/


		//Revisamos si el arreglo de errores esta vacio
		if(empty($errores)){
			/** SUBIDA DE ARCHIVOS **/

			//Crear carpeta
			$carpetaImagenes = "../../imagenes/";
			if(!is_dir($carpetaImagenes)){
				mkdir($carpetaImagenes);
			}

			$nombreImagen = "";

			//Aqui verificamos si el usuario sube una nueva imagen
			if($imagen["name"]){
				//Eliminamos la imagen anterior
				unlink($carpetaImagenes . $propiedad["imagen"]);

				//generando un nombre para la imagen
				$nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

				//Subir la imagen
				move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);
			}else{
				$nombreImagen = $propiedad["imagen"];
			}



			//Insertar en la base de datos
			//Construyendo el query para la insertar la propiedad
			$sql = "UPDATE propiedad SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${message}', habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento}, vendedor_id = ${vendedorId} WHERE id = ${id}";


			//ejecutando el query desde php hacia nuestra base de datos
			$resultado = mysqli_query($db, $sql); //conexion de la base de datos, sql

			if($resultado){
				//Si todo va bien redireccionamos al usuario
				header('Location: /admin?resultado=2');
			}
		}

	}

	incluirTemplate("header");
?>

	<main class="contenedor">
		<h1 class="text-center">Actualizar Propiedad</h1>

		<a href="/admin" class="btn-primary btn-verde">Volver</a>

		<?php foreach($errores as $error): ?>
		<div class="alerta error">
			<?php echo $error ?>
		</div>
		<?php endforeach; ?>

		<form class="contenedor register-contenedor" method="POST" enctype="multipart/form-data">
			<div class="register">
				<p class="register-title">Información General</p>
				<div class="register-form">
					<div class="register-field">
						<label for="titulo">Título</label>
						<input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">
					</div>

					<div class="register-field">
						<label for="precio">Precio</label>
						<input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio; ?>">
					</div>

					<div class="register-field">
						<label for="imagen">Imagen</label>
						<input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
						<img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="img-small">
					</div>

					<div class="register-field">
						<label for="message">Mensaje</label>
						<textarea name="message" id="message" name="message" id="message" placeholder="Escribe tu correo"><?php echo $message; ?></textarea>
					</div>
				</div>
			</div>

			<div class="register">
				<p class="register-title">Información Propiedad</p>
				<div class="register-form">
					<div class="register-field">
						<label for="habitaciones">habitaciones</label>
						<input type="number" id="habitaciones" name="habitaciones" min="1" max="9" placeholder="Ej: 3" value="<?php echo $habitaciones; ?>">
					</div>
				</div>

				<div class="register-form">
					<div class="register-field">
						<label for="wc">baños</label>
						<input type="number" id="wc" name="wc" min="1" max="9" placeholder="Ej: 3" value="<?php echo $wc; ?>">
					</div>
				</div>

				<div class="register-form">
					<div class="register-field">
						<label for="estacionamiento">Estacionamiento</label>
						<input type="number" id="estacionamiento" name="estacionamiento" min="1" max="9" placeholder="Ej: 3" value="<?php echo $estacionamiento; ?>">
					</div>
				</div>
			</div>

			<div class="register">
				<p class="register-title">Vendedor</p>

				<div class="register-form">
					<div class="register-field">
						<select name="vendedor">
							<option value="">--- Seleccione ---</option>
							<?php while($vendedor = mysqli_fetch_assoc($resultadoVendedores)): ?>
								<option <?php echo $vendedorId === $vendedor["id"] ? "selected" : "" ?> value="<?php echo $vendedor["id"]; ?>">
									<?php echo $vendedor["nombre"] . " " . $vendedor["apellido"]; ?>
								</option>
							<?php endwhile; ?>
						</select>				
					</div>
				</div>
			</div>

			<input type="submit" value="Actualizar Propiedad" class="form-submit">
		</form>
	</main>


<?php
	incluirTemplate("footer");
?>