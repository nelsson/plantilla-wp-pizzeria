
<footer>
	<?php 
		$args = array(
			'theme_location' => 'header-menu',
			'container' => 'nav',
			'after' => '<span class="separador"> | </span>'
		);
		wp_nav_menu( $args );

	 ?>
	<div class="ubicacion">
		<p>
			Mz C lt. 31 San Genaro	
		</p>
		<p>
			Telefono 2550992
		</p>
	</div>	 
</footer>

<?php wp_footer(); ?>
</body>
</html>