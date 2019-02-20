jQuery(document).ready( function($){ 'use strict';

//Navigation color
wp.customize( 'global_nav_color', function( value ) {
	value.bind( function( newval ) {
		$( '.top-bar, .top-bar ul, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .button.product_type_variable.add_to_cart_button, .woocommerce input.button.alt, .button.product_type_simple.add_to_cart_button.ajax_add_to_cart, .gform_button.button, .woocommerce nav.woocommerce-pagination ul li span.current' ).css('background-color, #orbit-button.button.orbit-btn, .woocommerce #respond input#submit').css( 'background-color', newval );
	} );
} );
// Navigation active color
wp.customize( 'global_active_nav_color', function( value ) {
	value.bind( function( newval ) {
		$( '.dropdown.menu .is-active > a, .top-bar .meu a:hover:not(.button)' ).css('background-color', newval );
	} );
} );
//Navigation text color
wp.customize( 'global_nav_text_color', function( value ) {
	value.bind( function( newval ) {
		$( '.dropdown.menu .is-active > a, .top-bar .menu a, .site-desktop-title.top-bar-title a ' ).css('color', newval );
	} );
} );
wp.customize( 'global_nav_font_size', function( value ) {
	value.bind( function( newval ) {
		$( '.top-bar .menu a' ).css('font-size', newval );
	} );
} );
// Front Page BG Color
wp.customize( 'smg_fp_bg_color', function( value ) {
	value.bind( function( newval ) {
		$( '#front-page-bg' ).css( 'background-color', newval );
	} );
} );
// Front Page BG Color
wp.customize( 'smg_fp_color', function( value ) {
	value.bind( function( newval ) {
		$( '#front-page-details h1, #front-page-details h4, #front-page-details .fp-mh-text, #front-page-details h3, #front-page-details h2, #front-page-details .fp-mh-tel a, .fp-1 section.intro, #frontpage-products .product-cont .products-widget h2, #shop-pipes-here.shop-here h3, #shop-pipes-here.shop-here .fas.fa-cart-arrow-down, #shop-cont p' ).css( 'color', newval );
	} );
} );
//Masthead title
wp.customize( 'smg_fp_mh_title', function( value ) {
	value.bind( function( newval ) {
		$( 'h2.fp-mh-title' ).html( newval );
	} );
} );
//Masthead text
wp.customize( 'smg_fp_mh_textarea', function( value ) {
	value.bind( function( newval ) {
		$( 'h4.fp-mh-text' ).html( newval );
	} );
} );
//Masthead tel
wp.customize( 'smg_fp_mh_tel', function( value ) {
	value.bind( function( newval ) {
		$( 'h4.fp-mh-tel' ).html( newval );
	} );
} );
//Social link one
wp.customize( 'smg_soc_one', function( value ) {
	value.bind( function( newval ) {
		$( 'a.soc-one' ).url( newval );
	} );
} );
//Social link two
wp.customize( 'smg_soc_two', function( value ) {
	value.bind( function( newval ) {
		$( 'a.soc-two' ).url( newval );
	} );
} );
//Social link three
wp.customize( 'smg_soc_three', function( value ) {
	value.bind( function( newval ) {
		$( 'a.soc-three' ).url( newval );
	} );
} );
// Footer BG color
wp.customize( 'smg_footer_bg_color', function( value ){
  value.bind( function( newval ){
    $( '.footer' ).css( 'background-color', newval );
  });
});

// Footer BG color
wp.customize( 'smg_footer_color', function( value ){
  value.bind( function( newval ){
    $( '#page-footer h6, #page-footer h4, #page-footer address, #page-footer p, #page-footer' ).css( 'color', newval );
  });
});

// Sitewide link color
wp.customize( 'smg_link_color', function( value ){
  value.bind( function( newval ){
    $( '#site-wide-id a, .woocommerce button.button.alt, #searchsubmit, #submit, .gform_button.button, .woocommerce nav.woocommerce-pagination ul li span.current, #orbit-button.button.orbit-btn, .woocommerce #respond input#submit:hover, .woocommerce #respond input#submit' ).css( 'color', newval );
  });
});

// Footer link color
wp.customize( 'smg_footer_link_color', function( value ){
  value.bind( function( newval ){
    $( '#page-footer a' ).css( 'color', newval );
  });
});

// Basic template settings ******************

// Basic template background color
wp.customize( 'basic_temp_bg_color', function( value ){
  value.bind( function( newval ){
    $( 'body.page-template' ).css( 'background-color', newval );
  });
});

// Basic template main container
wp.customize( 'basic_temp_main_cont_bg_color', function( value ){
  value.bind( function( newval ){
    $( '#basic-template.main-container' ).css( 'background-color', newval );
  });
});

// Basic template sidebar background color
wp.customize( 'basic_temp_sidebar_bg_color', function( value ){
  value.bind( function( newval ){
    $( '#basic-sidebar.sidebar' ).css( 'background-color', newval );
  });
});

// Basic template sidebar background color
wp.customize( 'basic_temp_font_color', function( value ){
  value.bind( function( newval ){
    $( '#basic-template .main-grid .main-content' ).css( 'color', newval );
  });
});

// Basic template sidebar background color
wp.customize( 'basic_temp_sbfont_color', function( value ){
  value.bind( function( newval ){
    $( '#basic-sidebar.sidebar' ).css( 'color', newval );
  });
});




// Woocomemerce Custom Settings *********************************************



// Shop background color
wp.customize( 'wc_page_bg', function( value ){
  value.bind( function( newval ){
    $( 'body.woocommerce.woocommerce-page' ).css( 'background-color', newval );
  });
});

// Shop container background color
wp.customize( 'wc_cont_bg', function( value ){
  value.bind( function( newval ){
    $( '#woocommerce.main-container' ).css( 'background-color', newval );
  });
});

// Shop sidebar background color
wp.customize( 'wc_side_bg', function( value ){
  value.bind( function( newval ){
    $( '#woo-sidebar.sidebar' ).css( 'background-color', newval );
  });
});

// Shop font color
wp.customize( 'wc_font_color', function( value ){
  value.bind( function( newval ){
    $( '#woocommerce.main-container' ).css( 'color', newval );
  });
});

// Shop sidebar font color
wp.customize( 'wc_fontsb_color', function( value ){
  value.bind( function( newval ){
    $( '#woo-sidebar.sidebar' ).css( 'color', newval );
  });
});

});