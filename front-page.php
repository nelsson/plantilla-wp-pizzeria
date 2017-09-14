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
			<h1 class="hero-title"> <?php echo  bloginfo('description' ); ?>	</h1>	
			<div class="text-banner">
				<?php the_content(); ?>	
			</div>
		</div>
		

		<div class="w-main principal contenedor">
			<main>
				
				<!-- cuando se use get_the_content() usar echo -->
			</main>

		</div>
	<?php  endwhile; ?>

<h2>hola de frontpage</h2>

<?php get_footer() ?>