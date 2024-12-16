<?php
/**
 * The sidebar containing the main widget area
 * @package Omega Online Store
 */

$omega_online_store_default = omega_online_store_get_default_theme_options();

$omega_online_store_post_sidebar = esc_html( get_post_meta( $post->ID, 'omega_online_store_post_sidebar_option', true ) );
$omega_online_store_sidebar_column_class = 'column-order-2';

if (empty($omega_online_store_post_sidebar)) {
    $global_sidebar_layout = esc_html( get_theme_mod( 'global_sidebar_layout',$omega_online_store_default['global_sidebar_layout'] ) );
} else {
    $global_sidebar_layout = $omega_online_store_post_sidebar;
}
if ( ! is_active_sidebar( 'sidebar-1' ) || $global_sidebar_layout == 'no-sidebar' ) {
    return;
}

if ($global_sidebar_layout == 'left-sidebar') {
    $omega_online_store_sidebar_column_class = 'column-order-1';
}
 ?>

<aside id="secondary" class="widget-area <?php echo esc_attr($omega_online_store_sidebar_column_class) ; ?>">
    <div class="widget-area-wrapper">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>
