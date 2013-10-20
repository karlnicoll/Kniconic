<?php
/*
 * Kniconic Theme's Functions file.
 * @package Kniconic
 * @since Kniconic 1.0
 */

/*
 * Enqueueing scripts and styles for front-end of the Themonic Framework.
 * @since Iconic One 1.0
 */ 
function kniconic_scripts_styles() {
	global $wp_styles;

	// Load the Lato font CSS file for Iconic One.
    $subsets = 'latin,latin-ext';
    $protocol = is_ssl() ? 'https' : 'http';
    $query_args = array(
        'family' => 'Lato:400,700',
        'subset' => $subsets,
    );
    wp_enqueue_style( 'kniconic-fonts', add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ), array(), null );
		
	// Remove Ubuntu font reference.
	wp_dequeue_style( 'themonic-fonts' );
	wp_deregister_style('themonic-fonts');
}
add_action( 'wp_enqueue_scripts', 'kniconic_scripts_styles', 20 );
