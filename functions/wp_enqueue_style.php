<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */


    wp_register_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_register_style( 'custom-css', get_template_directory_uri() . '/css/custom.min.css', 'bootstrap-min' );
    wp_enqueue_style( 'bootstrap-min' );
    wp_enqueue_style( 'custom-css' );
}

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	 wp_register_style('font-awesome', get_template_directory_uri() . '/css/fontawesome.min.css');
	wp_register_style( 'main_style', get_theme_file_uri( '/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );

	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}
	wp_enqueue_style( 'bootstrap' );
   
}
add_action( 'wp_enqueue_scripts', 'register_css' );
