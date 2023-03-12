<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 1.0.0
 */
function lb_styles() {
	wp_enqueue_style( 'fse-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lb_styles' );

// theme support
if ( ! function_exists( 'lb_setup' ) ) {
	function lb_setup() {
            // add_theme_support( 'wp-block-styles' );
        }
}
add_action( 'after_setup_theme', 'lb_setup' );