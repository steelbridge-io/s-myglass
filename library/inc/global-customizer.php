<?php

// Global settings section
  $wp_customize->add_section(
    'smg_global_settings', array(
      'title'    => __( 'Global Settings', 'foundationpress' ),
      'panel'    => 'smg_theme_settings',
      'priority' => 1000,
    )
  );

// Nav bar color
	$wp_customize -> add_setting ( 'global_nav_color', array(
		'default'						=> '#2c3840',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'global_nav_color', array(
			'label'							=> __('Navigation Bar Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_global_settings',
      'settings'           => 'global_nav_color',
			'description'				=> __('Updates navigation bar color.')
			)
		)
	);
  
  // Nav active color
	$wp_customize -> add_setting ( 'global_active_nav_color', array(
		'default'						=> '#42525D',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'global_active_nav_color', array(
			'label'							=> __('Navigation Active Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_global_settings',
      'settings'           => 'global_active_nav_color',
			'description'				=> __('Updates navigation active color.')
			)
		)
	);
  
  // Nav text color
	$wp_customize -> add_setting ( 'global_nav_text_color', array(
		'default'						=> '#e6e6e6',
		'type'							=> 'theme_mod',
		'sanitize_callback'	=> 'sanitize_hex_color',
		'transport'					=> 'postMessage'
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Color_Control(
			$wp_customize,
			'global_nav_text_color', array(
			'label'							=> __('Navigation Bar Text Color', 'foundationpress' ),
			'priority'					=>  30,
			'section'						=> 'smg_global_settings',
      'settings'           => 'global_nav_text_color',
			'description'				=> __('Updates navigation bar text color.')
			)
		)
	);
  
  // Font size for menu
	$wp_customize -> add_setting ( 'global_nav_font_size', array(
		'default'							=> '.08rem',
		'type'								=> 'theme_mod',
		'sanitize_callback'		=> 'sanitize_text_field',
		'transport'						=> 'postMessage',
	));
	
	// Add control
	$wp_customize -> add_control (
		new WP_Customize_Control (
			$wp_customize,
			'global_nav_font_size', array (
			'label'		    => __( 'Nav Text Size', 'foundationpress' ),
      'description' => __('Adjust font size by adding a number followed by <em>rem</em>, ex: 1rem'),
			'priority'    =>  30,
			'section'	    => 'smg_global_settings',
			'settings'    => 'global_nav_font_size',
			'type'		    => 'text',
			)
		)
	);
  
   // Footer background color
    $wp_customize -> add_setting ( 'smg_footer_bg_color', array(
      'default'						=> '#f5f5f5',
      'type'							=> 'theme_mod',
      'sanitize_callback'	=> 'sanitize_hex_color',
      'transport'					=> 'postMessage'
    ));

    // Add control
    $wp_customize -> add_control (
      new WP_Customize_Color_Control(
        $wp_customize,
        'smg_footer_bg_color', array(
        'label'							=> __('Footer Background Color', 'foundationpress' ),
        'priority'					=>  30,
        'section'						=> 'smg_global_settings',
        'settings'          => 'smg_footer_bg_color',
        'description'				=> __('Updates background color of footer area.')
        )
      )
    ); 

   // Footer background color
  $wp_customize -> add_setting ( 'smg_footer_color', array(
    'default'						=> '#000',
    'type'							=> 'theme_mod',
    'sanitize_callback'	=> 'sanitize_hex_color',
    'transport'					=> 'postMessage'
  ));

  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Color_Control(
      $wp_customize,
      'smg_footer_color', array(
      'label'							=> __('Footer Text Color', 'foundationpress' ),
      'priority'					=>  30,
      'section'						=> 'smg_global_settings',
      'settings'          => 'smg_footer_color',
      'description'				=> __('Updates color of footer text.')
      )
    )
  ); 
  
  // Global link color
  $wp_customize -> add_setting ( 'smg_link_color', array(
    'default'						=> '#1779ba',
    'type'							=> 'theme_mod',
    'sanitize_callback'	=> 'sanitize_hex_color',
    'transport'					=> 'postMessage'
  ));

  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Color_Control(
      $wp_customize,
      'smg_link_color', array(
      'label'							=> __('Site Wide Link Color', 'foundationpress' ),
      'priority'					=>  30,
      'section'						=> 'smg_global_settings',
      'settings'          => 'smg_link_color',
      'description'				=> __('Updates color of links.')
      )
    )
  ); 
  
  // Footer link color
  $wp_customize -> add_setting ( 'smg_footer_link_color', array(
    'default'						=> '#1779ba',
    'type'							=> 'theme_mod',
    'sanitize_callback'	=> 'sanitize_hex_color',
    'transport'					=> 'postMessage'
  ));

  // Add control
  $wp_customize -> add_control (
    new WP_Customize_Color_Control(
      $wp_customize,
      'smg_footer_link_color', array(
      'label'							=> __('Footer Link Color', 'foundationpress' ),
      'priority'					=>  30,
      'section'						=> 'smg_global_settings',
      'settings'          => 'smg_footer_link_color',
      'description'				=> __('Updates footer link color.')
      )
    )
  ); 
  

