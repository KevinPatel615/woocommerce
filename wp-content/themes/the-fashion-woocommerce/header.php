<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package the-fashion-woocommerce
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">

    <!-- preloader -->
    <?php if(get_theme_mod('the_fashion_woocommerce_preloader_option',false)!= '' || get_theme_mod('the_fashion_woocommerce_responsive_preloader', false) != ''){ ?>
      <?php if(get_theme_mod('the_fashion_woocommerce_preloader_type_options', 'Preloader 1')  == 'Preloader 1') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div id="loader" class="rounded-circle"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      <?php } else if(get_theme_mod('the_fashion_woocommerce_preloader_type_options', 'Preloader 2') ==  'Preloader 2') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div class="loader">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      <?php }?>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'the-fashion-woocommerce' ); ?></a>

  <div id="header">
    <?php if( get_theme_mod('the_fashion_woocommerce_display_topbar',false) != ''){ ?>
      <div class="topbar">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-10 col-lg-10 col-md-6 col-12 mb-lg-0 mb-4 mb-md-0 align-self-center">
              <?php if( get_theme_mod('the_fashion_woocommerce_location_text') != '' ||  get_theme_mod('the_fashion_woocommerce_location_icon') != '') {?>
                <p class="location-text mb-0"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_location_icon','fas fa-map-marker-alt')); ?> me-3"></i><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_location_text')); ?></p>
              <?php }?>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 product-cart align-self-center d-flex justify-content-lg-end justify-content-md-end justify-content-center ">
              <?php if(class_exists('woocommerce')){ ?>
                <div class="cart_no">
                  <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','the-fashion-woocommerce' ); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_shopping_basket_icon','fas fa-shopping-basket')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'shopping cart','the-fashion-woocommerce' );?></span></a>
                  <span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
                </div>
                <?php }?>
                <?php if(get_theme_mod('the_fashion_woocommerce_search_option',true) != ''){ ?>
                  <div class="search-box position-relative">
                    <button type="button" class="search-open"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_searchopen_icon','fas fa-search')); ?>"></i></button>
                    <div class="search-open-box">
                      <div class="serach_inner">
                        <?php get_search_form(); ?>
                        <button type="button" class="search-close"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_searchclose_icon','fas fa-times')); ?>"></i></button>
                      </div>
                    </div>
                  </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
  <?php }?>
    <div class="container topbar-contact-box">
      <div class="row justify-content-md-center justify-content-lg-center">
        <div class="col-xl-12 col-lg-12 col-md-10 col-12 row-wrapper p-lg-0 p-md-0 p-2">
          <div class="inner-double-row-top">
            <div class="row justify-content-end">
              <div class="col-xl-2 col-lg-3 col-md-4 align-self-center">
                <div class="logo">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <?php $blog_info = get_bloginfo( 'name' ); ?>
                    <?php if ( ! empty( $blog_info ) ) : ?>
                      <?php if( get_theme_mod('the_fashion_woocommerce_site_title',true) != ''){ ?>
                        <?php if ( is_front_page() && is_home() ) : ?>
                          <h1 class="site-title text-uppercase pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                          <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></p>
                        <?php endif; ?>
                      <?php }?>
                    <?php endif; ?>
                    <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) :
                      ?>
                    <?php if( get_theme_mod('the_fashion_woocommerce_tagline',false) != ''){ ?>
                      <p class="site-description m-0">
                        <?php echo esc_html($description); ?>
                      </p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-xl-8 col-lg-7 col-md-8 col-12 pt-lg-0 pt-md-0 pt-3">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-5 topbar-phone">
                    <div class="row info-ctr">
                      <?php if( get_theme_mod( 'the_fashion_woocommerce_phone_text') != '' || get_theme_mod( 'the_fashion_woocommerce_phone_number') != '') { ?>
                          <div class="col-xl-2 col-lg-2 col-md-3 col-12 icon-ctr align-self-center ">
                            <div class="phone">
                              <i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_phone_no_icon','fas fa-phone')); ?>"></i>
                            </div>
                          </div>
                          <div class="col-xl-10 col-lg-10 col-md-9 col-12 align-self-center text-lg-start text-md-start text-center">
                            <h6><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_phone_text',''));?></h6>
                            <p><a href="tel:<?php echo esc_attr( get_theme_mod('the_fashion_woocommerce_phone_number','') ); ?>"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_phone_number',''));?></a></p>
                          </div>
                        <?php }?>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-7 align-self-center topbar-email">
                    <div class="row info-ctr">
                      <?php if( get_theme_mod( 'the_fashion_woocommerce_email_text') != '' || get_theme_mod( 'the_fashion_woocommerce_email_address') != '') { ?>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-12 icon-ctr align-self-center">
                              <div class="envelope">
                                <i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_email_address_icon','fas fa-envelope-open')); ?>"></i>
                              </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-9 col-12 align-self-center text-lg-start text-md-start text-center">
                              <h6><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_email_text',''));?></h6>
                              <p><a href="mailto:<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_email_address',''));?>"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_email_address',''));?><span class="screen-reader-text"><?php esc_html_e( 'example@gmail.com','the-fashion-woocommerce' );?></span></a></p>
                            </div>
                        <?php }?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4 align-self-center">
                <div class="social-media">
                  <?php if( get_theme_mod( 'the_fashion_woocommerce_facebook_url') != '' || get_theme_mod( 'the_fashion_woocommerce_twitter_url') != '' || get_theme_mod( 'the_fashion_woocommerce_pintrest_url') != '' || get_theme_mod( 'the_fashion_woocommerce_youtube_url') != '') { ?>
                    <div class="social-icons text-lg-end text-lg-start text-start">
                      <?php if( get_theme_mod( 'the_fashion_woocommerce_facebook_url') != '') { ?>
                        <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'the_fashion_woocommerce_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_facebook_icon','fab fa-facebook-f')); ?>" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','the-fashion-woocommerce' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'the_fashion_woocommerce_twitter_url') != '') { ?>
                        <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'the_fashion_woocommerce_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','the-fashion-woocommerce' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'the_fashion_woocommerce_pintrest_url') != '') { ?>
                        <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'the_fashion_woocommerce_pintrest_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_pintrest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','the-fashion-woocommerce' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'the_fashion_woocommerce_youtube_url') != '') { ?>
                        <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'the_fashion_woocommerce_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_youtube_icon','fab fa-youtube')); ?> m-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','the-fashion-woocommerce' );?></span></a>
                      <?php } ?>
                    </div>
                    <?php }?>
                </div>
              </div>
            </div>
          </div>
          <div class="inner-double-row-bottom">
            <div class="row">
              <div class="col-xl-2 col-lg-2 col-md-8 col-6 ">
              </div>
              <div class="main-header-box col-xl-10 col-lg-10 col-md-4 col-6 align-self-center">
                <div class="last-row p-0">
                  <div class="toggle-menu mobile-menu">
                    <button class="mobiletoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','the-fashion-woocommerce'); ?></span></button>
                  </div>
                  <div class="main-menu <?php if( get_theme_mod( 'the_fashion_woocommerce_sticky_header', false) != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?>">
                    <div id="menu-sidebar" class="nav sidebar text-center">
                      <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'the-fashion-woocommerce' ); ?>">
                        <?php
                          wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'main-menu-navigation clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        ?>
                      </nav>
                      <a href="javascript:void(0)" class="closebtn mobile-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','the-fashion-woocommerce'); ?></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>