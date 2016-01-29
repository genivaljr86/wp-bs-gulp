<?php 

//SCRIPTS E STYLES
if( !is_admin()){

  wp_enqueue_script('jquery');//jQuery
	/*Scroll Animado*/ 
	wp_enqueue_script(
		'scrollTo',
		get_template_directory_uri() . '/assets/scrollTo/jquery.scrollTo.min.js',
		array( 'jquery' ),
		'2.1.3',
		true
	);
}

//HACKS GERAIS
/*Remove Alertas*/
add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
	echo '<style>
	.updated.vc_license-activation-notice, .bsf-update-nag {
		display:none;
	} 
</style>';
}

//SIDEBARS E MENUS
/*Sidebars*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name' => 'sidebar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => '',
			)
		);
}
/*Menus*/
function register_my_menus() {
	register_nav_menus(
		array(
			'top-menu' => __( 'Top Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			'sidebar-menu' => __( 'Sidebar Menu' )
			)
		);
}
add_action( 'init', 'register_my_menus' );


//FUNÇÕES NATIVAS DO WP

/*Ativando Shortcodes nos Widgets*/
add_filter('widget_text', 'do_shortcode');

/*Ativando Thumbnails*/
add_theme_support( 'post-thumbnails' );

/*Redefinindo o tamanho do resumo (excerpt)*/
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
	return 10;
}

