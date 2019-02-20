<?php
/**
 * Custom CSS For Basic Template Customizer
 * Make sure to enqueue add_inline_style 'load_global_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */

function load_global_css() {
	$css_global = '';
	
	$global_nav_color	        = get_theme_mod ('global_nav_color');
  $global_active_nav_color  = get_theme_mod ('global_active_nav_color');
  $global_nav_text_color    = get_theme_mod ('global_nav_text_color');
  $global_nav_font_size     = get_theme_mod ('global_nav_font_size');
  $smg_footer_bg_color      = get_theme_mod ('smg_footer_bg_color');
  $smg_footer_color         = get_theme_mod ('smg_footer_color');
  $smg_link_color           = get_theme_mod ('smg_link_color');
  $smg_footer_link_color    = get_theme_mod ('smg_footer_link_color');
	
	//if (is_page_template('page-templates/basic-page-template.php')) {
  
		$css_global .= ' 
		
		.top-bar, 
    .top-bar ul,
    .woocommerce #respond input#submit.alt, 
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt,
    .button.product_type_variable.add_to_cart_button,
    .button.product_type_simple.add_to_cart_button.ajax_add_to_cart,
    #searchsubmit,
    .gform_button.button,
    a.button.product_type_grouped,
    .woocommerce nav.woocommerce-pagination ul li span.current,
    #orbit-button.button.orbit-btn,
    .woocommerce #respond input#submit {
				background-color: ' . $global_nav_color . ';
		} 
    .dropdown.menu .is-active > a,
    .top-bar .menu a,
    .site-desktop-title.top-bar-title a {
      color: ' . $global_nav_text_color . ';
    }
    .dropdown.menu .is-active > a,
    .top-bar .meu a:hover:not(.button) {
      background-color: ' . $global_active_nav_color . ';
    }
    .top-bar .menu a { 
      font-size:' . $global_nav_font_size . ';
    }
    .footer {
      background-color: ' . $smg_footer_bg_color . '; 
    }
    #page-footer h6, 
    #page-footer h4, 
    #page-footer address, 
    #page-footer p, 
    #page-footer {
      color: ' . $smg_footer_color . ';
    }
     
    .woocommerce button.button.alt,
    #searchsubmit, 
    #submit,
    .gform_button.button,
    button product_type_grouped ,
    .woocommerce nav.woocommerce-pagination ul li span.current,
    #orbit-button.button.orbit-btn,
    .woocommerce #respond input#submit,
    .woocommerce #respond input#submit:hover {
      color: ' . $smg_link_color . ';
    }
    
    #page-footer a {
      color: ' . $smg_footer_link_color . ';
    }
    
		';
	return $css_global;
	}
  
// }