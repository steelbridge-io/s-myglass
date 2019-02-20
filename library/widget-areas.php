<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
	function foundationpress_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'						=> 'smoke-my-glass-products',
				'name'					=> __( 'Smoke My Glass Products', 'foundationpress' ),
				'description'		=> __('Drag widgets to the section to display products, content on the front page', 'foundationpress' ),
				'before_widget'	=> '<div class="grid-x grid-padding-x small-up-1 medium-up-3 align-center">',
				'after_widget'	=> '</div>',
				'before_title'	=> '<div class="products-widget text-center mt-2618 mb-2618"><h2>',
				'after_title'		=> '</h2></div>',

			)
		);
	}

	add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
