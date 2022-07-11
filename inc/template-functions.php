<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Xry
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

if( ! function_exists('xry_main_content_wrapper_start_fn') ){

	function xry_main_content_wrapper_start_fn(){

		$html = '<main id="site-main" class="site-main clear">';
		$html .= '<div class="site-content-wrapper container clear">';
		echo $html;

	}

	add_action( 'xry_main_content_wrapper_start', 'xry_main_content_wrapper_start_fn');
}



if( ! function_exists('xry_main_content_wrapper_end_fn') ){

	function xry_main_content_wrapper_end_fn(){

		$html  = '</div>';
		$html .= '</main><!-- #main -->';
		echo $html;
	}

	add_action('xry_main_content_wrapper_end', 'xry_main_content_wrapper_end_fn');

}
function xry_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'xry_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function xry_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'xry_pingback_header' );

