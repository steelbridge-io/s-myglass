<?php
/**
 * Custom CSS For Basic Template
 * Make sure to enqueue add_inline_style 'load_basic_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */
 
 function load_basic_template_css() {
  $css_basic = '';
  
  $basic_temp_bg_color            = get_theme_mod ('basic_temp_bg_color');
  $basic_temp_main_cont_bg_color  = get_theme_mod ('basic_temp_main_cont_bg_color');
  $basic_temp_sidebar_bg_color    = get_theme_mod ('basic_temp_sidebar_bg_color');
  $basic_temp_font_color          = get_theme_mod ('basic_temp_font_color');
  $basic_temp_sbfont_color        = get_theme_mod ('basic_temp_sbfont_color');
  
    if (is_page_template('page-templates/basic.php')) {

    $css_basic .= '

      body.page-template {
        background-color: ' . $basic_temp_bg_color . ';
      }
      
      #basic-template.main-container {
        background-color: ' . $basic_temp_main_cont_bg_color . ';
      }
      
      #basic-sidebar.sidebar {
        background-color: ' . $basic_temp_sidebar_bg_color . ';
      }
      
      #basic-template .main-grid .main-content {
        color: ' . $basic_temp_font_color . ';
      }
      
      #basic-sidebar.sidebar {
        color: ' . $basic_temp_sbfont_color . ';
      }


    ';
    return $css_basic;
   }
 }