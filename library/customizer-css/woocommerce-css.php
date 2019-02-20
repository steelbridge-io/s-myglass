<?php
/**
 * Custom CSS For Woocommerce
 * Make sure to enqueue add_inline_style 'load_woocommerce_css' in enqueue-scripts.php
 * Otherwise your styles won't load in the preview window.
 */
 
 function load_woocommerce_css() {
  $css_woocommerce = '';
  
  $wc_page_bg       = get_theme_mod ('wc_page_bg');
  $wc_cont_bg       = get_theme_mod ('wc_cont_bg');
  $wc_side_bg       = get_theme_mod ('wc_side_bg');
  $wc_font_color    = get_theme_mod ('wc_font_color');
  $wc_fontsb_color  = get_theme_mod ('wc_fontsb_color');
  
  if (is_shop() || is_product() || is_product_category()) {
  
    $css_woocommerce .='
    
      body.woocommerce.woocommerce-page,
      body.archive.tax-product_cat {
        background-color: ' . $wc_page_bg . ';
      }
      
      #woocommerce.main-container {
        background-color: ' . $wc_cont_bg . ';
      }
      
      #woo-sidebar.sidebar {
        background-color: ' . $wc_side_bg . ';
      }
      
      #woocommerce.main-container {
        color: ' . $wc_font_color . ';
      }
      
      #woo-sidebar.sidebar {
        color: ' . $wc_fontsb_color . ';
      }
      
    ';
    return $css_woocommerce;
  }
 
 }