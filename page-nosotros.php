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
		

		<div class="w-main principal contenedor">
			<main>
				<?php the_content(); ?>	
				<!-- cuando se use get_the_content() usar echo -->
			</main>
		</div>
		<div class="informacion-cajas contenedor">
			<div class="caja">
				<!-- para imprimir directamente el campo -->
				<!-- <img src="<?php // the_field('imagen_1') ?>" alt=""> -->
				<?php 
					$id_imagen = get_field('imagen_1');
					$imagen = wp_get_attachment_image_src( $id_imagen, 'nosotros' );
				 ?>
				<img src="<?php echo $imagen[0] ?>" class="imagen-caja">
				<div class="contenido-caja">
					<?php the_field('descripcion_1') ?>
				</div>
			</div>
			<div class="caja">
				<!-- para imprimir directamente el campo -->
				<!-- <img src="<?php // the_field('imagen_1') ?>" alt=""> -->
				<?php 
					$id_imagen = get_field('imagen_2');
					$imagen = wp_get_attachment_image_src( $id_imagen, 'nosotros' );
				 ?>
				<div class="contenido-caja">
					<?php the_field('descripcion_2') ?>
				</div>
				<img src="<?php echo $imagen[0] ?>" class="imagen-caja">
			</div>
			<div class="caja">
				<!-- para imprimir directamente el campo -->
				<!-- <img src="<?php // the_field('imagen_1') ?>" alt=""> -->
				<?php 
					$id_imagen = get_field('imagen_3');
					$imagen = wp_get_attachment_image_src( $id_imagen, 'nosotros' );
				 ?>
				<img src="<?php echo $imagen[0] ?>" class="imagen-caja">
				<div class="contenido-caja">
					<?php the_field('descripcion_3') ?>
				</div>
			</div>
		</div>

		<!-- cajas -->
		

	<?php  endwhile; ?>


<?php get_footer() ?>