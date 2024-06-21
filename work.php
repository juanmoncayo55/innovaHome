<?php
	$id = $_GET["id"];
	$id = filter_var($id, FILTER_VALIDATE_INT);

	if(!$id){
		header("Location: /");
	}

	//conectar la bd
	require 'includes/config/database.php';
	$db = conectarBD();

	//hacer consulta
	$consulta = "SELECT * FROM propiedad WHERE id = ${id}";
	$resultado = mysqli_query($db, $consulta);

	if($resultado->num_rows === 0){
		header("Location: /");
	}

	$propiedad = mysqli_fetch_assoc($resultado);

	require 'includes/funciones.php';
	incluirTemplate('header');
?>


<section class="contenedor contenedor-md mt-residence">
	<h2 class="text-center"><?php echo $propiedad["titulo"]; ?></h2>
	<img src="/imagenes/<?php echo $propiedad["imagen"]; ?>" alt="Imagen de residencia" class="residence-image">
	<div class="information-propiedad">
		<p class="Residences-card__details-location locat-it">
			<img src="./build/img/icono_dormitorio.svg" title="Icono habitaciones">
			<?php echo $propiedad["habitaciones"]; ?>
		</p>
		<p class="Residences-card__details-location locat-it">
			<img src="./build/img/icono_wc.svg" title="Icono baños">
			<?php echo $propiedad["wc"]; ?>
		</p>
		<p class="Residences-card__details-location locat-it">
			<img src="./build/img/icono_estacionamiento.svg" title="Icono estacionamiento">
			<?php echo $propiedad["estacionamiento"]; ?>
		</p>
	</div>
	<p class="descripcion-propiedad">
		<?php echo $propiedad["descripcion"]; ?>
	</p>
	<h3 class="precio-habitacion">$ <?php echo $propiedad["precio"]; ?></h3>
	<p class="creado">Publicación creada el: <?php echo $propiedad["creado"]; ?></p>
</section>


<?php
	mysqli_close($db);

	incluirTemplate('footer');
?>