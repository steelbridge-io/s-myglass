<?php

// Default template customizer

// Global settings section
  $wp_customize->add_section(
    'smg_basic_template_settings', array(
      'title'    => __( 'Basic Template Settings', 'foundationpress' ),
      'panel'    => 'smg_theme_settings',
      'priority' => 1000,
      'active_callback'		=> function() { return is_page_template('page-templates/basic.php'); }
    )
  );
  
  // Basic template background color
	$wp_customize -> add_setting ( 'basic_temp_bg_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'basic_temp_bg_color', array(
			'label'							=> __('Background color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_basic_template_settings',
      'settings'           => 'basic_temp_bg_color',
			'description'				=> __('Updates the entire background color.')
			)
		)
	);
  
  // Basic template main container background color
	$wp_customize -> add_setting ( 'basic_temp_main_cont_bg_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'basic_temp_main_cont_bg_color', array(
			'label'							=> __('Main container background color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_basic_template_settings',
      'settings'           => 'basic_temp_main_cont_bg_color',
			'description'				=> __('Updates the entire background color.')
			)
		)
	);
  
  // Basic template sidebar background color
	$wp_customize -> add_setting ( 'basic_temp_sidebar_bg_color', array(
		'default'						=> '#f5f5f5',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'basic_temp_sidebar_bg_color', array(
			'label'							=> __('Sidebar background color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_basic_template_settings',
      'settings'           => 'basic_temp_sidebar_bg_color',
			'description'				=> __('Updates sidebar background color.')
			)
		)
	);
  
  // Basic template font color
	$wp_customize -> add_setting ( 'basic_temp_font_color', array(
		'default'						=> '#000',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'basic_temp_font_color', array(
			'label'							=> __('Font Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_basic_template_settings',
      'settings'           => 'basic_temp_font_color',
			'description'				=> __('Updates font color.')
			)
		)
	);
  
  // Basic template sidebar font color
	$wp_customize -> add_setting ( 'basic_temp_sbfont_color', array(
		'default'						=> '#000',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'basic_temp_sbfont_color', array(
			'label'							=> __('Side Bar Font Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_basic_template_settings',
      'settings'           => 'basic_temp_sbfont_color',
			'description'				=> __('Updates font color for sidebar.')
			)
		)
	);