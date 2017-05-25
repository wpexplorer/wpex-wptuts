<?php
/**
 * This file loads custom css and js for our theme
 *
 * @package WordPress
 * @subpackage WPTuts WPExplorer Theme
 * @since WPTuts 1.0
*/

function wpex_load_scripts() {

	$temp_uri = get_template_directory_uri();

	// Main Style
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Responsive CSS
	wp_enqueue_style( 'wpex-responsive', $temp_uri .'/css/responsive.css' );

	// Font awesome
	wp_enqueue_style( 'font-awesome', $temp_uri .'/css/font-awesome.min.css' );

	// Google fonts
	wp_enqueue_style( 'wpex-google-font-lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' );
	wp_enqueue_style( 'wpex-google-font-crete-round', 'http://fonts.googleapis.com/css?family=Crete+Round:400,400italic&subset=latin,latin-ext' );

	// Remove contact form 7 styles
	if ( function_exists( 'wpcf7_enqueue_styles') ) {
		wp_dequeue_style( 'contact-form-7' );
	}

	// Comment reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Js plugins
	wp_enqueue_script( 'wpex-plugins', WPEX_JS_DIR_URI .'/plugins.js', array( 'jquery' ), '1.7.5', true );

	// Global theme  js
	wp_enqueue_script( 'wpex-global', WPEX_JS_DIR_URI .'/global.js', array( 'jquery', 'wpex-plugins' ), '1.7.5', true );
	
}
add_action( 'wp_enqueue_scripts','wpex_load_scripts' );