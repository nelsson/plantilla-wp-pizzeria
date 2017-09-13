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
	<?php  endwhile; ?>


<?php get_footer() ?>