<?php
/**
 * @package the-fashion-woocommerce
 * @subpackage the-fashion-woocommerce
 * @since the-fashion-woocommerce 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses the_fashion_woocommerce_header_style()
*/

function the_fashion_woocommerce_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'the_fashion_woocommerce_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 150,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'the_fashion_woocommerce_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'the_fashion_woocommerce_custom_header_setup' );

if ( ! function_exists( 'the_fashion_woocommerce_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see the_fashion_woocommerce_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'the_fashion_woocommerce_header_style' );
function the_fashion_woocommerce_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$the_fashion_woocommerce_custom_css = "
        #header, .topbar,.topbar-contact-box{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size:cover;
		}";
	   	wp_add_inline_style( 'the-fashion-woocommerce-basic-style', $the_fashion_woocommerce_custom_css );
	endif;
}
endif;