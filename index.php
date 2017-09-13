<?php get_header(); ?>
		
		<?php 
			$pagina_blog = get_option('page_for_posts');
			$imagen = get_post_thumbnail_id($pagina_blog);
			$imagen = wp_get_attachment_image_src($imagen, 'full');

		?>
		<div class="hero" style="background-image: url(<?php echo $imagen[0];?>);" >
			<h1 class="hero-title"> <?php echo get_the_title($pagina_blog); ?>	</h1>	
		</div>
		

		<div class="w-main principal-blog contenedor">
			<main>
				<?php while(have_posts()): the_post();	?>
					<article>
						<?php the_post_thumbnail('especialidades'); ?>
						<header>
							<div class="fecha">
								<time>
								<?php the_time('d')  ?>
								<span>
									<?php echo the_time('M') ?>
								</span>
									
								</time>
								<div class="title-entrada">
									<h2><?php the_title(); ?></h2>
									<p class="autor">
										<i class="fa fa-user" aria-hidden="true"><?php the_author() ?></i>
									</p>
								</div>
								<?php the_category(); ?> <!-- imprimir categorias -->
								<?php the_tags(); ?> <!-- imprimir etiquetas -->


							</div>
						</header>
						<div class="contenido-entrada">
							<?php the_excerpt();?>
							<a href="<?php the_permalink();?>">Leer más</a>
						</div>

					</article>
					
				<!-- cuando se use get_the_content() usar echo -->
				<?php  endwhile; ?>
				<div class="paginacion">
					<?php // echo paginate_links(); ?> <!-- metodo uno -->
					<div class="anteriores">
						<?php next_posts_link('Anteriores' ); ?>
					</div>
					<div class="siguientes">
						<?php previous_posts_link('Siguientes' ); ?>
					</div>
				</div>
			</main>
			<?php get_sidebar(); ?>
 			

		</div>


<?php get_footer(); ?>