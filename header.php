<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<?php
		wp_head();
	?>
</head>
<body>


<header class="encabezado-sitio">
	<div class="contenedor">
		<div class="logo">
			<a href="<?php echo esc_url( home_url('/') )?>">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
			</a>
		</div>
		<div class="informacion-encabezado">
			<div class="redes-sociales">
				<?php
						$args = array(
							'theme_location' => 'social-menu',
							'container' => 'nav',
							'container_class' => 'menu-social',
							'container_id' => 'sociales',
							'link_before' => '<span class="sr-text">',
							'link_after' => '</span>',
						);
					
						wp_nav_menu( $args );
				?>
			</div>
			<div class="direccion">
				<p>
					Mz C lt. 31 San Genaro	
				</p>
				<p>
					Telefono 2550992
				</p>
			</div>
		</div>


	</div>



</header>
<nav class="menu-sitio">
	<div class="contenedor navegacion">
		<?php
			$args = array(
				'theme_location'  => 'header-menu',
				'container' => 'nav',
				'container_class' => 'menu-sitio'
			);
			wp_nav_menu( $args );
		?>
	</div>
</nav>