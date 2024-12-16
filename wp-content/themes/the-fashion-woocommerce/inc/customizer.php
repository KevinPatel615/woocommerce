<?php
/**
 * The Fashion Woocommerce Theme Customizer
 *
 * @package the-fashion-woocommerce
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function the_fashion_woocommerce_customize_register($wp_customize) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$the_fashion_woocommerce_post_category_list = the_fashion_woocommerce_post_category_list();

	//add home page setting pannel
	$wp_customize->add_panel('the_fashion_woocommerce_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'the-fashion-woocommerce'),
	));	

	// font array
	$the_fashion_woocommerce_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Coming+Soon' => 'Coming+Soon',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Noto Sans' => 'Noto Sans',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Poppins' => 'Poppins',
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Roboto' => 'Roboto',
        'Roboto Condensed' => 'Roboto Condensed',
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Satisfy' => 'Satisfy',
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Unica One' => 'Unica One',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
    );

	$wp_customize->add_section( 'the_fashion_woocommerce_typography', array(
    	'title'      => __( 'Typography', 'the-fashion-woocommerce' ),
		'priority'   => 30,
		'panel' => 'the_fashion_woocommerce_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_paragraph_color', array(
		'label' => __('Paragraph Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_paragraph_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( 'Paragraph Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	$wp_customize->add_setting('the_fashion_woocommerce_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_typography',
		'setting'	=> 'the_fashion_woocommerce_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_atag_color', array(
		'label' => __('"a" Tag Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_atag_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( '"a" Tag Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_li_color', array(
		'label' => __('"li" Tag Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_li_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( '"li" Tag Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_h1_color', array(
		'label' => __('H1 Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_h1_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( 'H1 Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('the_fashion_woocommerce_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_h1_font_size',array(
		'label'	=> __('h1 Font Size','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_typography',
		'setting'	=> 'the_fashion_woocommerce_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_h2_color', array(
		'label' => __('h2 Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_h2_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( 'h2 Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('the_fashion_woocommerce_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_h2_font_size',array(
		'label'	=> __('h2 Font Size','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_typography',
		'setting'	=> 'the_fashion_woocommerce_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_h3_color', array(
		'label' => __('h3 Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_h3_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( 'h3 Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('the_fashion_woocommerce_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_h3_font_size',array(
		'label'	=> __('h3 Font Size','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_typography',
		'setting'	=> 'the_fashion_woocommerce_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_h4_color', array(
		'label' => __('h4 Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_h4_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( 'h4 Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('the_fashion_woocommerce_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_h4_font_size',array(
		'label'	=> __('h4 Font Size','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_typography',
		'setting'	=> 'the_fashion_woocommerce_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_h5_color', array(
		'label' => __('h5 Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_h5_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( 'h5 Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('the_fashion_woocommerce_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_h5_font_size',array(
		'label'	=> __('h5 Font Size','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_typography',
		'setting'	=> 'the_fashion_woocommerce_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'the_fashion_woocommerce_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_h6_color', array(
		'label' => __('h6 Color', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_typography',
		'settings' => 'the_fashion_woocommerce_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('the_fashion_woocommerce_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_h6_font_family', array(
	    'section'  => 'the_fashion_woocommerce_typography',
	    'label'    => __( 'h6 Fonts','the-fashion-woocommerce'),
	    'type'     => 'select',
	    'choices'  => $the_fashion_woocommerce_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('the_fashion_woocommerce_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_h6_font_size',array(
		'label'	=> __('h6 Font Size','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_typography',
		'setting'	=> 'the_fashion_woocommerce_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_background_skin_mode',array(
        'default' => 'Transpert Background',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_background_skin_mode',array(
        'type' => 'select',
        'label' => 'Background Type',
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','the-fashion-woocommerce'),
            'Transpert Background' => __('Transparent Background','the-fashion-woocommerce'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_section('the_fashion_woocommerce_woocommerce_settings', array(
		'title'    => __('WooCommerce Settings', 'the-fashion-woocommerce'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

   	$wp_customize->add_setting( 'the_fashion_woocommerce_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ) );
   	$wp_customize->add_control('the_fashion_woocommerce_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_woocommerce_settings'
    ));

    // shop page sidebar alignment
    $wp_customize->add_setting('the_fashion_woocommerce_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control('the_fashion_woocommerce_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'the-fashion-woocommerce'),
		'section'        => 'the_fashion_woocommerce_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'the-fashion-woocommerce'),
			'Right Sidebar' => __('Right Sidebar', 'the-fashion-woocommerce'),
		),
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ) );
   	$wp_customize->add_control('the_fashion_woocommerce_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_woocommerce_settings'
    ));

    // single product page sidebar alignment
    $wp_customize->add_setting('the_fashion_woocommerce_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control('the_fashion_woocommerce_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'the-fashion-woocommerce'),
		'section'        => 'the_fashion_woocommerce_woocommerce_settings',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'the-fashion-woocommerce'),
			'Right Sidebar' => __('Right Sidebar', 'the-fashion-woocommerce'),
		),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_woocommerce_settings',
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_woocommerce_settings',
    ));

   $wp_customize->add_setting( 'the_fashion_woocommerce_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'the-fashion-woocommerce' ),
		'section'  => 'the_fashion_woocommerce_woocommerce_settings',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('the_fashion_woocommerce_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));	
	$wp_customize->add_control('the_fashion_woocommerce_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_woocommerce_settings',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control( 'the_fashion_woocommerce_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control( 'the_fashion_woocommerce_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'the_fashion_woocommerce_sanitize_number_range',
	));
	$wp_customize->add_control('the_fashion_woocommerce_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'the_fashion_woocommerce_sanitize_number_range',
	));
	$wp_customize->add_control('the_fashion_woocommerce_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_choices'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','the-fashion-woocommerce'),
       'choices' => array(
            'Yes' => __('Yes','the-fashion-woocommerce'),
            'No' => __('No','the-fashion-woocommerce'),
        ),
       'section' => 'the_fashion_woocommerce_woocommerce_settings',
    ));

	$wp_customize->add_setting( 'the_fashion_woocommerce_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_product_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'    => 'the_fashion_woocommerce_sanitize_number_range',
	));
	$wp_customize->add_control('the_fashion_woocommerce_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_woocommerce_settings',
        'choices' => array(
            'Right' => __('Right','the-fashion-woocommerce'),
            'Left' => __('Left','the-fashion-woocommerce'),
        ),
	) );

	$wp_customize->add_setting( 'the_fashion_woocommerce_border_radius_product_sale',array(
		'default' => 50,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','the-fashion-woocommerce'),
        'section'  => 'the_fashion_woocommerce_woocommerce_settings',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('the_fashion_woocommerce_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float'
	));
	$wp_customize->add_control('the_fashion_woocommerce_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','the-fashion-woocommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_fashion_woocommerce_woocommerce_settings',
		'type'=> 'number'
	));

	// sale button padding
	$wp_customize->add_setting( 'the_fashion_woocommerce_sale_padding_top',array(
		'default' => 0,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control( 'the_fashion_woocommerce_sale_padding_top',	array(
		'label' => esc_html__( ' Product Sale Top Bottom Padding','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_sale_padding_left',array(
		'default' => 0,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control( 'the_fashion_woocommerce_sale_padding_left',	array(
		'label' => esc_html__( ' Product Sale Left Right Padding','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	//Top Bar
	$wp_customize->add_section('the_fashion_woocommerce_topbar',array(
		'title'	=> __('Topbar Section','the-fashion-woocommerce'),
		'description'	=> __('Add topbar content','the-fashion-woocommerce'),
		'priority'	=> null,
		'panel' => 'the_fashion_woocommerce_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'the_fashion_woocommerce_display_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('the_fashion_woocommerce_display_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Topbar','the-fashion-woocommerce' ),
        'section' => 'the_fashion_woocommerce_topbar'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_location_icon',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_location_icon',array(
		'label'	=> __('Location Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_topbar',
		'type'		=> 'icon'
	)));

   	$wp_customize->add_setting('the_fashion_woocommerce_location_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('the_fashion_woocommerce_location_text',array(
		'label'	=> __('Add Location Text','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_shopping_basket_icon',array(
		'default'	=> 'fas fa-shopping-basket',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_shopping_basket_icon',array(
		'label'	=> __('Cart Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_topbar'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_searchopen_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_searchopen_icon',array(
		'label'	=> __('Search Open Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_searchclose_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_searchclose_icon',array(
		'label'	=> __('Search Close Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_phone_no_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_phone_no_icon',array(
		'label'	=> __('Add Phone Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_topbar',
		'setting'	=> 'the_fashion_woocommerce_phone_no_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_phone_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_phone_text',array(
		'label'	=> __('Add Phone Text','the-fashion-woocommerce'),
		'input_attrs' => array(
            'placeholder' => __( 'Phone', 'the-fashion-woocommerce' ),
        ),
		'section'=> 'the_fashion_woocommerce_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_phone_number'
	));
	$wp_customize->add_control('the_fashion_woocommerce_phone_number',array(
		'label'	=> __('Add Phone Number','the-fashion-woocommerce'),
		'input_attrs' => array(
            'placeholder' => __( '+00 1234 567 890', 'the-fashion-woocommerce' ),
        ),
		'section'=> 'the_fashion_woocommerce_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_email_address_icon',array(
		'default'	=> 'fas fa-envelope-open',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_email_address_icon',array(
		'label'	=> __('Add Email Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_topbar',
		'setting'	=> 'the_fashion_woocommerce_email_address_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_email_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_email_text',array(
		'label'	=> __('Add Email text','the-fashion-woocommerce'),
		'input_attrs' => array(
            'placeholder' => __( 'Email', 'the-fashion-woocommerce' ),
        ),
		'section'=> 'the_fashion_woocommerce_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('the_fashion_woocommerce_email_address',array(
		'label'	=> __('Add Email Address','the-fashion-woocommerce'),
		'input_attrs' => array(
            'placeholder' => __( 'xyz123@example.com', 'the-fashion-woocommerce' ),
        ),
		'section'=> 'the_fashion_woocommerce_topbar',
		'type'=> 'text'
	));

   $wp_customize->add_setting('the_fashion_woocommerce_search_option',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_search_option',array(
       'type' => 'checkbox',
       'label' => __('Search','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_topbar'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'the_fashion_woocommerce_sticky_header',array(
		'default' => false,
      'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ) );
   $wp_customize->add_control('the_fashion_woocommerce_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','the-fashion-woocommerce' ),
        'section' => 'the_fashion_woocommerce_topbar'
    ));

   $wp_customize->add_setting( 'the_fashion_woocommerce_sticky_header_padding_settings', array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_sticky_header_padding_settings', array(
		'label'       => esc_html__( 'Sticky Header Padding','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_topbar',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//menu settings
	$wp_customize->add_section('the_fashion_woocommerce_menu_setting',array(
		'title'	=> __('Menus Setting','the-fashion-woocommerce'),
		'description'	=> __('Add menus content','the-fashion-woocommerce'),
		'priority'	=> null,
		'panel' => 'the_fashion_woocommerce_panel_id',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_text_tranform_menu',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
 	));
 	$wp_customize->add_control('the_fashion_woocommerce_text_tranform_menu',array(
		'type' => 'radio',
		'label' => __('Menu Text Transform','the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_menu_setting',
		'choices' => array(
		   'Uppercase' => __('Uppercase','the-fashion-woocommerce'),
		   'Lowercase' => __('Lowercase','the-fashion-woocommerce'),
		   'Capitalize' => __('Capitalize','the-fashion-woocommerce'),
		),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_menus_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float'
	));
	$wp_customize->add_control('the_fashion_woocommerce_menus_font_size',array(
		'label'	=> __('Menus Font Size','the-fashion-woocommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_fashion_woocommerce_menu_setting',
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_menu_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control('the_fashion_woocommerce_menu_weight',array(
		'label'	=> __('Menus Font Weight','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_menu_setting',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','the-fashion-woocommerce'),
            '200' => __('200','the-fashion-woocommerce'),
            '300' => __('300','the-fashion-woocommerce'),
            '400' => __('400','the-fashion-woocommerce'),
            '500' => __('500','the-fashion-woocommerce'),
            '600' => __('600','the-fashion-woocommerce'),
            '700' => __('700','the-fashion-woocommerce'),
            '800' => __('800','the-fashion-woocommerce'),
            '900' => __('900','the-fashion-woocommerce'),
        ),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_menus_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float'
	));
	$wp_customize->add_control('the_fashion_woocommerce_menus_padding',array(
		'label'	=> __('Menus Padding','the-fashion-woocommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_fashion_woocommerce_menu_setting',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_menu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_menu_color_settings', array(
  		'label' => __('Menu Color', 'the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_menu_setting',
	    'settings' => 'the_fashion_woocommerce_menu_color_settings',
  	)));

  	$wp_customize->add_setting( 'the_fashion_woocommerce_menu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_menu_hover_color_settings', array(
  		'label' => __('Menu Hover Color', 'the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_menu_setting',
	    'settings' => 'the_fashion_woocommerce_menu_hover_color_settings',
  	)));
 
  	$wp_customize->add_setting( 'the_fashion_woocommerce_submenu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_submenu_color_settings', array(
  		'label' => __('Sub-menu Color', 'the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_menu_setting',
	    'settings' => 'the_fashion_woocommerce_submenu_color_settings',
  	)));

  	$wp_customize->add_setting( 'the_fashion_woocommerce_submenu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_submenu_hover_color_settings', array(
  		'label' => __('Sub-menu Hover Color', 'the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_menu_setting',
	    'settings' => 'the_fashion_woocommerce_submenu_hover_color_settings',
  	)));

	// Social Icons
	$wp_customize->add_section('the_fashion_woocommerce_social_icons',array(
		'title'	=> __('Social Icons','the-fashion-woocommerce'),
		'description'	=> __('Add topbar content','the-fashion-woocommerce'),
		'priority'	=> null,
		'panel' => 'the_fashion_woocommerce_panel_id',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_facebook_icon',array(
		'label'	=> __('Facebook Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_fashion_woocommerce_facebook_url',array(
		'label'	=> __('Add Facebook link','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'setting'	=> 'the_fashion_woocommerce_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_twitter_icon',array(
		'label'	=> __('Twitter Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_fashion_woocommerce_twitter_url',array(
		'label'	=> __('Add Twitter link','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'setting'	=> 'the_fashion_woocommerce_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_pintrest_icon',array(
		'default'	=> 'fab fa-pinterest-p',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_pintrest_icon',array(
		'label'	=> __('Pintrest Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_pintrest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_fashion_woocommerce_pintrest_url',array(
		'label'	=> __('Add Pintrest link','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'setting'	=> 'the_fashion_woocommerce_pintrest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_youtube_icon',array(
		'label'	=> __('You Tube Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('the_fashion_woocommerce_youtube_url',array(
		'label'	=> __('Add You Tube link','the-fashion-woocommerce'),
		'section'	=> 'the_fashion_woocommerce_social_icons',
		'setting'	=> 'the_fashion_woocommerce_youtube_url',
		'type'	=> 'url'
	));

	//Slider
	$wp_customize->add_section( 'the_fashion_woocommerce_slider' , array(
    	'title'      => __( 'Slider Settings', 'the-fashion-woocommerce' ),
		// 'priority'   => null,
		'panel' => 'the_fashion_woocommerce_panel_id'
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_slider'
    ));

	$wp_customize->add_setting( 'the_fashion_woocommerce_slider_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_slider_small_title', array(
		'label'    => __( 'Add Slider Small Text', 'the-fashion-woocommerce' ),
		'section'  => 'the_fashion_woocommerce_slider',
		'type'     => 'text'
	) );

    $wp_customize->add_setting('the_fashion_woocommerce_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_slider'
    ));

   $wp_customize->add_setting('the_fashion_woocommerce_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_slider'
    ));

    $wp_customize->add_setting('the_fashion_woocommerce_slider_button_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_slider_button_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Button','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_slider'
    ));

	for ( $the_fashion_woocommerce_count = 1; $the_fashion_woocommerce_count <= 4; $the_fashion_woocommerce_count++ ) {

	$wp_customize->add_setting( 'the_fashion_woocommerce_slider_page' . $the_fashion_woocommerce_count, array(
			'default'           => '',
			'sanitize_callback' => 'the_fashion_woocommerce_sanitize_dropdown_pages'
		) );
	$wp_customize->add_control( 'the_fashion_woocommerce_slider_page' . $the_fashion_woocommerce_count, array(
			'label'    => __( 'Select Slide Image Page', 'the-fashion-woocommerce' ),
			'description'	=> __('Size of image should be 1500 x 600','the-fashion-woocommerce'),
			'section'  => 'the_fashion_woocommerce_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('the_fashion_woocommerce_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','the-fashion-woocommerce'),
	   'description'    => __('This option will add colors over the slider.','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_slider'
    ));

	//Opacity
	$wp_customize->add_setting('the_fashion_woocommerce_slider_image_opacity',array(
      'default'              => 0.6,
      'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control( 'the_fashion_woocommerce_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','the-fashion-woocommerce' ),
	'section'     => 'the_fashion_woocommerce_slider',
	'type'        => 'select',
	'settings'    => 'the_fashion_woocommerce_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','the-fashion-woocommerce'),
		'0.1' =>  esc_attr('0.1','the-fashion-woocommerce'),
		'0.2' =>  esc_attr('0.2','the-fashion-woocommerce'),
		'0.3' =>  esc_attr('0.3','the-fashion-woocommerce'),
		'0.4' =>  esc_attr('0.4','the-fashion-woocommerce'),
		'0.5' =>  esc_attr('0.5','the-fashion-woocommerce'),
		'0.6' =>  esc_attr('0.6','the-fashion-woocommerce'),
		'0.7' =>  esc_attr('0.7','the-fashion-woocommerce'),
		'0.8' =>  esc_attr('0.8','the-fashion-woocommerce'),
		'0.9' =>  esc_attr('0.9','the-fashion-woocommerce')
	),
	));

   $wp_customize->add_setting('the_fashion_woocommerce_slider_image_overlay_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','the-fashion-woocommerce'),
		'settings' => 'the_fashion_woocommerce_slider_image_overlay_color',
	)));

	//content layout
   $wp_customize->add_setting('the_fashion_woocommerce_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_slider',
        'choices' => array(
            'Center' => __('Center ','the-fashion-woocommerce'),
            'Left' => __('Left','the-fashion-woocommerce'),
            'Right' => __('Right','the-fashion-woocommerce'),
        ),
	) );

   //Slider excerpt
	$wp_customize->add_setting( 'the_fashion_woocommerce_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_slider',
		'type'        => 'number',
		'settings'    => 'the_fashion_woocommerce_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'the_fashion_woocommerce_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'the_fashion_woocommerce_sanitize_number_range',
	));
	$wp_customize->add_control( 'the_fashion_woocommerce_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_image_height',array(
		'default'=> __('','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_slider_image_height',array(
		'label'	=> __('Slider Image Height','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_button',array(
		'default'=> __('Read More','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_slider_button',array(
		'label'	=> __('Slider Button Text 1','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_button_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('the_fashion_woocommerce_slider_button_url',array(
		'label'	=> esc_html__('Add Button Link','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_slider',
		'type'=> 'url'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_button1',array(
		'default'=> __('Book Your Appointment','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_slider_button1',array(
		'label'	=> __('Slider Button Text 2','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_button_url1',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('the_fashion_woocommerce_slider_button_url1',array(
		'label'	=> esc_html__('Add Button Link','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_slider',
		'type'=> 'url'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_btn_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_slider_btn_bg_color', array(
		'label'    => __('Slider First Button Background Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_slider',
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_btn_bg_color1', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_slider_btn_bg_color1', array(
		'label'    => __('Slider Second Button Background Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_slider',
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_slider',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_slider',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','the-fashion-woocommerce'),
		'description' => "<ul><li>You can change how many slides there are.</li><li>You can change the font family and the colours of headings and subheadings.</li><li>And so on...</li></ul><a target='_blank' href='". esc_url('https://www.themeshopy.com/themes/fashion-woocommerce-wordpress-theme/') ." '>Upgrade to Pro</a>",
		'section'=> 'the_fashion_woocommerce_slider'
	));

	//Fashion Categroy
	$wp_customize->add_section('the_fashion_woocommerce_category_section',array(
		'title'	=> __('Fashion Category Section','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));	

	// cat1

    $wp_customize->add_setting( 'the_fashion_woocommerce_category_cat_',array(
     	'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'the_fashion_woocommerce_category_cat_', array(
        'label'       => esc_html__( 'Select Category', 'the-fashion-woocommerce' ),
        'section'     => 'the_fashion_woocommerce_category_section',
        'type'        => 'select',
        'choices'     => $the_fashion_woocommerce_post_category_list,
        )
    );

	$wp_customize->add_setting( 'the_fashion_woocommerce_cat_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_cat_small_title', array(
		'label'    => __( 'Add Small Text', 'the-fashion-woocommerce' ),
		'input_attrs' => array(
            'placeholder' => __( 'Collection', 'the-fashion-woocommerce' ),
        ),
		'section'  => 'the_fashion_woocommerce_category_section',
		'type'     => 'text',
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_category_icon1',array(
		'default'	=> 'fas fa-chevron-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_category_icon1',array(
		'label'	=> __('Add Category Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_category_section',
		'setting'	=> 'the_fashion_woocommerce_category_icon1',
		'type'		=> 'icon'
	)));

	// cat 2

    $wp_customize->add_setting( 'the_fashion_woocommerce_category_cat2_',array(
     	'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'the_fashion_woocommerce_category_cat2_', array(
        'label'       => esc_html__( 'Select Category', 'the-fashion-woocommerce' ),
        'section'     => 'the_fashion_woocommerce_category_section',
        'type'        => 'select',
        'choices'     => $the_fashion_woocommerce_post_category_list,
        )
    );

	$wp_customize->add_setting( 'the_fashion_woocommerce_cat_small_title2', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_cat_small_title2', array(
		'label'    => __( 'Add Small Text', 'the-fashion-woocommerce' ),
		'input_attrs' => array(
            'placeholder' => __( 'Collection', 'the-fashion-woocommerce' ),
        ),
		'section'  => 'the_fashion_woocommerce_category_section',
		'type'     => 'text',
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_category_icon2',array(
		'default'	=> 'fas fa-chevron-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_category_icon2',array(
		'label'	=> __('Add Category Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_category_section',
		'setting'	=> 'the_fashion_woocommerce_category_icon2',
		'type'		=> 'icon'
	)));

	// cat 3

    $wp_customize->add_setting( 'the_fashion_woocommerce_category_cat3_',array(
     	'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'the_fashion_woocommerce_category_cat3_', array(
        'label'       => esc_html__( 'Select Category ', 'the-fashion-woocommerce' ),
        'section'     => 'the_fashion_woocommerce_category_section',
        'type'        => 'select',
        'choices'     => $the_fashion_woocommerce_post_category_list,
        )
    );

	$wp_customize->add_setting( 'the_fashion_woocommerce_cat_small_title3', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_cat_small_title3', array(
		'label'    => __( 'Add Small Text', 'the-fashion-woocommerce' ),
		'input_attrs' => array(
            'placeholder' => __( 'Collection', 'the-fashion-woocommerce' ),
        ),
		'section'  => 'the_fashion_woocommerce_category_section',
		'type'     => 'text',
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_category_icon3',array(
		'default'	=> 'fas fa-chevron-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_category_icon3',array(
		'label'	=> __('Add Category Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_category_section',
		'setting'	=> 'the_fashion_woocommerce_category_icon3',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_service_button_label',array(
		'default'=> 'View All Categories',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_service_button_label',array(
		'label'	=> __('Add Slider Button Text','the-fashion-woocommerce'),
		'input_attrs' => array(
            'placeholder' => __( 'View All Categories', 'the-fashion-woocommerce' ),
        ),
		'section'=> 'the_fashion_woocommerce_category_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_fashion_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('the_fashion_woocommerce_fashion_btn_link',array(
		'label'	=> esc_html__('Add Button Link','the-fashion-woocommerce'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'the-fashion-woocommerce' ),
        ),
		'section'=> 'the_fashion_woocommerce_category_section',
		'type'=> 'url'
	));

	// cat 4 
    $wp_customize->add_setting( 'the_fashion_woocommerce_category_cat4_',array(
     	'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'the_fashion_woocommerce_category_cat4_', array(
        'label'       => esc_html__( 'Select Category ', 'the-fashion-woocommerce' ),
        'section'     => 'the_fashion_woocommerce_category_section',
        'type'        => 'select',
        'choices'     => $the_fashion_woocommerce_post_category_list,
        )
    );

	$wp_customize->add_setting( 'the_fashion_woocommerce_cat_small_title4', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_cat_small_title4', array(
		'label'    => __( 'Add Small Text', 'the-fashion-woocommerce' ),
		'input_attrs' => array(
            'placeholder' => __( 'Collection', 'the-fashion-woocommerce' ),
        ),
		'section'  => 'the_fashion_woocommerce_category_section',
		'type'     => 'text',
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_category_icon4',array(
		'default'	=> 'fas fa-chevron-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_category_icon4',array(
		'label'	=> __('Add Category Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_category_section',
		'setting'	=> 'the_fashion_woocommerce_category_icon4',
		'type'		=> 'icon'
	)));

	// cat 5
    $wp_customize->add_setting( 'the_fashion_woocommerce_category_cat5_',array(
     	'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control( 'the_fashion_woocommerce_category_cat5_', array(
        'label'       => esc_html__( 'Select Category ', 'the-fashion-woocommerce' ),
        'section'     => 'the_fashion_woocommerce_category_section',
        'type'        => 'select',
        'choices'     => $the_fashion_woocommerce_post_category_list,
        )
    );

	$wp_customize->add_setting( 'the_fashion_woocommerce_cat_small_title5', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_cat_small_title5', array(
		'label'    => __( 'Add Small Text', 'the-fashion-woocommerce' ),
		'input_attrs' => array(
            'placeholder' => __( 'Collection', 'the-fashion-woocommerce' ),
        ),
		'section'  => 'the_fashion_woocommerce_category_section',
		'type'     => 'text',
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_category_icon5',array(
		'default'	=> 'fas fa-chevron-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_category_icon5',array(
		'label'	=> __('Add Category Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_category_section',
		'setting'	=> 'the_fashion_woocommerce_category_icon5',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_category_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_category_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','the-fashion-woocommerce'),
		'description' => "<ul><li>Includes settings to set section title.</li><li>Contains settings for the background colour.</li><li>Contains options for background images.</li><li>You can change the font family and colours of heading.</li><li>And so on...</li></ul><a target='_blank' href='". esc_url('https://www.themeshopy.com/themes/fashion-woocommerce-wordpress-theme/') ." '>Upgrade to Pro</a>",
		'section'=> 'the_fashion_woocommerce_category_section'
	));

	//404 Page Setting
	$wp_customize->add_section('the_fashion_woocommerce_404_page_setting',array(
		'title'	=> __('404 Page','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));	

	$wp_customize->add_setting('the_fashion_woocommerce_title_404_page',array(
		'default'=> __('404 Not Found','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_title_404_page',array(
		'label'	=> __('404 Page Title','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_content_404_page',array(
		'label'	=> __('404 Page Content','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_button_404_page',array(
		'default'=> __('Back to Home Page','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_button_404_page',array(
		'label'	=> __('404 Page Button','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_404_page_setting',
		'type'=> 'text'
	));

	//Blog Post
	$wp_customize->add_section('the_fashion_woocommerce_blog_post',array(
		'title'	=> __('Blog Post Settings','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));	

	$wp_customize->add_setting('the_fashion_woocommerce_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_blog_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_date_icon',array(
		'label'	=> __('Post Date Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_blog_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_comment_icon',array(
		'label'	=> __('Comments Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_blog_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_author_icon',array(
		'label'	=> __('Author Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_blog_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_time_icon',array(
		'label'	=> __('Time Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_blog_post'
    ));

    //blog post img radius
    $wp_customize->add_setting( 'the_fashion_woocommerce_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'the_fashion_woocommerce_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

   $wp_customize->add_setting('the_fashion_woocommerce_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_blog_post',
        'choices' => array(
            'No Content' => __('No Content','the-fashion-woocommerce'),
            'Excerpt Content' => __('Excerpt Content','the-fashion-woocommerce'),
            'Full Content' => __('Full Content','the-fashion-woocommerce'),
        ),
	) );

   $wp_customize->add_setting( 'the_fashion_woocommerce_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_blog_post',
		'type'        => 'number',
		'settings'    => 'the_fashion_woocommerce_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'the_fashion_woocommerce_post_suffix_option', array(
		'default'   => __('...','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_blog_post',
		'type'        => 'text',
		'settings'    => 'the_fashion_woocommerce_post_suffix_option',
	) );

    $wp_customize->add_setting( 'the_fashion_woocommerce_metabox_separator_blog_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','the-fashion-woocommerce' ),
		'input_attrs' => array(
      'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'the-fashion-woocommerce' ),
        ),
		'section'     => 'the_fashion_woocommerce_blog_post',
		'type'        => 'text',
		'settings'    => 'the_fashion_woocommerce_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_blog_post',
        'choices' => array(
            'In Box' => __('In Box','the-fashion-woocommerce'),
            'Without Box' => __('Without Box','the-fashion-woocommerce'),
        ),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_blog_post'
    ));

	$wp_customize->add_setting( 'the_fashion_woocommerce_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_choices'
    ));
    $wp_customize->add_control( 'the_fashion_woocommerce_pagination_settings', array(
        'section' => 'the_fashion_woocommerce_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'the-fashion-woocommerce' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'the-fashion-woocommerce' ),
            'next-prev' => __( 'Next / Previous', 'the-fashion-woocommerce' ),
    )));

	// Button
	$wp_customize->add_section( 'the_fashion_woocommerce_theme_button', array(
		'title' => __('Button Option','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_button_text',array(
		'default'=> __('Read More','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_button_text',array(
		'label'	=> __('Add Button Text','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_theme_button',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float'
	));
	$wp_customize->add_control('the_fashion_woocommerce_button_font_size',array(
		'label'	=> __('Button Font Size','the-fashion-woocommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_fashion_woocommerce_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_button_text_transform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
 	));
 	$wp_customize->add_control('the_fashion_woocommerce_button_text_transform',array(
		'type' => 'radio',
		'label' => __('Button Text Transform','the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_theme_button',
		'choices' => array(
		   'Uppercase' => __('Uppercase','the-fashion-woocommerce'),
		   'Lowercase' => __('Lowercase','the-fashion-woocommerce'),
		   'Capitalize' => __('Capitalize','the-fashion-woocommerce'),
		),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','the-fashion-woocommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_fashion_woocommerce_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','the-fashion-woocommerce'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_fashion_woocommerce_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'the_fashion_woocommerce_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Single Post Settings
	$wp_customize->add_section('the_fashion_woocommerce_single_post',array(
		'title'	=> __('Single Post Settings','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));	

	$wp_customize->add_setting('the_fashion_woocommerce_single_post_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_single_post_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_single_post_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_single_post_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_single_post_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_single_post_comment_icon',array(
		'label'	=> __('Single Post Comments Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_single_post_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_single_post_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_single_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_single_post_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_single_post_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Time','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

	$wp_customize->add_setting('the_fashion_woocommerce_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_single_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'the_fashion_woocommerce_single_post_breadcrumb',array(
		'default' => false,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('the_fashion_woocommerce_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','the-fashion-woocommerce' ),
        'section' => 'the_fashion_woocommerce_single_post'
    ));

   	$wp_customize->add_setting('the_fashion_woocommerce_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   	$wp_customize->add_control('the_fashion_woocommerce_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

   	$wp_customize->add_setting('the_fashion_woocommerce_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   	$wp_customize->add_control('the_fashion_woocommerce_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

   	//single post img radius
    $wp_customize->add_setting( 'the_fashion_woocommerce_single_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_single_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_single_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'the_fashion_woocommerce_single_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_single_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','the-fashion-woocommerce' ),
		'section' => 'the_fashion_woocommerce_single_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

   	$wp_customize->add_setting('the_fashion_woocommerce_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   	$wp_customize->add_control('the_fashion_woocommerce_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

   	$wp_customize->add_setting( 'the_fashion_woocommerce_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
	) );
	$wp_customize->add_control('the_fashion_woocommerce_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Single Post Comment Box','the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_single_post'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_category_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_category_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Category','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

    $wp_customize->add_setting('the_fashion_woocommerce_title_comment_form',array(
       'default' => __('Leave a Reply','the-fashion-woocommerce'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

    $wp_customize->add_setting('the_fashion_woocommerce_comment_form_button_content',array(
       'default' => __('Post Comment','the-fashion-woocommerce'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_single_post'
    ));

    //Comment Textarea Width
    $wp_customize->add_setting( 'the_fashion_woocommerce_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'the_fashion_woocommerce_comment_width', array(
		'label'  => __('Comment Textarea Width','the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_single_post',
		'description' => __('Measurement is in %.','the-fashion-woocommerce'),
		'input_attrs' => array(
		   'step'=> 1,
		   'min' => 0,
		   'max' => 100,
		),
		'type'		=> 'number'
    ));

    $wp_customize->add_setting( 'the_fashion_woocommerce_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'the_fashion_woocommerce_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','the-fashion-woocommerce' ),
		'section'     => 'the_fashion_woocommerce_single_post',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','the-fashion-woocommerce'),
		'type'        => 'text',
		'settings'    => 'the_fashion_woocommerce_single_post_meta_seperator',
	) );

	//Related Post Settings
	$wp_customize->add_section('the_fashion_woocommerce_related_post',array(
		'title'	=> __('Related Post Settings','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));	

	$wp_customize->add_setting( 'the_fashion_woocommerce_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ) );
   	$wp_customize->add_control('the_fashion_woocommerce_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','the-fashion-woocommerce' ),
        'section' => 'the_fashion_woocommerce_related_post'
    ));

   	$wp_customize->add_setting('the_fashion_woocommerce_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_related_post',
        'choices' => array(
            'categories' => __('Categories','the-fashion-woocommerce'),
            'tags' => __('Tags','the-fashion-woocommerce'),
        ),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_related_post_title',array(
		'default'=> __('Related Posts','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_related_post_title',array(
		'label'	=> __('Related Post Title','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_related_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('the_fashion_woocommerce_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_related_posts_number',array(
		'label'	=> __('Related Post Number','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_related_post',
		'type'=> 'number',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_related_post_excerpt_number',array(
		'default'=> 20,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_related_post_excerpt_number',array(
		'label'	=> __('Related Post Content Limit','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_related_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Layouts
	$wp_customize->add_section('the_fashion_woocommerce_left_right', array(
		'title'    => __('Layout Settings', 'the-fashion-woocommerce'),
		'priority' => null,
		'panel'    => 'the_fashion_woocommerce_panel_id',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','the-fashion-woocommerce'),
        'description' => __('Here you can change the Width layout. ','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_left_right',
        'choices' => array(
            'Default' => __('Default','the-fashion-woocommerce'),
            'Container' => __('Container','the-fashion-woocommerce'),
            'Box Container' => __('Box Container','the-fashion-woocommerce'),
        ),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_preloader_option',array(
       'default' => false,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
   $wp_customize->add_control('the_fashion_woocommerce_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_left_right'
    ));

  	$wp_customize->add_setting('the_fashion_woocommerce_preloader_type_options', array(
		'default'           => 'Preloader 1',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control('the_fashion_woocommerce_preloader_type_options',array(
		'type'           => 'radio',
		'label'          => __('Preloader Type', 'the-fashion-woocommerce'),
		'section'        => 'the_fashion_woocommerce_left_right',
		'choices'        => array(
			'Preloader 1'  => __('Preloader 1', 'the-fashion-woocommerce'),
			'Preloader 2' => __('Preloader 2', 'the-fashion-woocommerce'),
		),
	));

   	$wp_customize->add_setting( 'the_fashion_woocommerce_loader_background_color_first', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_loader_background_color_first', array(
  		'label' => __('Background Color for Preloader', 'the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_left_right',
	    'settings' => 'the_fashion_woocommerce_loader_background_color_first',
  	)));

	$wp_customize->add_setting( 'the_fashion_woocommerce_breadcrumb_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_breadcrumb_color', array(
  		'label' => __('Breadcrumb Color', 'the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_left_right',
	    'settings' => 'the_fashion_woocommerce_breadcrumb_color',
  	)));

  	$wp_customize->add_setting( 'the_fashion_woocommerce_breadcrumb_bg_color', array(
	    'default' => '#D49E8D',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_breadcrumb_bg_color', array(
  		'label' => __('Breadcrumb Background Color', 'the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_left_right',
	    'settings' => 'the_fashion_woocommerce_breadcrumb_bg_color',
  	)));

   	$wp_customize->add_setting( 'the_fashion_woocommerce_single_page_breadcrumb',array(
		'default' => false,
      	'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ) );
    $wp_customize->add_control('the_fashion_woocommerce_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','the-fashion-woocommerce' ),
        'section' => 'the_fashion_woocommerce_left_right'
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('the_fashion_woocommerce_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control('the_fashion_woocommerce_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Blog Page Layouts', 'the-fashion-woocommerce'),
		'section'        => 'the_fashion_woocommerce_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'the-fashion-woocommerce'),
			'Right Sidebar' => __('Right Sidebar', 'the-fashion-woocommerce'),
			'One Column'    => __('One Column', 'the-fashion-woocommerce'),
			'Three Columns' => __('Three Columns', 'the-fashion-woocommerce'),
			'Four Columns'  => __('Four Columns', 'the-fashion-woocommerce'),
			'Grid Layout'   => __('Grid Layout', 'the-fashion-woocommerce')
		),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control('the_fashion_woocommerce_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'the-fashion-woocommerce'),
		'section'        => 'the_fashion_woocommerce_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'the-fashion-woocommerce'),
			'Right Sidebar' => __('Right Sidebar', 'the-fashion-woocommerce'),
			'One Column'    => __('One Column', 'the-fashion-woocommerce'),
		),
	));

	$wp_customize->add_setting('the_fashion_woocommerce_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
	));
	$wp_customize->add_control('the_fashion_woocommerce_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'the-fashion-woocommerce'),
		'section'        => 'the_fashion_woocommerce_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'the-fashion-woocommerce'),
			'Right Sidebar' => __('Right Sidebar', 'the-fashion-woocommerce'),
			'One Column'    => __('One Column', 'the-fashion-woocommerce'),
		),
	));

	//no Result Found
	$wp_customize->add_section('the_fashion_woocommerce_noresult_found',array(
		'title'	=> __('No Result Found','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));	

	$wp_customize->add_setting('the_fashion_woocommerce_nosearch_found_title',array(
		'default'=> __('Nothing Found','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','the-fashion-woocommerce'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_fashion_woocommerce_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_noresult_found'
    ));

	//Responsive Media Settings
	$wp_customize->add_section('the_fashion_woocommerce_responsive_setting',array(
		'title'	=> __('Responsive Settings','the-fashion-woocommerce'),
		'panel' => 'the_fashion_woocommerce_panel_id',
	));

	// taggle button color
  	$wp_customize->add_setting( 'the_fashion_woocommerce_taggle_menu_bg_color_settings', array(
	    'default' => '#D49E8D',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'the_fashion_woocommerce_taggle_menu_bg_color_settings', array(
  		'label' => __('Toggle Menu Bg Color', 'the-fashion-woocommerce'),
	   'section' => 'the_fashion_woocommerce_responsive_setting',
	   'settings' => 'the_fashion_woocommerce_taggle_menu_bg_color_settings',
  	)));

    $wp_customize->add_setting('the_fashion_woocommerce_responsive_slider',array(
       'default' => true, 
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_responsive_setting'
    ));

    $wp_customize->add_setting('the_fashion_woocommerce_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_responsive_setting'
    ));

    $wp_customize->add_setting('the_fashion_woocommerce_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_responsive_setting'
    ));

    $wp_customize->add_setting('the_fashion_woocommerce_responsive_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
    ));
    $wp_customize->add_control('the_fashion_woocommerce_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','the-fashion-woocommerce'),
       'section' => 'the_fashion_woocommerce_responsive_setting'
    ));

	//Footer
	$wp_customize->add_section('the_fashion_woocommerce_footer_section', array(
		'title'       => __('Footer Text', 'the-fashion-woocommerce'),
		'priority'    => null,
		'panel'       => 'the_fashion_woocommerce_panel_id',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_show_hide_footer',array(
		'default' => true,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('the_fashion_woocommerce_show_hide_footer',array(
     	'type' => 'checkbox',
      'label' => __('Show / Hide Footer','the-fashion-woocommerce'),
      'section' => 'the_fashion_woocommerce_footer_section',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices',
    ));
    $wp_customize->add_control('the_fashion_woocommerce_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'the-fashion-woocommerce'),
        'section'     => 'the_fashion_woocommerce_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'the-fashion-woocommerce'),
        'choices' => array(
            '1'     => __('One', 'the-fashion-woocommerce'),
            '2'     => __('Two', 'the-fashion-woocommerce'),
            '3'     => __('Three', 'the-fashion-woocommerce'),
            '4'     => __('Four', 'the-fashion-woocommerce')
        ),
    ));

    $wp_customize->add_setting('the_fashion_woocommerce_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_footer_section',
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'the_fashion_woocommerce_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_footer_section'
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','the-fashion-woocommerce'),
	        'Center' => __('Center','the-fashion-woocommerce'),
	        'Right' => __('Right','the-fashion-woocommerce')
	    ),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','the-fashion-woocommerce'),
	    'section' => 'the_fashion_woocommerce_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','the-fashion-woocommerce'),
	        'Center' => __('Center','the-fashion-woocommerce'),
	        'Right' => __('Right','the-fashion-woocommerce')
	    ),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_show_hide_copyright',array(
		'default' => true,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('the_fashion_woocommerce_show_hide_copyright',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Copyright','the-fashion-woocommerce'),
      	'section' => 'the_fashion_woocommerce_footer_section',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('the_fashion_woocommerce_footer_copy', array(
		'label'   => __('Copyright Text', 'the-fashion-woocommerce'),
		'section' => 'the_fashion_woocommerce_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_footer_section',
        'choices' => array(
            'left' => __('Left','the-fashion-woocommerce'),
            'right' => __('Right','the-fashion-woocommerce'),
            'center' => __('Center','the-fashion-woocommerce'),
        ),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','the-fashion-woocommerce' ),
		'section'=> 'the_fashion_woocommerce_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_copyright_padding',array(
		'label'	=> __('Copyright Padding','the-fashion-woocommerce'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_fashion_woocommerce_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('the_fashion_woocommerce_footer_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_footer_text_color', array(
		'label'    => __('Copyright Text Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_footer_section',
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_footer_text_bg_color', array(
		'default'           => '#D49E8D',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_footer_text_bg_color', array(
		'label'    => __('Copyright Background Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_footer_section',
	)));

	$wp_customize->add_setting('the_fashion_woocommerce_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_checkbox'
	));
	$wp_customize->add_control('the_fashion_woocommerce_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','the-fashion-woocommerce'),
      	'section' => 'the_fashion_woocommerce_footer_section',
	));

	$wp_customize->add_setting('the_fashion_woocommerce_back_to_top_icon',array(
		'default'	=> 'fas fa-chevron-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_fashion_woocommerce_Icon_Changer(
        $wp_customize,'the_fashion_woocommerce_back_to_top_icon',array(
		'label'	=> __('Scroll Back to Top Icon','the-fashion-woocommerce'),
		'transport' => 'refresh',
		'section'	=> 'the_fashion_woocommerce_footer_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_back_to_top_bg_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_back_to_top_bg_color', array(
		'label'    => __('Back to Top Background Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_footer_section',
	)));

    $wp_customize->add_setting('the_fashion_woocommerce_back_to_top_bg_hover_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_fashion_woocommerce_back_to_top_bg_hover_color', array(
		'label'    => __('Back to Top Background Hover Color', 'the-fashion-woocommerce'),
		'section'  => 'the_fashion_woocommerce_footer_section',
	)));
	
	$wp_customize->add_setting('the_fashion_woocommerce_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'the_fashion_woocommerce_sanitize_choices'
	));
	$wp_customize->add_control('the_fashion_woocommerce_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','the-fashion-woocommerce'),
        'section' => 'the_fashion_woocommerce_footer_section',
        'choices' => array(
            'Left' => __('Left','the-fashion-woocommerce'),
            'Right' => __('Right','the-fashion-woocommerce'),
            'Center' => __('Center','the-fashion-woocommerce'),
        ),
	) );

	$wp_customize->add_setting('the_fashion_woocommerce_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'the_fashion_woocommerce_sanitize_float',
	));
	$wp_customize->add_control('the_fashion_woocommerce_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','the-fashion-woocommerce'),
		'section'=> 'the_fashion_woocommerce_footer_section',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
}
add_action('customize_register', 'the_fashion_woocommerce_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class The_Fashion_Woocommerce_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the conthe_fashion_woocommerce_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('The_Fashion_Woocommerce_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new The_Fashion_Woocommerce_Customize_Section_Pro(
				$manager,
				'the_fashion_woocommerce_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Fashion Woocommerce Pro ', 'the-fashion-woocommerce'),
					'pro_text' => esc_html__('Get Pro', 'the-fashion-woocommerce'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/fashion-woocommerce-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('the-fashion-woocommerce-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('the-fashion-woocommerce-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
The_Fashion_Woocommerce_Customize::get_instance();