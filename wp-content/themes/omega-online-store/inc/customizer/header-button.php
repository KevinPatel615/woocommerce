<?php
/**
* Header Options.
*
* @package Omega Online Store
*/

$omega_online_store_default = omega_online_store_get_default_theme_options();

// Header Section.
$wp_customize->add_section( 'button_header_setting',
	array(
	'title'      => esc_html__( 'Header Settings', 'omega-online-store' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting( 'omega_online_store_header_layout_20_per_discount_text',
    array(
    'default'           => $omega_online_store_default['omega_online_store_header_layout_20_per_discount_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_online_store_header_layout_20_per_discount_text',
    array(
    'label'    => esc_html__( 'Header Shipping Text', 'omega-online-store' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'omega_online_store_header_layout_email_address',
    array(
    'default'           => $omega_online_store_default['omega_online_store_header_layout_email_address'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'omega_online_store_header_layout_email_address',
    array(
    'label'    => esc_html__( 'Header Email Address', 'omega-online-store' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting('omega_online_store_header_layout_enable_translator',
    array(
        'default' => $omega_online_store_default['omega_online_store_header_layout_enable_translator'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_online_store_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_online_store_header_layout_enable_translator',
    array(
        'label' => esc_html__('Enable Google Translator', 'omega-online-store'),
        'section' => 'button_header_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('omega_online_store_sticky',
    array(
        'default' => $omega_online_store_default['omega_online_store_sticky'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'omega_online_store_sanitize_checkbox',
    )
);
$wp_customize->add_control('omega_online_store_sticky',
    array(
        'label' => esc_html__('Enable Sticky Header', 'omega-online-store'),
        'section' => 'button_header_setting',
        'type' => 'checkbox',
    )
);