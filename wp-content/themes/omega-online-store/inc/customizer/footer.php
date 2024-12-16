<?php
/**
* Footer Settings.
*
* @package Omega Online Store
*/

$omega_online_store_default = omega_online_store_get_default_theme_options();

$wp_customize->add_section( 'footer_widget_area',
	array(
	'title'      => esc_html__( 'Footer Setting', 'omega-online-store' ),
	'priority'   => 200,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting( 'footer_column_layout',
	array(
	'default'           => $omega_online_store_default['footer_column_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'omega_online_store_sanitize_select',
	)
);
$wp_customize->add_control( 'footer_column_layout',
	array(
	'label'       => esc_html__( 'Footer Column Layout', 'omega-online-store' ),
	'section'     => 'footer_widget_area',
	'type'        => 'select',
	'choices'               => array(
		'1' => esc_html__( 'One Column', 'omega-online-store' ),
		'2' => esc_html__( 'Two Column', 'omega-online-store' ),
	    ),
	)
);

$wp_customize->add_setting( 'footer_copyright_text',
	array(
	'default'           => $omega_online_store_default['footer_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'footer_copyright_text',
	array(
	'label'    => esc_html__( 'Footer Copyright Text', 'omega-online-store' ),
	'section'  => 'footer_widget_area',
	'type'     => 'text',
	)
);

$wp_customize->add_setting( 'footer_widget_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_background_color', array(
    'label'     => __('Footer Widget Background Color', 'omega-online-store'),
    'description' => __('It will change the complete footer widget background color.', 'omega-online-store'),
    'section' => 'footer_widget_area',
    'settings' => 'footer_widget_background_color',
)));

$wp_customize->add_setting('footer_widget_background_image',array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'footer_widget_background_image',array(
    'label' => __('Footer Widget Background Image','omega-online-store'),
    'section' => 'footer_widget_area'
)));