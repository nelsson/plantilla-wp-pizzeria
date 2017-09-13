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


		<!-- form comentarios -->
		<div class="contenedor comentarios">
			<?php comment_form(); ?>
		</div>
		<!-- form comentarios -->

		<!-- comentarios enviados -->
		<div class="contenedor ">
			<ul class="lista-comentarios">
				<?php 
					$comentarios = get_comments( array(
						'post_id'	=>	$post->ID,
						'status'	=>	'approve',


					));
					wp_list_comments(array(
						'per_page'	 		=> 10,
						'reverse_top_level'	=> false
					), $comentarios );
				 ?>
			</ul>
		</div>

		<!-- comentarios enviados -->

	<?php  endwhile; ?>


<?php get_footer() ?>