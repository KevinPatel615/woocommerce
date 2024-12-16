<?php
/**
* Custom Addons.
*
* @package Omega Online Store
*/

$wp_customize->add_section( 'theme_pagination_options',
    array(
    'title'      => esc_html__( 'Customizer Custom Settings', 'omega-online-store' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_addons_panel',
    )
);

$wp_customize->add_setting( 'theme_pagination_options_alignment',
    array(
    // 'default'           => $omega_online_store_default['global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_online_store_sanitize_pagination_meta',
    )
);
$wp_customize->add_control( 'theme_pagination_options_alignment',
    array(
    'label'       => esc_html__( 'Pagination Alignment', 'omega-online-store' ),
    'section'     => 'theme_pagination_options',
    'type'        => 'select',
    'choices'     => array(
        'Center'    => esc_html__( 'Center', 'omega-online-store' ),
        'Right' => esc_html__( 'Right', 'omega-online-store' ),
        'Left'  => esc_html__( 'Left', 'omega-online-store' ),
        ),
    )
);

$wp_customize->add_setting( 'theme_breadcrumb_options_alignment',
    array(
    // 'default'           => $omega_online_store_default['global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_online_store_sanitize_pagination_meta',
    )
);
$wp_customize->add_control( 'theme_breadcrumb_options_alignment',
    array(
    'label'       => esc_html__( 'Breadcrumb Alignment', 'omega-online-store' ),
    'section'     => 'theme_pagination_options',
    'type'        => 'select',
    'choices'     => array(
        'Center'    => esc_html__( 'Center', 'omega-online-store' ),
        'Right' => esc_html__( 'Right', 'omega-online-store' ),
        'Left'  => esc_html__( 'Left', 'omega-online-store' ),
        ),
    )
);