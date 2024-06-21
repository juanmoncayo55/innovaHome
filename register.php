<?php
	require 'includes/funciones.php';
	incluirTemplate('header');
?>
	<form class="contenedor register-contenedor">
		<div class="register">
			<p class="register-title">Datos de Contacto</p>
			<div class="register-form">
				<div class="register-field">
					<label for="nombresCompletos">Nombres completos</label>
					<input type="text" name="nombresCompletos" id="nombresCompletos" placeholder="Escribe tus nombres">
				</div>
				<div class="register-field">
					<label for="apellidosCompletos">Apellidos completos</label>
					<input type="text" name="apellidosCompletos" id="apellidosCompletos" placeholder="Escribe tus apellidos">
				</div>
				<div class="register-field">
					<label for="message">Mensaje</label>
					<textarea name="message" id="message" id="message" placeholder="Escribe tu correo"></textarea>
				</div>
			</div>
		</div>

		<div class="register">
			<p class="register-title">Información sobre la propiedad</p>
			<div class="register-form">
				<div class="register-field">
					<label for="vendeCompra">vende o compra</label>
					<select id="vendeCompra">
						<option value="" selected disabled>-- Seleccione --</option>
						<option value="1">Vende</option>
						<option value="2">Compra</option>
					</select>
				</div>
				<div class="register-field">
					<label for="presupuesto">precio o presupuesto</label>
					<input type="number" name="presupuesto" id="presupuesto" placeholder="Tu precio o presupuesto">
				</div>
			</div>
		</div>

		<div class="register">
			<p class="register-title">¿Cómo deseas que hagamos contacto?</p>
			<div class="register-form" id="formContact">
				<div class="register-radioOption">
					<div>
						<label for="rdTelephono">teléfono</label>
						<input type="radio" name="contact" id="rdTelephono" value="telephono">
					</div>
					<div>
						<label for="rdEmail">e-mail</label>
						<input type="radio" name="contact" id="rdEmail" value="email">
					</div>
				</div>
				<div class="sectionTelephono" id="sectionContact">
					
				</div>
			</div>
		</div>

		<input type="submit" value="Enviar" class="form-submit">
	</form>

<?php
	incluirTemplate('footer');
?>