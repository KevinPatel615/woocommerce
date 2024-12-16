<?php
/**
 * Default Values.
 *
 * @package Omega Online Store
 */

if ( ! function_exists( 'omega_online_store_get_default_theme_options' ) ) :
	function omega_online_store_get_default_theme_options() {

		$omega_online_store_defaults = array();
		
		// Options.
        $omega_online_store_defaults['logo_width_range']                                  = 300;
		$omega_online_store_defaults['global_sidebar_layout']					            = 'right-sidebar';
        $omega_online_store_defaults['omega_online_store_header_layout_email_address']      = esc_html__( 'support@example.com', 'omega-online-store' );
        $omega_online_store_defaults['omega_online_store_header_layout_20_per_discount_text']      = esc_html__( 'Free International Shipping On Order Over $60', 'omega-online-store' );
        $omega_online_store_defaults['omega_online_store_header_layout_enable_translator']          = 0;
        $omega_online_store_defaults['omega_online_store_product_enable_wishlist']          = 0;
        
        $omega_online_store_defaults['omega_online_store_pagination_layout']         = 'numeric';
		$omega_online_store_defaults['footer_column_layout'] 						 = 2;
		$omega_online_store_defaults['footer_copyright_text'] 				         = esc_html__( 'All rights reserved.', 'omega-online-store' );
        $omega_online_store_defaults['twp_navigation_type']              			 = 'theme-normal-navigation';
        $omega_online_store_defaults['omega_online_store_post_author']                		= 1;
        $omega_online_store_defaults['omega_online_store_post_date']                		= 1;
        $omega_online_store_defaults['omega_online_store_post_category']                	= 1;
        $omega_online_store_defaults['omega_online_store_post_tags']                		= 1;
        $omega_online_store_defaults['omega_online_store_floating_next_previous_nav']       = 1;
        $omega_online_store_defaults['omega_online_store_header_banner']               		= 0;
        $omega_online_store_defaults['omega_online_store_category_section']               	= 0;
        $omega_online_store_defaults['omega_online_store_courses_category_section']         = 0;
        $omega_online_store_defaults['omega_online_store_sticky']                 = 0;
        $omega_online_store_defaults['omega_online_store_background_color']               	= '#fff';
        $omega_online_store_defaults['omega_online_store_product_section_title']           = esc_html__( 'Best Sellers', 'omega-online-store' );
        $omega_online_store_defaults['omega_online_store_product_section_button_title']           = esc_html__( 'View All Products', 'omega-online-store' );
        $omega_online_store_defaults['omega_online_store_product_section_button_url']           = esc_html__( '#', 'omega-online-store' );

		// Pass through filter.
		$omega_online_store_defaults = apply_filters( 'omega_online_store_filter_default_theme_options', $omega_online_store_defaults );

		return $omega_online_store_defaults;
	}
endif;
