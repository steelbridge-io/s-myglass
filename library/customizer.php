<?php
/*
 *
 * Customizer options for Smoke My Glass Theme
 *
 */
 
include 'customizer-css/global-css.php';
include 'customizer-css/frontpage-css.php';
include 'customizer-css/basic-css.php';
include 'customizer-css/woocommerce-css.php';

if ( ! function_exists( 'smg_register_theme_customizer' ) ) :
	function smg_register_theme_customizer( $wp_customize ) {

include 'inc/frontpage.php';
include 'inc/global-customizer.php';
include 'inc/basic-template-customizer.php';
include 'inc/woocommerce-customizer.php';

		
	}
add_action( 'customize_register', 'smg_register_theme_customizer' );
endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function smg_customize_preview_js() {
	wp_enqueue_script( 'smg_customizer', get_template_directory_uri() . '/library/js/customizer.js', array(), '20180627', true );
}
add_action( 'customize_preview_init', 'smg_customize_preview_js' );
