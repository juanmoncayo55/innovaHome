<?php
	//importar bd para la conexion
	require  __DIR__ . '/../config/database.php';
	$db = conectarBD();
	//consultar
	$query = "SELECT * FROM propiedad LIMIT ${limite}";
	$resultado = mysqli_query($db, $query);
	//mostrar informacion
?>
<?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
	<div class="Residences-card">
		<picture>
			<img src="/imagenes/<?php echo $propiedad["imagen"]; ?>" alt="Imagen Casa residencia">
		</picture>
		<div class="Residences-card__details">
			<p class="Residences-card__details-location">
				<img src="./build/img/location.svg">
				<?php echo $propiedad["titulo"]; ?>
			</p>

			<div class="Residences-card__details-middle">
				<p class="Residences-card__details-location">
					<img src="./build/img/icono_dormitorio.svg" title="Icono habitaciones">
					<?php echo $propiedad["habitaciones"]; ?>
				</p>
				<p class="Residences-card__details-location">
					<img src="./build/img/icono_wc.svg" title="Icono baños">
					<?php echo $propiedad["wc"]; ?>
				</p>
				<p class="Residences-card__details-location">
					<img src="./build/img/icono_estacionamiento.svg" title="Icono estacionamiento">
					<?php echo $propiedad["estacionamiento"]; ?> BED
				</p>
			</div>

			<div class="Residences-card__details-bottom">
				<p class="value">$ <?php echo $propiedad["precio"]; ?></p>
				<a href="/work.php?id=<?php echo $propiedad["id"]; ?>" class="btn">Book Now</a>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<?php 
	//cerrar la conexion
?>