<?php
/**
* Layouts Settings.
*
* @package Omega Online Store
*/

$omega_online_store_default = omega_online_store_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'layout_setting',
	array(
	'title'      => esc_html__( 'Global Layout Settings', 'omega-online-store' ),
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting( 'global_sidebar_layout',
    array(
    'default'           => $omega_online_store_default['global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'omega_online_store_sanitize_sidebar_option',
    )
);
$wp_customize->add_control( 'global_sidebar_layout',
    array(
    'label'       => esc_html__( 'Global Sidebar Layout', 'omega-online-store' ),
    'section'     => 'layout_setting',
    'type'        => 'select',
    'choices'     => array(
        'right-sidebar' => esc_html__( 'Right Sidebar', 'omega-online-store' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'omega-online-store' ),
        'no-sidebar'    => esc_html__( 'No Sidebar', 'omega-online-store' ),
        ),
    )
);
