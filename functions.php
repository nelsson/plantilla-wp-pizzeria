<?php
	//tablas personalizadas
	require get_template_directory() . '/inc/database.php';

	//funciones para las reservaciones
	require get_template_directory() . '/inc/reservaciones.php';

	//funciones para las reservaciones
	require get_template_directory() . '/inc/opciones.php';


/** para agregas css y js ***/
	function lapizzeria_Styles(){
		//registro de estilos
		wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '7.0.0' );

		//google fonts
		wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900', array(),'1.0' );
		
		wp_register_style('style' , get_template_directory_uri() . '/style.css', array(), '1.0');
		wp_register_style('awesome' , get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0');
		wp_register_style('fluidbox' , get_template_directory_uri() . '/js/fluidbox/fluidbox.min.css', array(), '1.0');
		wp_register_style('main' , get_template_directory_uri() . '/css/main.css', array(), '1.0');


		//llamar los estilos
		wp_enqueue_style('normalize');
		wp_enqueue_style('style');
		wp_enqueue_style('google-fonts');
		wp_enqueue_style('awesome');
		wp_enqueue_style('fluidbox');
		wp_enqueue_style('main');


		//registrar js
		wp_register_script('fluidboxjs', get_template_directory_uri() . '/js/fluidbox/jquery.fluidbox.min.js', array(), '1.0', true);
		wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);

		//jquery
		wp_enqueue_script('jquery');
		wp_enqueue_script('fluidboxjs');
		wp_enqueue_script('main');
	}
	add_action('wp_enqueue_scripts' , 'lapizzeria_Styles' );
/** para agregas css y js ***/



/** para agregas menus  ***/
	function lapizzeria_menus(){
		register_nav_menus( array(
			'header-menu' => __('Header Menu', 'lapizzeria'),
			'social-menu' => __('Social Menu', 'lapizzeria'),	

		));

	}

	add_action('init', 'lapizzeria_menus' );

/** para agregar menus  ***/


/** para agregar imagenes  ***/
function lapizzeria_setup(){
	add_theme_support('post-thumbnails' );

	// agregando tamaño de imagen personalizado
		add_image_size( 'nosotros', 437, 291, true );
		add_image_size( 'especialidades', 768, 515, true );
		add_image_size( 'especialidades_home', 435, 526, true );

		// update_option( 'medium_size_w', 164); //para medium o large
		
		update_option( 'thumbnail_size_w', 253); //para la miniatura
		update_option( 'thumbnail_size_h', 164);

	// agregando tamaño de imagen personalizado

}
add_action('after_setup_theme', 'lapizzeria_setup');


/** para agregar imagenes  ***/



/*** custom post type  ***/
add_action('init', 'lapizzeria_especialidades' );	
function lapizzeria_especialidades(){
	$labels = array(
		'name'				=> _x('Pizzas','lapizzeria'),
		'singular_name'		=> _x('Pizzas','post type singular name','lapizzeria'),
		'menu_name'			=> _x('Pizzas','admin menu','lapizzeria'),
		'name_admin_bar'	=> _x('Pizza','add new on admin bar','lapizzeria'),
		'add_new'			=> _x('Agregar nuevo','book', 'lapizzeria'),
		'add_new_item'		=> __('Agregar nueva Pizza', 'lapizzeria'),
		'new_item'			=> __('Nueva Pizza', 'lapizzeria'),
		'edit_item'			=> __('Editar Pizza', 'lapizzeria'),
		'edit_item'			=> __('Editar Pizza', 'lapizzeria'),
		'view_item'			=> __('Ver Pizza', 'lapizzeria'),
		'all_items'			=> __('Todas las Pizzas', 'lapizzeria'),
		'search_items'		=> __('Busca Pizzas', 'lapizzeria'),
		'parent_item_color'	=> __('Parent Pizzas', 'lapizzeria'),
		'not_found'			=> __('Pizza no encontrada', 'lapizzeria'),
		'not_found_in_trash'=> __('Pizza no encontrada en Papelera', 'lapizzeria')
	);
	$args = array(
		'labels'			=> $labels,
		'descripcion'		=> __('Descripcion.','lapizzeria'),
		'public'			=> true,
		'publicly_queryable'=> true,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'query_var'			=> true,
		'rewrite'			=> array('slug' =>'especialidades'),
		'capability_type'	=> 'post',
		'has_archive'		=> true,
		'hierarchical'		=> false,
		'menu_position'		=> 6,
		'supports'			=> array('title', 'editor', 'thumbnail'),
		'taxonomies'		=> array('category')


	);
	register_post_type( 'especialidades', $args );
}

/*** custom post type  ***/

/*** widget ***/
function lapizzeria_widgets(){
	register_sidebar( array(
		'name' 			=> 'Blog Sidebar',
		'id'			=>	'blog_sidebar',
		'before_widget'	=>	'<div class="widget">',
		'after:widget'	=>	'</div>',
		'before_title'	=>	'<h3>',
		'after_title'	=>	'</h3>'

	));
}
add_action('widgets_init', 'lapizzeria_widgets');
/*** widget ***/
?>
