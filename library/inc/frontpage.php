<?php
/**
 * Allow users to customize theme front page via customizer.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
		
		// Create custom panel
		$wp_customize->add_panel(
			'smg_theme_settings', array(
				'priority'       => 1000,
				'theme_supports' => '',
				'title'          => __( 'Home Page Settings &amp; Colors', 'foundationpress' ),
				'description'    => __( 'Front Page Settings', 'foundationpress' ),
        'active_callback'=> function() {return is_page_template('page-templates/front.php');}
			)
		);
		
		// Create custom fields for front page
		$wp_customize->add_section(
			'smg_frontpage_layout', array(
				'title'    => __( 'Front Page Style', 'foundationpress' ),
				'panel'    => 'smg_theme_settings',
				'priority' => 1000,
			)
		);
    
    // Front page background color
    $wp_customize -> add_setting ( 'smg_fp_bg_color', array(
      'default'						=> '#f5f5f5',
      'type'							=> 'theme_mod',
      'sanitize_callback'	=> 'sanitize_hex_color',
      'transport'					=> 'postMessage'
    ));

    // Add control
    $wp_customize -> add_control (
      new WP_Customize_Color_Control(
        $wp_customize,
        'smg_fp_bg_color', array(
        'label'							=> __('Front Page Background Color', 'foundationpress' ),
        'priority'					=>  10,
        'section'						=> 'smg_frontpage_layout',
        'settings'          => 'smg_fp_bg_color',
        'decription'				=> __('Updates background color for front page content area.')
        )
      )
    );
    
    // Front page text color
    $wp_customize -> add_setting ( 'smg_fp_color', array(
      'default'						=> '#000',
      'type'							=> 'theme_mod',
      'sanitize_callback'	=> 'sanitize_hex_color',
      'transport'					=> 'postMessage'
    ));

    // Add control
    $wp_customize -> add_control (
      new WP_Customize_Color_Control(
        $wp_customize,
        'smg_fp_color', array(
        'label'							=> __('Front Page Text Color', 'foundationpress' ),
        'priority'					=>  10,
        'section'						=> 'smg_frontpage_layout',
        'settings'          => 'smg_fp_color',
        'decription'				=> __('Updates text color for front page content area.')
        )
      )
    );

		// Creates masthead title on front page
		$wp_customize->add_setting(
			'smg_fp_mh_title', array(
				'default'							=> __( 'Smoke My Glass', 'foundationpress' ),
				'type'								=> 'theme_mod',
				'transport'						=> 'postMessage',
				'sanitize_callback'		=> 'sanitize_text_field',	
			)
		);
		// Control
		$wp_customize->add_control (
			new WP_Customize_Control (
				$wp_customize,
					'smg_fp_title', array (
					'label'			=> __( 'Front Page Masthead Title', 'foundationpress' ),
					'priority'	=> 10,
					'section'		=> 'smg_frontpage_layout',
					'settings'	=> 'smg_fp_mh_title',
					'type'			=> 'text'
				)
			)
		);

		// Creates masthead text area front page
		$wp_customize->add_setting(
			'smg_fp_mh_textarea', array(
				'default'							=> __( '', 'foundationpress' ),
				'type'								=> 'theme_mod',
				'transport'						=> 'postMessage',
			)
		);
		// Control
		$wp_customize->add_control (
			new WP_Customize_Control (
				$wp_customize,
					'smg_fp_textarea', array (
					'label'			=> __( 'Front Page Masthead Text', 'foundationpress' ),
					'priority'	=> 10,
					'section'		=> 'smg_frontpage_layout',
					'settings'	=> 'smg_fp_mh_textarea',
					'type'			=> 'textarea'
				)
			)
		);

	// Creates masthead tel number link front page
		$wp_customize->add_setting(
			'smg_fp_mh_telnum', array(
				'default'							=> __( '', 'foundationpress' ),
				'type'								=> 'theme_mod',
				'transport'						=> 'postMessage',
			)
		);
		// Control
		$wp_customize->add_control (
			new WP_Customize_Control (
				$wp_customize,
					'smg_fp_mh_telnum', array (
					'label'				=> __( 'Front Page Masthead Telephone #', 'foundationpress' ),
					'description'	=> __( 'Type your tel number like this <em>5302221212</em>. No spaces, just area-code and number in a single line. No spaces.', 'foundationpress' ),
					'input_attrs' => array(
            'placeholder' => __( 'EX: 5302221212', 'foundationpress' ),
        		),
					'priority'		=> 10,
					'section'			=> 'smg_frontpage_layout',
					'settings'		=> 'smg_fp_mh_telnum',
					'type'				=> 'text'
				)
			)
		);

		// Creates masthead tel text area front page
		$wp_customize->add_setting(
			'smg_fp_mh_tel', array(
				'default'							=> __( '', 'foundationpress' ),
				'type'								=> 'theme_mod',
				'transport'						=> 'postMessage',
			)
		);
		// Control
		$wp_customize->add_control (
			new WP_Customize_Control (
				$wp_customize,
					'smg_fp_tel', array (
					'label'				=> __( 'Front Page Masthead Telephone #', 'foundationpress' ),
					'description'	=> __( 'Type your telephone number as you wish it to appear. Ex: (530) 222-1212', 'foundationpress'),
					'priority'		=> 10,
					'section'			=> 'smg_frontpage_layout',
					'settings'		=> 'smg_fp_mh_tel',
					'type'				=> 'text'
				)
			)
		);

	// Create custom footer section
		$wp_customize->add_section(
			'smg_footer_layout', array(
				'title'    => __( 'Footer Settings', 'foundationpress' ),
				'panel'    => 'smg_theme_settings',
				'priority' => 1000,
			)
		);
// Creates social media link in footer
		$wp_customize->add_setting(
			'smg_soc_one', array(
				'default'							=> __( '', 'foundationpress' ),
				'type'								=> 'theme_mod',
				'transport'						=> 'postMessage',
			)
		);
		// Control
		$wp_customize->add_control (
			new WP_Customize_Control (
				$wp_customize,
					'smg_soc_one', array (
					'label'				=> __( 'Footer Facebook Link', 'foundationpress' ),
					'description'	=> __( '', 'foundationpress'),
					'priority'		=> 10,
					'section'			=> 'smg_footer_layout',
					'settings'		=> 'smg_soc_one',
					'type'				=> 'url'
				)
			)
		);

// Creates social media link in footer
		$wp_customize->add_setting(
			'smg_soc_two', array(
				'default'							=> __( '', 'foundationpress' ),
				'type'								=> 'theme_mod',
				'transport'						=> 'postMessage',
			)
		);
		// Control
		$wp_customize->add_control (
			new WP_Customize_Control (
				$wp_customize,
					'smg_soc_two', array (
					'label'				=> __( 'Footer Twitter Link ', 'foundationpress' ),
					'description'	=> __( '', 'foundationpress'),
					'priority'		=> 10,
					'section'			=> 'smg_footer_layout',
					'settings'		=> 'smg_soc_two',
					'type'				=> 'url'
				)
			)
		);

// Creates social media link in footer
		$wp_customize->add_setting(
			'smg_soc_three', array(
				'default'							=> __( '', 'foundationpress' ),
				'type'								=> 'theme_mod',
				'transport'						=> 'postMessage',
			)
		);
		// Control
		$wp_customize->add_control (
			new WP_Customize_Control (
				$wp_customize,
					'smg_soc_three', array (
					'label'				=> __( 'Footer Instagram Link ', 'foundationpress' ),
					'description'	=> __( '', 'foundationpress'),
					'priority'		=> 10,
					'section'			=> 'smg_footer_layout',
					'settings'		=> 'smg_soc_three',
					'type'				=> 'url'
				)
			)
		);