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
			<h1 class="hero-title"> <?php echo esc_html(bloginfo('description' )); ?>	</h1>	
			<div class="text-banner">
				<?php the_content(); ?>	
			</div>
			<?php $url = get_page_by_title('Sobre Nosotros'); ?>
			<a href="<?php echo get_permalink($url->ID ); ?>">Leer más</a>
		</div>
		

		<div class="w-main principal contenedor">
			<main>
				<h2 class="title-red">Nuestras Especialidades</h2>
				<!-- preparando el objeto con info de especialidades (custom post type) -->
				<div class="home-wrapitem">
				<?php 
					$args = array(
						'post_type'			=> 'especialidades',
						'posts_per_page'	=> 3,
						'orderby'			=> 'rand'
					);
					$args = new WP_Query($args);
					while($args->have_posts()): $args->the_post();
				?>

					<div class="home-itemesp">
						<figure>
							<?php the_post_thumbnail('especialidades_home')?>
						</figure>
						<div class="home-texthover">
							<h4><?php the_title(); ?></h4>
							<div class="home-text">
								<?php the_content(); ?>
								
							</div>
							<div>
								US$ <?php the_field('precio') ?>
							</div>
							<a href="<?php the_permalink(); ?>">Leer más</a>

						</div>
					</div>	



				<?php endwhile; wp_reset_postdata(); ?>
				</div>
				
				<!-- cuando se use get_the_content() usar echo -->
			</main>

		</div>
	<?php  endwhile; ?>

<section class="introhome">
	<div class="contenedor">
		<?php while(have_posts()):the_post() ?>
			<div class="intro-text">
				<?php the_field('introtext') ?>
			</div>
			<figure class="intro-image">
				<img src="<?php the_field('introimagen') ?>" alt="">
			</figure>
		<?php endwhile; ?>	
	</div>
</section>
<section class="galeria">
	<div class="contenedor">
		<?php $url = get_page_by_title('Galería'); ?>
		
		<?php echo get_post_gallery($url->ID) ?>

	</div>
</section>
    <div id="map" style="height: 500px;"></div>
<?php get_footer() ?>

 