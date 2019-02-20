<?php
/**
 * Custom CSS For Basic Template Customizer
 * Make sure to enqueue add_inline_style 'load_basic_css' in functions.php
 * Otherwise your styles won't load in the preview window.
 */

function load_frontpage_css() {
	$css_frontpage = '';
	
	$smg_fp_bg_color	       = get_theme_mod ('smg_fp_bg_color');
  $smg_fp_color            = get_theme_mod ('smg_fp_color');
	
	if (is_front_page()) {
  
		$css_frontpage .= ' 
		
		#front-page-bg {
      background-color: ' . $smg_fp_bg_color . ';
    }
    
    #front-page-details h1, 
    #front-page-details h4,
    #front-page-details .fp-mh-text,
    #front-page-details h3,
    #front-page-details h2,
    #front-page-details .fp-mh-tel a,
    .fp-1 section.intro,
    #frontpage-products .product-cont .products-widget h2,
    #shop-pipes-here.shop-here h3,
    #shop-pipes-here.shop-here .fas.fa-cart-arrow-down,
    #shop-cont p {
      color: ' . $smg_fp_color . ';
    }
    
		';
	return $css_frontpage;
	}
  
}