<?php
// adding the stylesheets
function theme_styles() {
	
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	
}
//adding the custom js

function theme_js(){
		
	wp_enqueue_script( 'jacksonthatsme.js', get_template_directory_uri() . '/js/jacksonthatsme.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'cookies', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), '', true );
	
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable Custom Menus
add_theme_support( 'menus' );

$args = array(
	'name'          => __( 'About Widget' ),
	'id'            => 'about_widget',
	'description'   => 'Twitter Widget',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h5>',
	'after_title'   => '</h5>'
);

register_sidebar( $args );

/* CUSTOM POST TEMPLATES */
/**
 * Hooks the WP cpt_post_types filter
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 **/
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'work';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );

?>