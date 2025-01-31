<?php
/**
 * Custom Functions.
 *
 * @package Omega Online Store
 */

if( !function_exists( 'omega_online_store_fonts_url' ) ) :

    //Google Fonts URL
    function omega_online_store_fonts_url(){

        $font_families = array(
            'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
        );

        $fonts_url = add_query_arg( array(
            'family' => implode( '&family=', $font_families ),
            'display' => 'swap',
        ), 'https://fonts.googleapis.com/css2' );

        return esc_url_raw($fonts_url);

    }

endif;

if ( ! function_exists( 'omega_online_store_sub_menu_toggle_button' ) ) :

    function omega_online_store_sub_menu_toggle_button( $args, $item, $depth ) {

        // Add sub menu toggles to the main menu with toggles
        if ( $args->theme_location == 'omega-online-store-primary-menu' && isset( $args->show_toggles ) ) {
            
            // Wrap the menu item link contents in a div, used for positioning
            $args->before = '<div class="submenu-wrapper">';
            $args->after  = '';

            // Add a toggle to items with children
            if ( in_array( 'menu-item-has-children', $item->classes ) ) {

                $toggle_target_string = '.menu-item.menu-item-' . $item->ID . ' > .sub-menu';

                // Add the sub menu toggle
                $args->after .= '<button type="button" class="theme-aria-button submenu-toggle" data-toggle-target="' . $toggle_target_string . '" data-toggle-type="slidetoggle" data-toggle-duration="250" aria-expanded="false"><span class="btn__content" tabindex="-1"><span class="screen-reader-text">' . esc_html__( 'Show sub menu', 'omega-online-store' ) . '</span>' . omega_online_store_get_theme_svg( 'chevron-down' ) . '</span></button>';

            }

            // Close the wrapper
            $args->after .= '</div><!-- .submenu-wrapper -->';
            // Add sub menu icons to the main menu without toggles (the fallback menu)

        }elseif( $args->theme_location == 'omega-online-store-primary-menu' ) {

            if ( in_array( 'menu-item-has-children', $item->classes ) ) {

                $args->before = '<div class="link-icon-wrapper">';
                $args->after  = omega_online_store_get_theme_svg( 'chevron-down' ) . '</div>';

            } else {

                $args->before = '';
                $args->after  = '';

            }

        }

        return $args;

    }

endif;

add_filter( 'nav_menu_item_args', 'omega_online_store_sub_menu_toggle_button', 10, 3 );

if ( ! function_exists( 'omega_online_store_the_theme_svg' ) ):
    
    function omega_online_store_the_theme_svg( $svg_name, $return = false ) {

        if( $return ){

            return omega_online_store_get_theme_svg( $svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in omega_online_store_get_theme_svg();.

        }else{

            echo omega_online_store_get_theme_svg( $svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in omega_online_store_get_theme_svg();.

        }
    }

endif;

if ( ! function_exists( 'omega_online_store_get_theme_svg' ) ):

    function omega_online_store_get_theme_svg( $svg_name ) {

        // Make sure that only our allowed tags and attributes are included.
        $svg = wp_kses(
            Omega_Online_Store_SVG_Icons::get_svg( $svg_name ),
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
                'polyline' => array(
                    'fill'      => true,
                    'points'    => true,
                ),
                'line' => array(
                    'fill'      => true,
                    'x1'      => true,
                    'x2' => true,
                    'y1'    => true,
                    'y2' => true,
                ),
            )
        );
        if ( ! $svg ) {
            return false;
        }
        return $svg;

    }

endif;

if( !function_exists( 'omega_online_store_post_category_list' ) ) :

    // Post Category List.
    function omega_online_store_post_category_list( $select_cat = true ){

        $post_cat_lists = get_categories(
            array(
                'hide_empty' => '0',
                'exclude' => '1',
            )
        );

        $post_cat_cat_array = array();
        if( $select_cat ){

            $post_cat_cat_array[''] = esc_html__( '-- Select Category --','omega-online-store' );

        }

        foreach ( $post_cat_lists as $post_cat_list ) {

            $post_cat_cat_array[$post_cat_list->slug] = $post_cat_list->name;

        }

        return $post_cat_cat_array;
    }

endif;

if( !function_exists('omega_online_store_single_post_navigation') ):

    function omega_online_store_single_post_navigation(){

        $omega_online_store_default = omega_online_store_get_default_theme_options();
        $twp_navigation_type = esc_attr( get_post_meta( get_the_ID(), 'twp_disable_ajax_load_next_post', true ) );
        $current_id = '';
        $article_wrap_class = '';
        global $post;
        $current_id = $post->ID;
        if( $twp_navigation_type == '' || $twp_navigation_type == 'global-layout' ){
            $twp_navigation_type = get_theme_mod('twp_navigation_type', $omega_online_store_default['twp_navigation_type']);
        }

        if( $twp_navigation_type != 'no-navigation' && 'post' === get_post_type() ){

            if( $twp_navigation_type == 'theme-normal-navigation' ){ ?>

                <div class="navigation-wrapper">
                    <?php
                    // Previous/next post navigation.
                    the_post_navigation(array(
                        'prev_text' => '<span class="arrow" aria-hidden="true">' . omega_online_store_the_theme_svg('arrow-left',$return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Previous post:', 'omega-online-store') . '</span><span class="post-title">%title</span>',
                        'next_text' => '<span class="arrow" aria-hidden="true">' . omega_online_store_the_theme_svg('arrow-right',$return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Next post:', 'omega-online-store') . '</span><span class="post-title">%title</span>',
                    )); ?>
                </div>
                <?php

            }else{

                $next_post = get_next_post();
                if( isset( $next_post->ID ) ){

                    $next_post_id = $next_post->ID;
                    echo '<div loop-count="1" next-post="' . absint( $next_post_id ) . '" class="twp-single-infinity"></div>';

                }
            }

        }

    }

endif;

add_action( 'omega_online_store_navigation_action','omega_online_store_single_post_navigation',30 );

if( !function_exists('omega_online_store_content_offcanvas') ):

    // Offcanvas Contents
    function omega_online_store_content_offcanvas(){ ?>

        <div id="offcanvas-menu">
            <div class="offcanvas-wraper">
                <div class="close-offcanvas-menu">
                    <div class="offcanvas-close">
                        <a href="javascript:void(0)" class="skip-link-menu-start"></a>
                        <button type="button" class="button-offcanvas-close">
                            <span class="offcanvas-close-label">
                                <?php echo esc_html__('Close', 'omega-online-store'); ?>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="primary-nav-offcanvas" class="offcanvas-item offcanvas-main-navigation">
                    <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'omega-online-store'); ?>" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <?php
                            if (has_nav_menu('omega-online-store-primary-menu')) {
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'omega-online-store-primary-menu',
                                        'show_toggles' => true,
                                    )
                                );
                            }else{

                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'show_toggles' => true,
                                        'walker' => new Omega_Online_Store_Walker_Page(),
                                    )
                                );
                            }
                            ?>
                        </ul>
                    </nav><!-- .primary-menu-wrapper -->
                </div>
                <a href="javascript:void(0)" class="skip-link-menu-end"></a>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'omega_online_store_before_footer_content_action','omega_online_store_content_offcanvas',30 );

if( !function_exists('omega_online_store_footer_content_widget') ):

    function omega_online_store_footer_content_widget(){

        $omega_online_store_default = omega_online_store_get_default_theme_options();
        // print_r($omega_online_store_default); exit;
        
            $footer_column_layout = absint(get_theme_mod('footer_column_layout', $omega_online_store_default['footer_column_layout']));
            // echo 'asdasd';
            // print_r($footer_column_layout); exit;
            $footer_sidebar_class = 12;
            if($footer_column_layout == 2) {
                $footer_sidebar_class = 6;
            }
            ?>
           
            <div class="footer-widgetarea">
                <div class="wrapper">
                    <div class="column-row">

                        <?php for ($i=0; $i < $footer_column_layout; $i++) {
                            ?>
                            <div class="column <?php echo 'column-' . absint($footer_sidebar_class); ?> column-sm-12">
                                <?php dynamic_sidebar('omega-online-store-footer-widget-' . $i); ?>
                            </div>
                       <?php } ?>

                    </div>
                </div>
            </div>

        <?php

    }

endif;

add_action( 'omega_online_store_footer_content_action','omega_online_store_footer_content_widget',10 );

if( !function_exists('omega_online_store_footer_content_info') ):

    /**
     * Footer Copyright Area
    **/
    function omega_online_store_footer_content_info(){

        $omega_online_store_default = omega_online_store_get_default_theme_options(); ?>
        <div class="site-info">
            <div class="wrapper">
                <div class="column-row">

                    <div class="column column-9">
                        <div class="footer-credits">

                            <div class="footer-copyright">

                                <?php
                                $footer_copyright_text = wp_kses_post( get_theme_mod( 'footer_copyright_text', $omega_online_store_default['footer_copyright_text'] ) );
                                    echo esc_html( $footer_copyright_text );
                                    echo '<br>';
                                    echo esc_html__('Theme: ', 'omega-online-store') . 'Omega Online Store ' . esc_html__('By ', 'omega-online-store') . '  <span>' . esc_html__('OMEGA ', 'omega-online-store') . '</span>';
                                    echo esc_html__('Powered by ', 'omega-online-store') . '<a href="' . esc_url('https://wordpress.org') . '" title="' . esc_attr__('WordPress', 'omega-online-store') . '" target="_blank"><span>' . esc_html__('WordPress.', 'omega-online-store') . '</span></a>';
                                 ?>

                            </div>
                        </div>
                    </div>


                    <div class="column column-3 align-text-right">
                        <a class="to-the-top" href="#site-header">
                            <span class="to-the-top-long">
                                <?php
                                printf( esc_html__( 'To the Top %s', 'omega-online-store' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                                ?>
                            </span>
                            <span class="to-the-top-short">
                                <?php
                                printf( esc_html__( 'Up %s', 'omega-online-store' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                                ?>
                            </span>
                        </a>

                    </div>


                </div>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'omega_online_store_footer_content_action','omega_online_store_footer_content_info',20 );


if( !function_exists( 'omega_online_store_main_slider' ) ) :

    function omega_online_store_main_slider(){

        $omega_online_store_default = omega_online_store_get_default_theme_options();
        $omega_online_store_header_banner = get_theme_mod( 'omega_online_store_header_banner', $omega_online_store_default['omega_online_store_header_banner'] );
        $omega_online_store_header_banner_cat = get_theme_mod( 'omega_online_store_header_banner_cat' );

        if( $omega_online_store_header_banner ){

            $rtl = '';
            if( is_rtl() ){
                $rtl = 'dir="rtl"';
            }

            $banner_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 4,'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html( $omega_online_store_header_banner_cat ) ) );

            if( $banner_query->have_posts() ): ?>

            <div class="wrapper">
                <div class="theme-custom-block theme-banner-block">
                    <div class="swiper-container theme-main-carousel swiper-container" <?php echo $rtl; ?>>
                        <div class="swiper-wrapper">
                            <?php
                            while( $banner_query->have_posts() ):
                            $banner_query->the_post();
                            $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            $featured_image = isset( $featured_image[0] ) ? $featured_image[0] : ''; ?>
                                <div class="swiper-slide main-carousel-item">                                 
                                    <div class="theme-article-post">
                                        <div class="entry-thumbnail">
                                            <div class="data-bg data-bg-large" data-background="<?php echo esc_url($featured_image); ?>">
                                                <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                                            </div>
                                            <?php omega_online_store_post_format_icon(); ?>
                                        </div>
                                
                                        <div class="main-carousel-caption">
                                            <div class="post-content">
                                                <header class="entry-header">
                                                    <h2 class="entry-title entry-title-big">
                                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php the_title(); ?></span></a>
                                                    </h2>
                                                </header>


                                                <div class="entry-content">
                                                    <?php
                                                    if (has_excerpt()) {

                                                        the_excerpt();

                                                    } else {

                                                        echo esc_html(wp_trim_words(get_the_content(), 25, '...'));

                                                    } ?>
                                                </div>

                                                <a href="<?php the_permalink(); ?>" class="btn-fancy btn-fancy-primary" tabindex="0">
                                                    <?php echo esc_html__('Shop Collections', 'omega-online-store'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <?php
            wp_reset_postdata();
            endif;

        }

    }

endif;


if( !function_exists( 'omega_online_store_product_section' ) ) :

    function omega_online_store_product_section(){ 

        $omega_online_store_default = omega_online_store_get_default_theme_options();

        $omega_online_store_product_section_title = esc_html( get_theme_mod( 'omega_online_store_product_section_title',
        $omega_online_store_default['omega_online_store_product_section_title'] ) );

        $omega_online_store_product_section_button_title = esc_html( get_theme_mod( 'omega_online_store_product_section_button_title',
        $omega_online_store_default['omega_online_store_product_section_button_title'] ) );

        $omega_online_store_product_section_button_url = esc_html( get_theme_mod( 'omega_online_store_product_section_button_url',
        $omega_online_store_default['omega_online_store_product_section_button_url'] ) );

        $omega_online_store_product_enable_wishlist = esc_html( get_theme_mod( 'omega_online_store_product_enable_wishlist',
        $omega_online_store_default['omega_online_store_product_enable_wishlist'] ) );

        $omega_online_store_catData = get_theme_mod('omega_online_store_featured_product_category','');
        if ( class_exists( 'WooCommerce' ) ) {
            $omega_online_store_args = array(
                'post_type' => 'product',
                'posts_per_page' => 100,
                'product_cat' => $omega_online_store_catData,
                'order' => 'ASC'
            ); ?>

            <div class="theme-product-block">
                <div class="wrapper">
                    <div class="wrapper header-wrapper">
                        <?php if( $omega_online_store_product_section_title ){ ?>
                            <h3><?php echo esc_html( $omega_online_store_product_section_title ); ?></h3>
                        <?php } ?>
                        <?php if( $omega_online_store_product_section_button_title ){ ?>
                            <div class="">
                                <a href="<?php echo esc_url( $omega_online_store_product_section_button_url ); ?>" class="btn-fancy btn-fancy-primary" tabindex="0"><?php echo esc_html( $omega_online_store_product_section_button_title ); ?></a>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="product-image">
                        <?php $loop = new WP_Query( $omega_online_store_args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                            <div class="grid-items">
                                <figure>
                                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                                </figure>
                                <div class="shop-box">
                                    <span class="shop-cat">
                                        <?php $categories = get_the_term_list( $product->get_id(), 'product_cat');
                                        if ( $categories ) {
                                            echo wp_kses_post( $categories );
                                        } ?>
                                    </span>
                                    <?php if( $omega_online_store_product_enable_wishlist ){ ?>
                                    <span class="wish-list">
                                        <?php echo do_shortcode('[ti_wishlists_addtowishlist]'); ?>
                                        
                                    </span>
                                    <?php } ?>
                                </div>
                                <h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
                                <h6 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> "><?php echo $product->get_price_html(); ?></h6>
                                <div class="product-rating"><?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?></div>
                                <div class="product-cart">
                                    <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query();
                        } ?>
                    </div>
                </div>
            </div>
    <?php }

endif;


if (!function_exists('omega_online_store_post_format_icon')):

    // Post Format Icon.
    function omega_online_store_post_format_icon() {

        $format = get_post_format(get_the_ID()) ?: 'standard';
        $icon = '';
        $title = '';
        if( $format == 'video' ){
            $icon = omega_online_store_get_theme_svg( 'video' );
            $title = esc_html__('Video','omega-online-store');
        }elseif( $format == 'audio' ){
            $icon = omega_online_store_get_theme_svg( 'audio' );
            $title = esc_html__('Audio','omega-online-store');
        }elseif( $format == 'gallery' ){
            $icon = omega_online_store_get_theme_svg( 'gallery' );
            $title = esc_html__('Gallery','omega-online-store');
        }elseif( $format == 'quote' ){
            $icon = omega_online_store_get_theme_svg( 'quote' );
            $title = esc_html__('Quote','omega-online-store');
        }elseif( $format == 'image' ){
            $icon = omega_online_store_get_theme_svg( 'image' );
            $title = esc_html__('Image','omega-online-store');
        }
        
        if (!empty($icon)) { ?>
            <div class="theme-post-format">
                <span class="post-format-icom"><?php echo omega_online_store_svg_escape($icon); ?></span>
                <?php if( $title ){ echo '<span class="post-format-label">'.esc_html( $title ).'</span>'; } ?>
            </div>
        <?php }
    }

endif;

if ( ! function_exists( 'omega_online_store_svg_escape' ) ):

    /**
     * Get information about the SVG icon.
     *
     * @param string $svg_name The name of the icon.
     * @param string $group The group the icon belongs to.
     * @param string $color Color code.
     */
    function omega_online_store_svg_escape( $input ) {

        // Make sure that only our allowed tags and attributes are included.
        $svg = wp_kses(
            $input,
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
            )
        );

        if ( ! $svg ) {
            return false;
        }

        return $svg;

    }

endif;

if( !function_exists( 'omega_online_store_sanitize_sidebar_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function omega_online_store_sanitize_sidebar_option_meta( $input ){

        $metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'omega_online_store_sanitize_pagination_meta' ) ) :

    // Sidebar Option Sanitize.
    function omega_online_store_sanitize_pagination_meta( $input ){

        $omega_online_store_metabox_options = array( 'Center','Right','Left');
        if( in_array( $input,$omega_online_store_metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;