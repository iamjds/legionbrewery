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

/**
 * Plugin Name: LB footer form
 */
function legion_register_footer_form() {
    register_block_type( __DIR__ );
}
add_action( 'init', 'legion_register_footer_form' );


// Allow SVG uploads
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4 );

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


// preload resources in the header
add_action( 'wp_head', function() {
    echo '<link rel="preload" href="/wp-content/uploads/2023/03/legion-logo.svg" as="image" type="image/svg+xml">';
}, 5);