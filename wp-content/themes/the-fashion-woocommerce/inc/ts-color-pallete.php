<?php

	$the_fashion_woocommerce_custom_css = '';

	/*---------------------------Width Layout -------------------*/
	$the_fashion_woocommerce_theme_lay = get_theme_mod( 'the_fashion_woocommerce_theme_options','Default');
    if($the_fashion_woocommerce_theme_lay == 'Default'){
		$the_fashion_woocommerce_custom_css .='body{';
			$the_fashion_woocommerce_custom_css .='max-width: 100%;';
		$the_fashion_woocommerce_custom_css .='}';
		$the_fashion_woocommerce_custom_css .='.page-template-custom-home-page .middle-header{';
			$the_fashion_woocommerce_custom_css .='width: 97.3%';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_theme_lay == 'Container'){
		$the_fashion_woocommerce_custom_css .='body{';
			$the_fashion_woocommerce_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$the_fashion_woocommerce_custom_css .='}';
		$the_fashion_woocommerce_custom_css .='.page-template-custom-home-page .middle-header{';
			$the_fashion_woocommerce_custom_css .='width: 97.7%';
		$the_fashion_woocommerce_custom_css .='}';
		$the_fashion_woocommerce_custom_css .='.serach_outer{';
			$the_fashion_woocommerce_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_theme_lay == 'Box Container'){
		$the_fashion_woocommerce_custom_css .='body{';
			$the_fashion_woocommerce_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$the_fashion_woocommerce_custom_css .='}';
		$the_fashion_woocommerce_custom_css .='.serach_outer{';
			$the_fashion_woocommerce_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// css
	$the_fashion_woocommerce_show_header = get_theme_mod( 'the_fashion_woocommerce_display_topbar', false);
	if($the_fashion_woocommerce_show_header == false){
		$the_fashion_woocommerce_custom_css .='.main-menu{';
			$the_fashion_woocommerce_custom_css .='margin: 10px 0;';
		$the_fashion_woocommerce_custom_css .='}';
		$the_fashion_woocommerce_custom_css .='.logo{';
			$the_fashion_woocommerce_custom_css .='padding: 10px 0;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_show_slider = get_theme_mod( 'the_fashion_woocommerce_slider_hide', false);
	if($the_fashion_woocommerce_show_slider == false){
		$the_fashion_woocommerce_custom_css .='.page-template-custom-front-page .bottom-header{';
			$the_fashion_woocommerce_custom_css .='position: static;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$the_fashion_woocommerce_theme_lay = get_theme_mod( 'the_fashion_woocommerce_slider_content_alignment','Left');
    if($the_fashion_woocommerce_theme_lay == 'Left'){
		$the_fashion_woocommerce_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$the_fashion_woocommerce_custom_css .='text-align:left; left:15%; right:45%;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_theme_lay == 'Center'){
		$the_fashion_woocommerce_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$the_fashion_woocommerce_custom_css .='text-align:center !important; left:25%; right:25%;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_theme_lay == 'Right'){
		$the_fashion_woocommerce_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$the_fashion_woocommerce_custom_css .='text-align:right !important; left:45%; right:15%;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	//slider button bg color
	$the_fashion_woocommerce_slider_btn_bg_color = get_theme_mod('the_fashion_woocommerce_slider_btn_bg_color');
	$the_fashion_woocommerce_custom_css .='#slider .inner_carousel .readbtn a{';
		$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_slider_btn_bg_color).';';
	$the_fashion_woocommerce_custom_css .='}';

	//slider button bg color
	$the_fashion_woocommerce_slider_btn_bg_color1 = get_theme_mod('the_fashion_woocommerce_slider_btn_bg_color1');
	$the_fashion_woocommerce_custom_css .='#slider .inner_carousel .readbtn1 a{';
		$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_slider_btn_bg_color1).';';
	$the_fashion_woocommerce_custom_css .='}';

	/*--------------------------- Slider Opacity -------------------*/

	$the_fashion_woocommerce_theme_lay = get_theme_mod( 'the_fashion_woocommerce_slider_image_opacity',0.6);
	if($the_fashion_woocommerce_theme_lay == '0'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.1'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.1';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.2'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.2';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.3'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.3';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.4'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.4';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.5'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.5';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.6'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.6';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.7'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.7';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.8'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.8';
		$the_fashion_woocommerce_custom_css .='}';
		}else if($the_fashion_woocommerce_theme_lay == '0.9'){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:0.9';
		$the_fashion_woocommerce_custom_css .='}';
		}

	/*------------------------------ Button Settings option-----------------------*/
	$the_fashion_woocommerce_button_padding_top_bottom = get_theme_mod('the_fashion_woocommerce_button_padding_top_bottom');
	$the_fashion_woocommerce_button_padding_left_right = get_theme_mod('the_fashion_woocommerce_button_padding_left_right');
	$the_fashion_woocommerce_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"]{';
		$the_fashion_woocommerce_custom_css .='padding-top: '.esc_attr($the_fashion_woocommerce_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($the_fashion_woocommerce_button_padding_top_bottom).'px; padding-left: '.esc_attr($the_fashion_woocommerce_button_padding_left_right).'px; padding-right: '.esc_attr($the_fashion_woocommerce_button_padding_left_right).'px; display:inline-block;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_button_border_radius = get_theme_mod('the_fashion_woocommerce_button_border_radius');
	$the_fashion_woocommerce_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"]{';
		$the_fashion_woocommerce_custom_css .='border-radius: '.esc_attr($the_fashion_woocommerce_button_border_radius).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/

	$the_fashion_woocommerce_slider = get_theme_mod( 'the_fashion_woocommerce_responsive_slider',true);
	if($the_fashion_woocommerce_slider == true && get_theme_mod( 'the_fashion_woocommerce_slider_hide', false) == false){
    	$the_fashion_woocommerce_custom_css .='#slider{';
			$the_fashion_woocommerce_custom_css .='display:none;';
		$the_fashion_woocommerce_custom_css .='} ';
	}
    if($the_fashion_woocommerce_slider == true){
    	$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#slider{';
			$the_fashion_woocommerce_custom_css .='display:block;';
		$the_fashion_woocommerce_custom_css .='} }';
	}else if($the_fashion_woocommerce_slider == false){
		$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#slider{';
			$the_fashion_woocommerce_custom_css .='display:none;';
		$the_fashion_woocommerce_custom_css .='} }';
	}

	$the_fashion_woocommerce_slider = get_theme_mod( 'the_fashion_woocommerce_responsive_scroll',true);
	if($the_fashion_woocommerce_slider == true && get_theme_mod( 'the_fashion_woocommerce_enable_disable_scroll', true) == false){
    	$the_fashion_woocommerce_custom_css .='#scroll-top{';
			$the_fashion_woocommerce_custom_css .='display:none;';
		$the_fashion_woocommerce_custom_css .='} ';
	}
    if($the_fashion_woocommerce_slider == true){
    	$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#scroll-top{';
			$the_fashion_woocommerce_custom_css .='visibility: visible !important;';
		$the_fashion_woocommerce_custom_css .='} }';
	}else if($the_fashion_woocommerce_slider == false){
		$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#scroll-top{';
			$the_fashion_woocommerce_custom_css .='visibility: hidden !important;';
		$the_fashion_woocommerce_custom_css .='} }';
	}

	$the_fashion_woocommerce_sidebar = get_theme_mod( 'the_fashion_woocommerce_responsive_sidebar',true);
    if($the_fashion_woocommerce_sidebar == true){
    	$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#sidebar{';
			$the_fashion_woocommerce_custom_css .='display:block;';
		$the_fashion_woocommerce_custom_css .='} }';
	}else if($the_fashion_woocommerce_sidebar == false){
		$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#sidebar{';
			$the_fashion_woocommerce_custom_css .='display:none;';
		$the_fashion_woocommerce_custom_css .='} }';
	}

	$the_fashion_woocommerce_loader = get_theme_mod( 'the_fashion_woocommerce_responsive_preloader', true);
	if($the_fashion_woocommerce_loader == true && get_theme_mod( 'the_fashion_woocommerce_preloader_option', true) == false){
    	$the_fashion_woocommerce_custom_css .='#loader-wrapper{';
			$the_fashion_woocommerce_custom_css .='display:none;';
		$the_fashion_woocommerce_custom_css .='} ';
	}
    if($the_fashion_woocommerce_loader == true){
    	$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#loader-wrapper{';
			$the_fashion_woocommerce_custom_css .='display:block;';
		$the_fashion_woocommerce_custom_css .='} }';
	}else if($the_fashion_woocommerce_loader == false){
		$the_fashion_woocommerce_custom_css .='@media screen and (max-width:575px) {';
		$the_fashion_woocommerce_custom_css .='#loader-wrapper{';
			$the_fashion_woocommerce_custom_css .='display:none;';
		$the_fashion_woocommerce_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$the_fashion_woocommerce_theme_lay = get_theme_mod( 'the_fashion_woocommerce_background_skin_mode','Transpert Background');
    if($the_fashion_woocommerce_theme_lay == 'With Background'){
		$the_fashion_woocommerce_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.post-sec,.front-page-content,.background-img-skin, .noresult-content{';
			$the_fashion_woocommerce_custom_css .='background-color: #fff; padding:10px;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_theme_lay == 'Transpert Background'){
		$the_fashion_woocommerce_custom_css .='.page-box-single{';
			$the_fashion_woocommerce_custom_css .='background-color: transparent;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$the_fashion_woocommerce_top_bottom_product_button_padding = get_theme_mod('the_fashion_woocommerce_top_bottom_product_button_padding', 10);
	$the_fashion_woocommerce_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$the_fashion_woocommerce_custom_css .='padding-top: '.esc_attr($the_fashion_woocommerce_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($the_fashion_woocommerce_top_bottom_product_button_padding).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_left_right_product_button_padding = get_theme_mod('the_fashion_woocommerce_left_right_product_button_padding', 16);
	$the_fashion_woocommerce_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$the_fashion_woocommerce_custom_css .='padding-left: '.esc_attr($the_fashion_woocommerce_left_right_product_button_padding).'px; padding-right: '.esc_attr($the_fashion_woocommerce_left_right_product_button_padding).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_product_button_border_radius = get_theme_mod('the_fashion_woocommerce_product_button_border_radius', 3);
	$the_fashion_woocommerce_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$the_fashion_woocommerce_custom_css .='border-radius: '.esc_attr($the_fashion_woocommerce_product_button_border_radius).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_show_related_products = get_theme_mod('the_fashion_woocommerce_show_related_products',true);
	if($the_fashion_woocommerce_show_related_products == false){
		$the_fashion_woocommerce_custom_css .='.related.products{';
			$the_fashion_woocommerce_custom_css .='display: none;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_show_wooproducts_border = get_theme_mod('the_fashion_woocommerce_show_wooproducts_border', false);
	if($the_fashion_woocommerce_show_wooproducts_border == true){
		$the_fashion_woocommerce_custom_css .='.products li{';
			$the_fashion_woocommerce_custom_css .='border: 1px solid #d4d2d2;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_top_bottom_wooproducts_padding = get_theme_mod('the_fashion_woocommerce_top_bottom_wooproducts_padding',0);
	$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$the_fashion_woocommerce_custom_css .='padding-top: '.esc_attr($the_fashion_woocommerce_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($the_fashion_woocommerce_top_bottom_wooproducts_padding).'px !important;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_left_right_wooproducts_padding = get_theme_mod('the_fashion_woocommerce_left_right_wooproducts_padding',0);
	$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$the_fashion_woocommerce_custom_css .='padding-left: '.esc_attr($the_fashion_woocommerce_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($the_fashion_woocommerce_left_right_wooproducts_padding).'px !important;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_wooproducts_border_radius = get_theme_mod('the_fashion_woocommerce_wooproducts_border_radius',0);
	$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$the_fashion_woocommerce_custom_css .='border-radius: '.esc_attr($the_fashion_woocommerce_wooproducts_border_radius).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_wooproducts_box_shadow = get_theme_mod('the_fashion_woocommerce_wooproducts_box_shadow',0);
	$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$the_fashion_woocommerce_custom_css .='box-shadow: '.esc_attr($the_fashion_woocommerce_wooproducts_box_shadow).'px '.esc_attr($the_fashion_woocommerce_wooproducts_box_shadow).'px '.esc_attr($the_fashion_woocommerce_wooproducts_box_shadow).'px #eee;';
	$the_fashion_woocommerce_custom_css .='}';

	/*-------------- Footer Text -------------------*/

	$the_fashion_woocommerce_footer_heading = get_theme_mod( 'the_fashion_woocommerce_footer_heading','Left');
    if($the_fashion_woocommerce_footer_heading == 'Left'){
		$the_fashion_woocommerce_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$the_fashion_woocommerce_custom_css .='text-align: left;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_footer_heading == 'Center'){
		$the_fashion_woocommerce_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$the_fashion_woocommerce_custom_css .='text-align: center;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_footer_heading == 'Right'){
		$the_fashion_woocommerce_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$the_fashion_woocommerce_custom_css .='text-align: right;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_footer_content = get_theme_mod( 'the_fashion_woocommerce_footer_content','Left');
    if($the_fashion_woocommerce_footer_content == 'Left'){
		$the_fashion_woocommerce_custom_css .='#footer .widget{';
		$the_fashion_woocommerce_custom_css .='text-align: left;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_footer_content == 'Center'){
		$the_fashion_woocommerce_custom_css .='#footer .widget{';
			$the_fashion_woocommerce_custom_css .='text-align: center;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_footer_content == 'Right'){
		$the_fashion_woocommerce_custom_css .='#footer .widget{';
			$the_fashion_woocommerce_custom_css .='text-align: right;';
		$the_fashion_woocommerce_custom_css .='}';
	}
	
	$the_fashion_woocommerce_copyright_content_align = get_theme_mod('the_fashion_woocommerce_copyright_content_align');
	if($the_fashion_woocommerce_copyright_content_align != false){
		$the_fashion_woocommerce_custom_css .='.copyright{';
			$the_fashion_woocommerce_custom_css .='text-align: '.esc_attr($the_fashion_woocommerce_copyright_content_align).';';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_footer_content_font_size = get_theme_mod('the_fashion_woocommerce_footer_content_font_size', 16);
	$the_fashion_woocommerce_custom_css .='.copyright p{';
		$the_fashion_woocommerce_custom_css .='font-size: '.esc_attr($the_fashion_woocommerce_footer_content_font_size).'px !important;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_copyright_padding = get_theme_mod('the_fashion_woocommerce_copyright_padding', 15);
	$the_fashion_woocommerce_custom_css .='.copyright{';
		$the_fashion_woocommerce_custom_css .='padding-top: '.esc_attr($the_fashion_woocommerce_copyright_padding).'px; padding-bottom: '.esc_attr($the_fashion_woocommerce_copyright_padding).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	/*------ copyright text color -------*/
	$the_fashion_woocommerce_footer_text_color = get_theme_mod('the_fashion_woocommerce_footer_text_color');
	if($the_fashion_woocommerce_footer_text_color != false){
		$the_fashion_woocommerce_custom_css .='.copyright p, .copyright p a{';
			$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_footer_text_color).'!important;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	/*------ copyright background css -------*/
	$the_fashion_woocommerce_footer_text_bg_color = get_theme_mod('the_fashion_woocommerce_footer_text_bg_color');
	if($the_fashion_woocommerce_footer_text_bg_color != false){
		$the_fashion_woocommerce_custom_css .='.copyright{';
			$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_footer_text_bg_color).';';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_footer_widget_bg_color = get_theme_mod('the_fashion_woocommerce_footer_widget_bg_color');
	$the_fashion_woocommerce_custom_css .='#footer{';
		$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_footer_widget_bg_color).';';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_footer_widget_bg_image = get_theme_mod('the_fashion_woocommerce_footer_widget_bg_image');
	if($the_fashion_woocommerce_footer_widget_bg_image != false){
		$the_fashion_woocommerce_custom_css .='#footer{';
			$the_fashion_woocommerce_custom_css .='background: url('.esc_attr($the_fashion_woocommerce_footer_widget_bg_image).');';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// scroll to top bg color
	$the_fashion_woocommerce_back_to_top_bg_color = get_theme_mod('the_fashion_woocommerce_back_to_top_bg_color');
	$the_fashion_woocommerce_custom_css .='#scroll-top{';
		$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_back_to_top_bg_color).';';
		$the_fashion_woocommerce_custom_css .='border-color: '.esc_attr($the_fashion_woocommerce_back_to_top_bg_color).';';
	$the_fashion_woocommerce_custom_css .='}';

	// scroll to top bg hover color
	$the_fashion_woocommerce_back_to_top_bg_hover_color = get_theme_mod('the_fashion_woocommerce_back_to_top_bg_hover_color');
	$the_fashion_woocommerce_custom_css .='#scroll-top:hover{';
		$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_back_to_top_bg_hover_color).';';
		$the_fashion_woocommerce_custom_css .='border-color: '.esc_attr($the_fashion_woocommerce_back_to_top_bg_hover_color).';';
	$the_fashion_woocommerce_custom_css .='}';

	// scroll to top
	$the_fashion_woocommerce_scroll_font_size_icon = get_theme_mod('the_fashion_woocommerce_scroll_font_size_icon', 22);
	$the_fashion_woocommerce_custom_css .='#scroll-top i{';
		$the_fashion_woocommerce_custom_css .='font-size: '.esc_attr($the_fashion_woocommerce_scroll_font_size_icon).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// Slider Height 
	$the_fashion_woocommerce_slider_image_height = get_theme_mod('the_fashion_woocommerce_slider_image_height');
	$the_fashion_woocommerce_custom_css .='#slider img{';
		$the_fashion_woocommerce_custom_css .='height: '.esc_attr($the_fashion_woocommerce_slider_image_height).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// button font size
	$the_fashion_woocommerce_button_font_size = get_theme_mod('the_fashion_woocommerce_button_font_size');
	$the_fashion_woocommerce_custom_css .='.page-box .new-text .read-more-btn a{';
		$the_fashion_woocommerce_custom_css .='font-size: '.esc_attr($the_fashion_woocommerce_button_font_size).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// Button Text Transform
	$the_fashion_woocommerce_theme_lay = get_theme_mod( 'the_fashion_woocommerce_button_text_transform','Uppercase');
    if($the_fashion_woocommerce_theme_lay == 'Uppercase'){
		$the_fashion_woocommerce_custom_css .='.page-box .new-text .read-more-btn a{';
			$the_fashion_woocommerce_custom_css .='text-transform: uppercase;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_theme_lay == 'Lowercase'){
		$the_fashion_woocommerce_custom_css .='.page-box .new-text .read-more-btn a{';
			$the_fashion_woocommerce_custom_css .='text-transform: lowercase;';
		$the_fashion_woocommerce_custom_css .='}';
	}
	else if($the_fashion_woocommerce_theme_lay == 'Capitalize'){
		$the_fashion_woocommerce_custom_css .='.page-box .new-text .read-more-btn a{';
			$the_fashion_woocommerce_custom_css .='text-transform: capitalize;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// Display Blog Post 
	$the_fashion_woocommerce_display_blog_page_post = get_theme_mod( 'the_fashion_woocommerce_display_blog_page_post','In Box');
    if($the_fashion_woocommerce_display_blog_page_post == 'Without Box'){
		$the_fashion_woocommerce_custom_css .='.page-box{';
			$the_fashion_woocommerce_custom_css .='border:none; margin:25px 0; box-shadow: none;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// slider overlay
	$the_fashion_woocommerce_slider_overlay = get_theme_mod('the_fashion_woocommerce_slider_overlay', true);
	if($the_fashion_woocommerce_slider_overlay == false){
		$the_fashion_woocommerce_custom_css .='#slider img{';
			$the_fashion_woocommerce_custom_css .='opacity:1;';
		$the_fashion_woocommerce_custom_css .='}';
	} 
	$the_fashion_woocommerce_slider_image_overlay_color = get_theme_mod('the_fashion_woocommerce_slider_image_overlay_color');
	if($the_fashion_woocommerce_slider_overlay != ''){
		$the_fashion_woocommerce_custom_css .='#slider{';
			$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_slider_image_overlay_color).';';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// site title and tagline font size option
	$the_fashion_woocommerce_site_title_size_option = get_theme_mod('the_fashion_woocommerce_site_title_size_option', 22);{
	$the_fashion_woocommerce_custom_css .='.logo h1 a, .logo p a{';
	$the_fashion_woocommerce_custom_css .='font-size: '.esc_attr($the_fashion_woocommerce_site_title_size_option).'px;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_site_tagline_size_option = get_theme_mod('the_fashion_woocommerce_site_tagline_size_option', 12);{
	$the_fashion_woocommerce_custom_css .='.logo p{';
	$the_fashion_woocommerce_custom_css .='font-size: '.esc_attr($the_fashion_woocommerce_site_tagline_size_option).'px;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// woocommerce product sale settings
	$the_fashion_woocommerce_border_radius_product_sale = get_theme_mod('the_fashion_woocommerce_border_radius_product_sale',50);
	$the_fashion_woocommerce_custom_css .='.woocommerce span.onsale {';
		$the_fashion_woocommerce_custom_css .='border-radius: '.esc_attr($the_fashion_woocommerce_border_radius_product_sale).'%;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_align_product_sale = get_theme_mod('the_fashion_woocommerce_align_product_sale', 'Right');
	if($the_fashion_woocommerce_align_product_sale == 'Right' ){
		$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
			$the_fashion_woocommerce_custom_css .=' left:auto; right:0;';
		$the_fashion_woocommerce_custom_css .='}';
	}elseif($the_fashion_woocommerce_align_product_sale == 'Left' ){
		$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
			$the_fashion_woocommerce_custom_css .=' left:0; right:auto;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	$the_fashion_woocommerce_product_sale_font_size = get_theme_mod('the_fashion_woocommerce_product_sale_font_size',14);
	$the_fashion_woocommerce_custom_css .='.woocommerce span.onsale{';
		$the_fashion_woocommerce_custom_css .='font-size: '.esc_attr($the_fashion_woocommerce_product_sale_font_size).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// preloader background option 
	$the_fashion_woocommerce_loader_background_color_first = get_theme_mod('the_fashion_woocommerce_loader_background_color_first');
	$the_fashion_woocommerce_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
		$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_loader_background_color_first).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// breadcrumb color
	$the_fashion_woocommerce_breadcrumb_color = get_theme_mod('the_fashion_woocommerce_breadcrumb_color');
	$the_fashion_woocommerce_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_breadcrumb_color).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// breadcrumb bg color
	$the_fashion_woocommerce_breadcrumb_bg_color = get_theme_mod('the_fashion_woocommerce_breadcrumb_bg_color');
	$the_fashion_woocommerce_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_breadcrumb_bg_color).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// fixed header padding option
	$the_fashion_woocommerce_sticky_header_padding_settings = get_theme_mod('the_fashion_woocommerce_sticky_header_padding_settings', 0);
	$the_fashion_woocommerce_custom_css .=' .fixed-header, .header-fixed{';
		$the_fashion_woocommerce_custom_css .='padding: '.esc_attr($the_fashion_woocommerce_sticky_header_padding_settings).'px;';
	$the_fashion_woocommerce_custom_css .='}';
	$the_fashion_woocommerce_custom_css .='@media screen and (max-width:1000px) {';
	$the_fashion_woocommerce_custom_css .=' .fixed-header{';
		$the_fashion_woocommerce_custom_css .='padding: 0 !important; }';
	$the_fashion_woocommerce_custom_css .='}';

	// woocommerce Product Navigation
	$the_fashion_woocommerce_products_navigation = get_theme_mod('the_fashion_woocommerce_products_navigation', 'Yes');
	if($the_fashion_woocommerce_products_navigation == 'No'){
		$the_fashion_woocommerce_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$the_fashion_woocommerce_custom_css .='display: none;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// featured image setting
	$the_fashion_woocommerce_featured_img_border_radius = get_theme_mod('the_fashion_woocommerce_featured_img_border_radius', 0);
	$the_fashion_woocommerce_custom_css .='.our-services img{';
		$the_fashion_woocommerce_custom_css .='border-radius: '.esc_attr($the_fashion_woocommerce_featured_img_border_radius).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_featured_img_box_shadow = get_theme_mod('the_fashion_woocommerce_featured_img_box_shadow',0);
	$the_fashion_woocommerce_custom_css .='.our-services img{';
		$the_fashion_woocommerce_custom_css .='box-shadow: '.esc_attr($the_fashion_woocommerce_featured_img_box_shadow).'px '.esc_attr($the_fashion_woocommerce_featured_img_box_shadow).'px '.esc_attr($the_fashion_woocommerce_featured_img_box_shadow).'px #ccc;';
	$the_fashion_woocommerce_custom_css .='}';

	// slider top and bottom padding
	$the_fashion_woocommerce_top_bottom_slider_content_space = get_theme_mod('the_fashion_woocommerce_top_bottom_slider_content_space');
	$the_fashion_woocommerce_left_right_slider_content_space = get_theme_mod('the_fashion_woocommerce_left_right_slider_content_space');
	$the_fashion_woocommerce_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$the_fashion_woocommerce_custom_css .='top: '.esc_attr($the_fashion_woocommerce_top_bottom_slider_content_space).'%; bottom: '.esc_attr($the_fashion_woocommerce_top_bottom_slider_content_space).'%;left: '.esc_attr($the_fashion_woocommerce_left_right_slider_content_space).'%;right: '.esc_attr($the_fashion_woocommerce_left_right_slider_content_space).'%;';
	$the_fashion_woocommerce_custom_css .='}';

	/*------ Footer background css -------*/
	$the_fashion_woocommerce_copyright_bg_color_settings = get_theme_mod('the_fashion_woocommerce_copyright_bg_color_settings');
	if($the_fashion_woocommerce_copyright_bg_color_settings != false){
		$the_fashion_woocommerce_custom_css .='.copyright{';
			$the_fashion_woocommerce_custom_css .='background-color: '.esc_attr($the_fashion_woocommerce_copyright_bg_color_settings).';';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// site tagline color
	$the_fashion_woocommerce_site_tagline_color = get_theme_mod('the_fashion_woocommerce_site_tagline_color');
	$the_fashion_woocommerce_custom_css .='.logo p {';
		$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_site_tagline_color).' !important;';
	$the_fashion_woocommerce_custom_css .='}';

	// site title color
	$the_fashion_woocommerce_site_title_color = get_theme_mod('the_fashion_woocommerce_site_title_color');
	$the_fashion_woocommerce_custom_css .='.site-title a{';
		$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_site_title_color).' !important;';
	$the_fashion_woocommerce_custom_css .='}';

	// site top-bottom logo padding 
	$the_fashion_woocommerce_logo_padding_top = get_theme_mod('the_fashion_woocommerce_logo_padding_top', '');
	$the_fashion_woocommerce_custom_css .='.logo{';
	$the_fashion_woocommerce_custom_css .='padding-top: '.esc_attr($the_fashion_woocommerce_logo_padding_top).'px; padding-bottom: '.esc_attr($the_fashion_woocommerce_logo_padding_top).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// site left-right logo padding 
	$the_fashion_woocommerce_logo_padding_left = get_theme_mod('the_fashion_woocommerce_logo_padding_left', '');
	$the_fashion_woocommerce_custom_css .='.logo{';
	$the_fashion_woocommerce_custom_css .='padding-left: '.esc_attr($the_fashion_woocommerce_logo_padding_left).'px; padding-right: '.esc_attr($the_fashion_woocommerce_logo_padding_left).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// site top-bottom logo margin 
	$the_fashion_woocommerce_logo_margin_top = get_theme_mod('the_fashion_woocommerce_logo_margin_top', '');
	$the_fashion_woocommerce_custom_css .='.logo{';
	$the_fashion_woocommerce_custom_css .='margin-top: '.esc_attr($the_fashion_woocommerce_logo_margin_top).'px; margin-bottom: '.esc_attr($the_fashion_woocommerce_logo_margin_top).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// site left-right logo margin
	$the_fashion_woocommerce_logo_margin_left = get_theme_mod('the_fashion_woocommerce_logo_margin_left', '');
	$the_fashion_woocommerce_custom_css .='.logo{';
	$the_fashion_woocommerce_custom_css .='margin-left: '.esc_attr($the_fashion_woocommerce_logo_margin_left).'px; margin-right: '.esc_attr($the_fashion_woocommerce_logo_margin_left).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// responsive menu alignment
	$the_fashion_woocommerce_button_alignment = get_theme_mod('the_fashion_woocommerce_button_alignment');
	if($the_fashion_woocommerce_button_alignment != false){
		$the_fashion_woocommerce_custom_css .='.menu-section{';
			$the_fashion_woocommerce_custom_css .='text-align: '.esc_attr($the_fashion_woocommerce_button_alignment).';';
		$the_fashion_woocommerce_custom_css .='}';
	} 

	// toggle button color 
	$the_fashion_woocommerce_taggle_menu_bg_color_settings = get_theme_mod('the_fashion_woocommerce_taggle_menu_bg_color_settings', '');
	$the_fashion_woocommerce_custom_css .='.toggle-menu i {';
	$the_fashion_woocommerce_custom_css .='background-color:'.esc_attr($the_fashion_woocommerce_taggle_menu_bg_color_settings).'';
	$the_fashion_woocommerce_custom_css .='}';

	// Menu Text Transform
	$the_fashion_woocommerce_theme_lay = get_theme_mod( 'the_fashion_woocommerce_text_tranform_menu','Capitalize');
    if($the_fashion_woocommerce_theme_lay == 'Uppercase'){
		$the_fashion_woocommerce_custom_css .='.primary-navigation a{';
			$the_fashion_woocommerce_custom_css .='text-transform: uppercase;';
		$the_fashion_woocommerce_custom_css .='}';
	}else if($the_fashion_woocommerce_theme_lay == 'Lowercase'){
		$the_fashion_woocommerce_custom_css .='.primary-navigation a{';
			$the_fashion_woocommerce_custom_css .='text-transform: lowercase;';
		$the_fashion_woocommerce_custom_css .='}';
	}
	else if($the_fashion_woocommerce_theme_lay == 'Capitalize'){
		$the_fashion_woocommerce_custom_css .='.primary-navigation a{';
			$the_fashion_woocommerce_custom_css .='text-transform: capitalize;';
		$the_fashion_woocommerce_custom_css .='}';
	}

	// menu font size
	$the_fashion_woocommerce_menus_font_size = get_theme_mod('the_fashion_woocommerce_menus_font_size',14);
	$the_fashion_woocommerce_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
		$the_fashion_woocommerce_custom_css .='font-size: '.esc_attr($the_fashion_woocommerce_menus_font_size).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// menu font weight
	$the_fashion_woocommerce_menu_weight = get_theme_mod('the_fashion_woocommerce_menu_weight');{
	$the_fashion_woocommerce_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
	$the_fashion_woocommerce_custom_css .='font-weight: '.esc_attr($the_fashion_woocommerce_menu_weight).';';
	$the_fashion_woocommerce_custom_css .='}';
	}

	// menus padding
	$the_fashion_woocommerce_menus_padding = get_theme_mod('the_fashion_woocommerce_menus_padding');
	$the_fashion_woocommerce_custom_css .='.primary-navigation ul li{';
		$the_fashion_woocommerce_custom_css .='padding: '.esc_attr($the_fashion_woocommerce_menus_padding).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// Menu Color Option
	$the_fashion_woocommerce_menu_color_settings = get_theme_mod('the_fashion_woocommerce_menu_color_settings');
	$the_fashion_woocommerce_custom_css .='.primary-navigation ul li a{';
	$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_menu_color_settings).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// Menu Hover Color Option
	$the_fashion_woocommerce_menu_hover_color_settings = get_theme_mod('the_fashion_woocommerce_menu_hover_color_settings');
	$the_fashion_woocommerce_custom_css .='.primary-navigation ul li a:hover {';
	$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_menu_hover_color_settings).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// Submenu Color Option
	$the_fashion_woocommerce_submenu_color_settings = get_theme_mod('the_fashion_woocommerce_submenu_color_settings');
	$the_fashion_woocommerce_custom_css .='.primary-navigation ul.sub-menu li a {';
	$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_submenu_color_settings).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// Submenu Color Option
	$the_fashion_woocommerce_submenu_color_settings = get_theme_mod('the_fashion_woocommerce_submenu_color_settings');
	$the_fashion_woocommerce_custom_css .='.primary-navigation ul.sub-menu li a{';
	$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_submenu_color_settings).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// Submenu Hover Color Option
	$the_fashion_woocommerce_submenu_hover_color_settings = get_theme_mod('the_fashion_woocommerce_submenu_hover_color_settings');
	$the_fashion_woocommerce_custom_css .='.primary-navigation ul.sub-menu li a:hover {';
	$the_fashion_woocommerce_custom_css .='color: '.esc_attr($the_fashion_woocommerce_submenu_hover_color_settings).';';
	$the_fashion_woocommerce_custom_css .='} ';

	// product sale padding top /bottom
	$the_fashion_woocommerce_sale_padding_top = get_theme_mod('the_fashion_woocommerce_sale_padding_top', '');
	$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
	$the_fashion_woocommerce_custom_css .='padding-top: '.esc_attr($the_fashion_woocommerce_sale_padding_top).'px; padding-bottom: '.esc_attr($the_fashion_woocommerce_sale_padding_top).'px !important;';
	$the_fashion_woocommerce_custom_css .='}';

	// product sale padding top /bottom
	$the_fashion_woocommerce_sale_padding_left = get_theme_mod('the_fashion_woocommerce_sale_padding_left', '');
	$the_fashion_woocommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
	$the_fashion_woocommerce_custom_css .='padding-left: '.esc_attr($the_fashion_woocommerce_sale_padding_left).'px; padding-right: '.esc_attr($the_fashion_woocommerce_sale_padding_left).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	// single post image setting
	$the_fashion_woocommerce_single_img_border_radius = get_theme_mod('the_fashion_woocommerce_single_img_border_radius', 0);
	$the_fashion_woocommerce_custom_css .='.page-box-single .box-img img{';
		$the_fashion_woocommerce_custom_css .='border-radius: '.esc_attr($the_fashion_woocommerce_single_img_border_radius).'px;';
	$the_fashion_woocommerce_custom_css .='}';

	$the_fashion_woocommerce_single_img_box_shadow = get_theme_mod('the_fashion_woocommerce_single_img_box_shadow',0);
	$the_fashion_woocommerce_custom_css .='.page-box-single .box-img img{';
		$the_fashion_woocommerce_custom_css .='box-shadow: '.esc_attr($the_fashion_woocommerce_single_img_box_shadow).'px '.esc_attr($the_fashion_woocommerce_single_img_box_shadow).'px '.esc_attr($the_fashion_woocommerce_single_img_box_shadow).'px #ccc;';
	$the_fashion_woocommerce_custom_css .='}';

	/*----Comment title text----*/
	$the_fashion_woocommerce_title_comment_form = get_theme_mod('
		the_fashion_woocommerce_title_comment_form', 'Leave a Reply');
	if($the_fashion_woocommerce_title_comment_form == ''){
	$the_fashion_woocommerce_custom_css .='#comments h2#reply-title {';
	$the_fashion_woocommerce_custom_css .='display: none;';
	$the_fashion_woocommerce_custom_css .='}';
	}

	/*----Comment button text----*/
	$the_fashion_woocommerce_comment_form_button_content = get_theme_mod('the_fashion_woocommerce_comment_form_button_content', 'Post Comment');
	if($the_fashion_woocommerce_comment_form_button_content == ''){
	$the_fashion_woocommerce_custom_css .='#comments p.form-submit {';
	$the_fashion_woocommerce_custom_css .='display: none;';
	$the_fashion_woocommerce_custom_css .='}';
	}

	/*---- Comment form ----*/
	$the_fashion_woocommerce_comment_width = get_theme_mod('the_fashion_woocommerce_comment_width', '100');
	$the_fashion_woocommerce_custom_css .='#comments textarea{';
	$the_fashion_woocommerce_custom_css .=' width:'.esc_attr($the_fashion_woocommerce_comment_width).'%;';
	$the_fashion_woocommerce_custom_css .='}';



	
