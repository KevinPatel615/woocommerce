<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package the-fashion-woocommerce
 */
?>

<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="archives" role="complementary" aria-label="firstsidebar" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'the-fashion-woocommerce' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="meta" role="complementary" aria-label="secondsidebar" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'the-fashion-woocommerce' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        <aside id="search" class="widget" role="complementary" aria-label="thirdsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Search', 'the-fashion-woocommerce' ); ?></h3>
            <?php get_search_form(); ?>
        </aside>
        <aside id="categories" class="widget" role="complementary" aria-label="forthsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Categories', 'the-fashion-woocommerce' ); ?></h3>
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>  
</div>