<?php

$omega_online_store_custom_css = "";

        $theme_pagination_options_alignment = get_theme_mod('theme_pagination_options_alignment', 'Center');
		if ($theme_pagination_options_alignment == 'Center') {
		    $omega_online_store_custom_css .= '.pagination{';
		    $omega_online_store_custom_css .= 'text-align: center;';
		    $omega_online_store_custom_css .= '}';
		} else if ($theme_pagination_options_alignment == 'Right') {
		    $omega_online_store_custom_css .= '.pagination{';
		    $omega_online_store_custom_css .= 'text-align: Right;';
		    $omega_online_store_custom_css .= '}';
		} else if ($theme_pagination_options_alignment == 'Left') {
		    $omega_online_store_custom_css .= '.pagination{';
		    $omega_online_store_custom_css .= 'text-align: Left;';
		    $omega_online_store_custom_css .= '}';
		}

		 $theme_breadcrumb_options_alignment = get_theme_mod('theme_breadcrumb_options_alignment', 'Center');
		if ($theme_breadcrumb_options_alignment == 'Center') {
		    $omega_online_store_custom_css .= '.breadcrumbs ul{';
		    $omega_online_store_custom_css .= 'text-align: center !important;';
		    $omega_online_store_custom_css .= '}';
		} else if ($theme_breadcrumb_options_alignment == 'Right') {
		    $omega_online_store_custom_css .= '.breadcrumbs ul{';
		    $omega_online_store_custom_css .= 'text-align: Right !important;';
		    $omega_online_store_custom_css .= '}';
		} else if ($theme_breadcrumb_options_alignment == 'Left') {
		    $omega_online_store_custom_css .= '.breadcrumbs ul{';
		    $omega_online_store_custom_css .= 'text-align: Left !important;';
		    $omega_online_store_custom_css .= '}';
		}