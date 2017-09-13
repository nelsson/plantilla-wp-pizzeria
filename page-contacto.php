<?php get_header() ?>

	<?php while(have_posts()): the_post();	?>

		<?php /// the_post_thumbnail('small');	?> <!-- ya trae la etiqueta img -->
		
		<!-- imagen en background -->
		<?php 
			$imagen = get_the_post_thumbnail_url();

		?>
<!-- 
		<pre>
			<?php 
				//var_dump($imagen);
			?>
		</pre> -->

		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);" >
			<h1 class="hero-title"> <?php  the_title(); ?>	</h1>	
		</div>
		

		<div class="w-main principal contenedor contacto">
			<main>
				<h2>Realiza una reservación</h2>
				<!-- cuando se use get_the_content() usar echo -->
				<form class="reserva-contacto" method="post">
				
					<div class="g-input">
						<input type="text" name="nombre" placeholder="Nombre" required>
					</div>
<!-- 
					<div class="g-input">
						<input type="datetime-local" name="fecha" placeholder="Fecha" required>
					</div> -->
					<div class="g-input">
						<input type="text" name="fecha" placeholder="Fecha" required>
					</div>

					<div class="g-input">
						<input type="email" name="correo" placeholder="Correo" required>
					</div>

					<div class="g-input">
						<input type="tel" name="telefono" placeholder="Teléfono" required>
					</div>

					<div class="g-input">
						<textarea name="mensaje" placeholder="Mensaje" required="" cols="30" rows="10"></textarea>
					</div>
					<div class="wrap-btn">
						<button type="submit" name="enviar">Enviar</button>
						<input type="text" hidden name="oculto" value="1"> 
					</div>
					
	
				</form>
			</main>

		</div>
	<?php  endwhile; ?>


<?php get_footer() ?>