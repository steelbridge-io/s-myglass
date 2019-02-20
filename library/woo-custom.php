<?php
add_filter( 'woocommerce_pagination_args', 	'rocket_woo_pagination' );
function rocket_woo_pagination( $args ) {
	$args['prev_text'] = '<i class="fa fa-angle-left"></i>';
	$args['next_text'] = '<i class="fa fa-angle-right"></i>';
	return $args;
}