<?php
/**
 *
 * Pagination Functions
 *
 * @package Omega Online Store
 */

if( !function_exists('omega_online_store_archive_pagination_x') ):

	// Archive Page Navigation
	function omega_online_store_archive_pagination_x(){

		the_posts_pagination();
	}

endif;
add_action('omega_online_store_archive_pagination','omega_online_store_archive_pagination_x',20);