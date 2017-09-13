<?php 
	function lapizzeria_ajustes(){

		// add_menu_page('Nombre de la pagina:titulo', 'nombre que se ve en el menu', 'el usuario que vera las opciones ','slug en menu:', 'llamar la funcion  a llamar','icono a mostrar (segun codex)',posicion en la barra );
		add_menu_page('La Pizzeria', 'La Pizzeria Ajustes', 'administrator','lapizzeria_ajustes', 'lapizzeria_opciones','',20 );


		// add_submenu_page('al menu que corresponde : parent slug', 'Nombre de la pagina', 'Titulo del menu', 'el usuario que vera las opciones ', 'slug','funcion o callback' );
		add_submenu_page('lapizzeria_ajustes', 'Reservaciones', 'Reservaciones', 'administrator', 'lapizzeria_reservaciones','lapizzeria_reservaciones' );

	}
	add_action('admin_menu', 'lapizzeria_ajustes' );

	function lapizzeria_opciones(){


	};

	function lapizzeria_reservaciones(){

?>
	<!-- html -->
	<div id="wrap">
		<h1>
			Reservaciones
		</h1>
		<table class="wp-list-table widefat striped">
			<thead>
				<tr>
					<th class="manage-column">
						ID
					</th>
					<th class="manage-column">
						Nombre
					</th>
					<th class="manage-column">
						Fecha de Reserva
					</th>
					<th class="manage-column">
						Correo
					</th>
					<th class="manage-column">
						Teléfono
					</th>
					<th class="manage-column">
						Mensaje
					</th>
				</tr>
			</thead>
			<tbody>
					<?php global $wpdb;
						$reservaciones = $wpdb->prefix . 'reservaciones';
						$registros = $wpdb->get_results(" SELECT * FROM $reservaciones ", ARRAY_A);
					?>
					<pre>
						<?php var_dump($registros); ?>
					</pre>
			</tbody>

		</table>

	</div>
	<!-- html -->

<?php

	};


?>