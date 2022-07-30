<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

function mytheme_files() { 
    wp_enqueue_style('mytheme_main_style', get_stylesheet_uri()); 
    wp_enqueue_style('mytheme_mobile_style', get_theme_file_uri('css/theme.css')); 
} 

add_action('wp_enqueue_scripts', 'mytheme_files');

function theme_css_styles() { 
    wp_enqueue_style('slug-theme-css-swup', get_template_directory_uri().'/css/swup.css');
}
    add_action('wp_enqueue_scripts', 'theme_css_styles' ); 

function theme_js_scripts() {
	wp_enqueue_script( 'slug-theme-js-swup',get_template_directory_uri().'/js/swup.min.js','','',true);
	wp_enqueue_script( 'slug-theme-scripts',get_template_directory_uri().'/js/scripts.js','','',true);
}

add_action('wp_enqueue_scripts', 'theme_js_scripts' ); 


?>

