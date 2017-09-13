<?php 
/*
*	Template Name: Especialidades
*/
	get_header() 


?>
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

		<div class="nuestras-especialidades contenedor">
			<h3>
				Pizzas
			</h3>
			<div class="contenedor-grid ">
				<?php 
					$args = array(
						'post_type'	 		=> 'especialidades',
						'posts_per_page'	=> -1,
						'orderby'			=> 'title',
						'order'				=> 'ASC',
						'category_name'		=> 'pizzas',
					);
					$pizzas = new WP_Query($args);
					while ($pizzas->have_posts()): $pizzas->the_post();
				?>
				<div class="menu-item-list">
					<div>
						<?php the_post_thumbnail('especialidades')?>
					</div>	
					<div class="texto-especialidad">
						<h4 class="menu-title">
							<?php the_title(); ?> <span>$ <?php the_field('precio') ?></span>
						</h4>
						<div class="texto-parrafo">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php  endwhile; wp_reset_postdata();?>
			</div>
			
		</div>	

		<div class="nuestras-especialidades contenedor">
			<h3>
				Otros
			</h3>
			<div class="contenedor-grid ">
				<?php 
					$args = array(
						'post_type'	 		=> 'especialidades',
						'posts_per_page'	=> -1,
						'orderby'			=> 'title',
						'order'				=> 'ASC',
						'category_name'		=> 'otros',
					);
					$otros = new WP_Query($args);
					while ($otros->have_posts()): $otros->the_post();
				?>
				<div class="menu-item-list">
					<div>
						<?php the_post_thumbnail('especialidades')?>
					</div>	
					<div class="texto-especialidad">
						<h4 class="menu-title">
							<?php the_title(); ?> <span>$ <?php the_field('precio') ?></span>
						</h4>
						<div class="texto-parrafo">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php  endwhile; wp_reset_postdata();?>
			</div>
			
		</div>	


<?php get_footer() ?>