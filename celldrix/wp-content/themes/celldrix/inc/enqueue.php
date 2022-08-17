<?php



/**

 * Enqueue scripts and styles.

 */



function celldrix_scripts() {


	wp_enqueue_style( 'celldrix-style', get_stylesheet_uri() );

	wp_enqueue_style( 'celldrix-style-css', get_theme_file_uri('/assets/css/style.css'), array(), '1.0' );

	wp_enqueue_style( 'celldrix-responsive-css', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );










	



	wp_enqueue_script( 'slicknav-js', get_theme_file_uri('/assets/js/jquery.slicknav.min.js'), array(), '1.0', true );

	wp_enqueue_script( 'app-js', get_theme_file_uri('/assets/js/app.js'), array(), '1.0', true );




 	



}

add_action( 'wp_enqueue_scripts', 'celldrix_scripts' );

