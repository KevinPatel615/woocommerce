<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package the-fashion-woocommerce
 */
?>
<footer role="contentinfo">
    <?php if (get_theme_mod('the_fashion_woocommerce_show_hide_footer', true)){ ?>
    <?php //Set widget areas classes based on user choice
        $the_fashion_woocommerce_widget_areas = get_theme_mod('the_fashion_woocommerce_footer_widget_areas', '4');
        if ($the_fashion_woocommerce_widget_areas == '3') {
            $the_fashion_woocommerce_cols = 'col-lg-4 col-md-4';
        } elseif ($the_fashion_woocommerce_widget_areas == '4') {
            $the_fashion_woocommerce_cols = 'col-lg-3 col-md-3';
        } elseif ($the_fashion_woocommerce_widget_areas == '2') {
            $the_fashion_woocommerce_cols = 'col-lg-6 col-md-6';
        } else {
            $the_fashion_woocommerce_cols = 'col-lg-12 col-md-12';
        }
    ?>
    <div id="footer" class="copyright-wrapper">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $the_fashion_woocommerce_cols ); ?>">
                        <?php dynamic_sidebar( 'footer-1'); ?>
                    </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $the_fashion_woocommerce_cols ); ?>">
                        <?php dynamic_sidebar( 'footer-2'); ?>
                    </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $the_fashion_woocommerce_cols ); ?>">
                        <?php dynamic_sidebar( 'footer-3'); ?>
                    </div>
                <?php endif; ?> 
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <div class="sidebar-column <?php echo ( $the_fashion_woocommerce_cols ); ?>">
                        <?php dynamic_sidebar( 'footer-4'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php }?>
    <?php if (get_theme_mod('the_fashion_woocommerce_show_hide_copyright', true)) {?>
    <div class="copyright">
    <p><?php the_fashion_woocommerce_credit();?><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_footer_copy', __('By Themeshopy', 'the-fashion-woocommerce')));?></p>
    </div>
    <?php }?>
</footer>
<?php if( get_theme_mod( 'the_fashion_woocommerce_enable_disable_scroll',true) != '' || get_theme_mod( 'the_fashion_woocommerce_responsive_scroll',true) != '') { ?>
    <?php $the_fashion_woocommerce_theme_lay = get_theme_mod( 'the_fashion_woocommerce_scroll_setting','Right');
      if($the_fashion_woocommerce_theme_lay == 'Left'){ ?>
        <button id="scroll-top" class="left-align" title="<?php esc_attr_e('Scroll to Top','the-fashion-woocommerce'); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'the-fashion-woocommerce'); ?></span></button>
      <?php }else if($the_fashion_woocommerce_theme_lay == 'Center'){ ?>
        <button id="scroll-top" class="center-align" title="<?php esc_attr_e('Scroll to Top','the-fashion-woocommerce'); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'the-fashion-woocommerce'); ?></span></button>
      <?php }else{ ?>
        <button id="scroll-top" title="<?php esc_attr_e('Scroll to Top','the-fashion-woocommerce'); ?>">
        <i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'the-fashion-woocommerce'); ?></span></button>
    <?php }?>
<?php }?>

<?php wp_footer();?>
</body>
</html>