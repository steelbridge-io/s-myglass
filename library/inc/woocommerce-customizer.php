<?php
/**
  * Woocommerce custom styles
  */
  
  // Global settings section
  $wp_customize->add_section(
    'woocommerce_settings', array(
      'title'    => __( 'Smoke My Glass Shop Settings', 'foundationpress' ),
      'panel'    => 'smg_theme_settings',
      'priority' => 1000,
      'active_callback'		=> function() { return is_shop() or is_product(); }
    )
  );
  
  // Woocommerce shop page background color
	$wp_customize -> add_setting ( 'wc_page_bg', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'wc_page_bg', array(
			'label'							=> __('Smoke My Glass Shop Background Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'woocommerce_settings',
      'settings'           => 'wc_page_bg',
			'description'				=> __('Updates the entire background color.')
			)
		)
	);
  
  // Woocommerce shop page container background color
	$wp_customize -> add_setting ( 'wc_cont_bg', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'wc_cont_bg', array(
			'label'							=> __('Smoke My Glass Shop Container Background Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'woocommerce_settings',
      'settings'           => 'wc_cont_bg',
			'description'				=> __('Updates the entire background color.')
			)
		)
	);
  
  // Woocommerce shop page sidebar background color
	$wp_customize -> add_setting ( 'wc_side_bg', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'wc_side_bg', array(
			'label'							=> __('Smoke My Glass Shop Sidebar Background Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'woocommerce_settings',
      'settings'           => 'wc_side_bg',
			'description'				=> __('Updates the entire background color.')
			)
		)
	);
  
   // Woocommerce shop page font color
	$wp_customize -> add_setting ( 'wc_font_color', array(
		'default'						=> '#000',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'wc_font_color', array(
			'label'							=> __('Smoke My Glass Shop Font Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'woocommerce_settings',
      'settings'           => 'wc_font_color',
			'description'				=> __('Updates font color.')
			)
		)
	);
  
  // Woocommerce shop page sidebar font color
	$wp_customize -> add_setting ( 'wc_fontsb_color', array(
		'default'						=> '#000',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'wc_fontsb_color', array(
			'label'							=> __('Smoke My Glass Shop Sidebar Font Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'woocommerce_settings',
      'settings'           => 'wc_fontsb_color',
			'description'				=> __('Updates font color.')
			)
		)
	);