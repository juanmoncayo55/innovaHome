<?php
	require "../includes/funciones.php";

	$auth = estaAutenticado();
	if(!$auth){
		header("Location: /");
	}


	require "../includes/config/database.php";
	$db = conectarBD();

	//Escribir el query
	$consulta = "SELECT * FROM propiedad";
	//Consultar la BD
	$resultadoPropiedades = mysqli_query($db, $consulta);


	//Muestra mensaje condicional
	$resultado = $_GET["resultado"] ?? null; //Si no existe el valor de resultado en el metodo get entonces asigno el valor de null

	if($_SERVER["REQUEST_METHOD"] === "POST"){
		$id = $_POST["id"];
		$id = filter_var($id, FILTER_VALIDATE_INT);

		if($id){ //Verificamos si la variable id viene con algun valor
			//Elimina el archivo
			$carpetaImagenes = "../imagenes/";
			$consulta = "SELECT imagen FROM propiedad WHERE id = ${id}";
			$resultadoImagen = mysqli_query($db, $consulta);
			$propiedadImagen = mysqli_fetch_assoc($resultadoImagen);

			if($resultadoImagen){
				unlink($carpetaImagenes . $propiedadImagen["imagen"]);
			}

			$query = "DELETE FROM propiedad WHERE id = ${id}"; //creamos el query para ejecutar la eliminacion

			$resultado = mysqli_query($db, $query);

			if($resultado){
				header('Location: /admin');
			}
		}
	}

	//Incluye template
	incluirTemplate("header");
?>

	<main class="contenedor">
		<h1>Administrador de bienes raices</h1>
		<?php if( intval($resultado) === 1): ?>
			<p class="alerta exito">Anuncio creado correctamente</p>
		<?php elseif( intval($resultado) === 2): ?>
			<p class="alerta exito">Anuncio actualizado correctamente</p>
		<?php endif; ?>
		<a href="/admin/propiedades/crear.php" class="btn-primary btn-verde">Nueva Propiedad</a>

		<table class="propiedades">
			<thead>
				<tr>
					<th>ID</th>
					<th>Título</th>
					<th>Imagen</th>
					<th>Precio</th>
					<th>Acciones</th>
				</tr>
			</thead>

			<tbody>
				<?php while($propiedad = mysqli_fetch_assoc($resultadoPropiedades)): ?>
					<tr>
						<td><?php echo $propiedad["id"]; ?></td>
						<td><?php echo $propiedad["titulo"]; ?></td>
						<td>
							<img src="<?php echo $propiedad['imagen'] ? '/imagenes/'.$propiedad['imagen'] : '/build/img/default-image.jpg' ?>" class="imagen-tabla" />
						</td>
						<td>$ <?php echo $propiedad["precio"]; ?></td>
						<td>
							<form action="" method="POST" class="w-100">
								<input type="hidden" name="id" value="<?php echo $propiedad["id"]; ?>">
								<input type="submit" value="Eliminar" class="boton-rojo">
							</form>
							<a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo">Actualizar</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</main>


<?php
	//mysqli_close($db);

	incluirTemplate("footer");
?>