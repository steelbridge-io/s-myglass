<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_theme_support' ) ) :
	function foundationpress_theme_support() {
		// Add language support
		load_theme_textdomain( 'foundationpress', get_template_directory() . '/languages' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		
		// Add Woocommerce support
	 	add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 150,
			'single_image_width'		=> 300,
			
			'product_grid'					=> array(
				'default_rows'				=> 3,
				'min_rows'						=> 2,
				'max_rows'						=> 8,
				'default_columns'			=> 4,
				'min_columns'					=> 2,
				'max_columns'					=> 5,
				)
			)
		);
		
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' ); 

		// Add menu support
		add_theme_support( 'menus' );

		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
		add_theme_support( 'post-thumbnails' );

		// RSS thingy
		add_theme_support( 'automatic-feed-links' );

		// Add post formats support: http://codex.wordpress.org/Post_Formats
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

		// Additional theme support for woocommerce 3.0.+
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Add foundation.css as editor style https://codex.wordpress.org/Editor_Style
		add_editor_style( 'dist/assets/css/' . foundationpress_asset_path( 'app.css' ) );
	}

	add_action( 'after_setup_theme', 'foundationpress_theme_support' );
endif;

function smokemyglass_gutenberg_support() {
    
    add_editor_style( 'editor-style.css' );
    
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support('editor-styles');
    add_theme_support( 'dark-editor-style' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => __( 'light grayish magenta', 'themeLangDomain' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => __( 'very light gray', 'themeLangDomain' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => __( 'very dark gray', 'themeLangDomain' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
  
    add_theme_support( 'editor-font-sizes', array(
    array(
        'name' => __( 'Small', 'themeLangDomain' ),
        'size' => 12,
        'slug' => 'small'
    ),
    array(
        'name' => __( 'Normal', 'themeLangDomain' ),
        'size' => 16,
        'slug' => 'normal'
    ),
    array(
        'name' => __( 'Large', 'themeLangDomain' ),
        'size' => 36,
        'slug' => 'large'
    ),
    array(
        'name' => __( 'Huge', 'themeLangDomain' ),
        'size' => 50,
        'slug' => 'huge'
    )
) );
}

add_action( 'after_setup_theme', 'smokemyglass_gutenberg_support' );
