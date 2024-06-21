<?php
	require 'includes/funciones.php';
	incluirTemplate('header');
?>
	<div class="Banner">
		<h2 class="Banner-title">Works</h2>
		<p class="Banner-miga">
			<a href="index.php">Inicio</a> /
			<span>Works</span>
		</p>
	</div>

	<section id="works" class="Residences">
		<div class="contenedor Residences-contenedor">
			<p class="Post-blog__title">Our Works</p>
			
			<?php
				$limite = 10;
				include "includes/templates/anuncios.php";
			?>

		</div>
	</section>

<?php
	incluirTemplate('footer');
?>