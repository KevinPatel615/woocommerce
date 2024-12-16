<?php
/**
 * Template Name: Custom home
 */
get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'the_fashion_woocommerce_above_slider' ); ?>
  
  <?php if( get_theme_mod( 'the_fashion_woocommerce_slider_hide', false) != '' || get_theme_mod( 'the_fashion_woocommerce_responsive_slider', true) != '') { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_slider_speed_option', 3000)); ?>">
        <?php $the_fashion_woocommerce_slider_pages = array();
          for ( $the_fashion_woocommerce_count = 1; $the_fashion_woocommerce_count <= 4; $the_fashion_woocommerce_count++ ) {
            $mod = intval( get_theme_mod( 'the_fashion_woocommerce_slider_page' . $the_fashion_woocommerce_count ));
            if ( 'page-none-selected' != $mod ) {
              $the_fashion_woocommerce_slider_pages[] = $mod;
            }
          }
          if( !empty($the_fashion_woocommerce_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $the_fashion_woocommerce_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel text-start">
                  <?php if( get_theme_mod('the_fashion_woocommerce_slider_small_title') != '' ){ ?>
                    <div class="mb-1">
                      <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_slider_small_title',''));?></span>
                    </div>
                  <?php }?>
                  <?php if( get_theme_mod('the_fashion_woocommerce_slider_title_Show_hide',true) != ''){ ?>
                    <h1 class="m-0"><?php the_title(); ?></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('the_fashion_woocommerce_slider_content_Show_hide',true) != ''){ ?>
                    <p><?php $the_fashion_woocommerce_excerpt = get_the_excerpt(); echo esc_html( the_fashion_woocommerce_string_limit_words( $the_fashion_woocommerce_excerpt, esc_attr(get_theme_mod('the_fashion_woocommerce_slider_excerpt_length','20')))); ?></p>
                  <?php } ?>
                  <?php if (get_theme_mod( 'the_fashion_woocommerce_slider_button_show_hide',true) != ''){ ?>
                    <div class="slider-btns">
                    <?php if( get_theme_mod('the_fashion_woocommerce_slider_button','Read More') != '' || get_theme_mod('the_fashion_woocommerce_slider_button_url') != ''){ ?>
                      <div class="readbtn">
                        <a href="<?php echo esc_url(get_theme_mod('the_fashion_woocommerce_slider_button_url')!= '') ? esc_url(get_theme_mod('the_fashion_woocommerce_slider_button_url')) : esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_slider_button','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_slider_button','Read More'));?></span></a>
                      </div>
                    <?php } ?>
                    <?php if( get_theme_mod('the_fashion_woocommerce_slider_button','Book Your Appointment') != '' || get_theme_mod('the_fashion_woocommerce_slider_button_url1') != ''){ ?>
                      <div class="readbtn1">
                        <a href="<?php echo esc_url(get_theme_mod('the_fashion_woocommerce_slider_button_url1')!= '') ? esc_url(get_theme_mod('the_fashion_woocommerce_slider_button_url1')) : esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_slider_button1','Book Your Appointment'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_slider_button1','Book Your Appointment'));?></span></a>
                      </div>
                    <?php } ?>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','the-fashion-woocommerce' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','the-fashion-woocommerce' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'the_fashion_woocommerce_below_slider' ); ?>

<!-- fashion post -->
<?php if( get_theme_mod( 'the_fashion_woocommerce_category_cat_') || get_theme_mod( 'the_fashion_woocommerce_category_cat2_') || get_theme_mod( 'the_fashion_woocommerce_category_cat3_') || get_theme_mod( 'the_fashion_woocommerce_category_cat4_') || get_theme_mod( 'the_fashion_woocommerce_category_cat4_')) { ?>
<div id="fashion-section">
  <div class="container">
    <div class="fashion-box-cat">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4">
          <div class="fashion-box wow zoomInUp delay-1000" data-wow-duration="3s">
            <?php
            $the_fashion_woocommerce_c_category = get_theme_mod('the_fashion_woocommerce_category_cat_');
            if ($the_fashion_woocommerce_c_category) {
                $the_fashion_woocommerce_cat_obj = get_category_by_slug($the_fashion_woocommerce_c_category);
                $the_fashion_woocommerce_cat_name = isset( $the_fashion_woocommerce_cat_obj->name ) ? $the_fashion_woocommerce_cat_obj->name : '';
                $the_fashion_woocommerce_cat_id = isset( $the_fashion_woocommerce_cat_obj->term_id ) ? $the_fashion_woocommerce_cat_obj->term_id : '';
                $the_fashion_woocommerce_cat_link = get_category_link($the_fashion_woocommerce_cat_id);
                $the_fashion_woocommerce_thumbnail_id = get_term_meta($the_fashion_woocommerce_cat_id, 'category_image', true);?>
                <div class="box">
                  <?php
                    if ( $the_fashion_woocommerce_thumbnail_id ) {
                      echo '<img class="thumb_img" src="' . esc_url( $the_fashion_woocommerce_thumbnail_id ) . '" alt="" />';
                  }?>
                  <div class="box-content">
                    <div class="row">
                      <div class="col-lg-10 col-md-9 col-9">
                        <?php if( get_theme_mod('the_fashion_woocommerce_cat_small_title') != '' ){ ?>
                          <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_cat_small_title',''));?></span>
                        <?php }?>
                         <?php
                          if ($the_fashion_woocommerce_cat_name) { ?>
                              <h2 class="category-title">
                                  <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>" tabindex="0">
                                      <?php echo esc_html($the_fashion_woocommerce_cat_name); ?>
                                  </a>
                              </h2>
                          <?php } ?>
                      </div>
                      <div class="col-lg-2 col-md-3 col-3 read-btn align-self-center">
                        <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_category_icon1','fas fa-chevron-right')); ?>"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php } ?>
          </div>
          <div class="fashion-box wow zoomInUp delay-1000" data-wow-duration="3s">
            <?php
            $the_fashion_woocommerce_c_category = get_theme_mod('the_fashion_woocommerce_category_cat2_');
            if ($the_fashion_woocommerce_c_category) {
                $the_fashion_woocommerce_cat_obj = get_category_by_slug($the_fashion_woocommerce_c_category);
                $the_fashion_woocommerce_cat_name = isset( $the_fashion_woocommerce_cat_obj->name ) ? $the_fashion_woocommerce_cat_obj->name : '';
                $the_fashion_woocommerce_cat_id = isset( $the_fashion_woocommerce_cat_obj->term_id ) ? $the_fashion_woocommerce_cat_obj->term_id : '';
                $the_fashion_woocommerce_cat_link = get_category_link($the_fashion_woocommerce_cat_id);
                $the_fashion_woocommerce_thumbnail_id = get_term_meta($the_fashion_woocommerce_cat_id, 'category_image', true);?>
                <div class="box">
                  <?php
                    if ( $the_fashion_woocommerce_thumbnail_id ) {
                      echo '<img class="thumb_img" src="' . esc_url( $the_fashion_woocommerce_thumbnail_id ) . '" alt="" />';
                  }?>
                  <div class="box-content">
                    <div class="row">
                      <div class="col-lg-10 col-md-9 col-9">
                        <?php if( get_theme_mod('the_fashion_woocommerce_cat_small_title2') != '' ){ ?>
                          <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_cat_small_title2',''));?></span>
                        <?php }?>
                         <?php
                          if ($the_fashion_woocommerce_cat_name) { ?>
                              <h2 class="category-title">
                                  <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>" tabindex="0">
                                      <?php echo esc_html($the_fashion_woocommerce_cat_name); ?>
                                  </a>
                              </h2>
                          <?php } ?>
                      </div>
                      <div class="col-lg-2 col-md-3 col-3 read-btn align-self-center">
                        <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_category_icon2','fas fa-chevron-right')); ?>"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
          <div class="fashion-box1 wow zoomInUp delay-1000" data-wow-duration="3s">
            <?php
              $the_fashion_woocommerce_c_category = get_theme_mod('the_fashion_woocommerce_category_cat3_');
              if ($the_fashion_woocommerce_c_category) {
                  $the_fashion_woocommerce_cat_obj = get_category_by_slug($the_fashion_woocommerce_c_category);
                  $the_fashion_woocommerce_cat_name = isset( $the_fashion_woocommerce_cat_obj->name ) ? $the_fashion_woocommerce_cat_obj->name : '';
                  $the_fashion_woocommerce_cat_id = isset( $the_fashion_woocommerce_cat_obj->term_id ) ? $the_fashion_woocommerce_cat_obj->term_id : '';
                  $the_fashion_woocommerce_cat_link = get_category_link($the_fashion_woocommerce_cat_id);
                  $the_fashion_woocommerce_thumbnail_id = get_term_meta($the_fashion_woocommerce_cat_id, 'category_image', true);?>
                  <div class="box1">
                    <?php
                      if ( $the_fashion_woocommerce_thumbnail_id ) {
                        echo '<img class="thumb_img" src="' . esc_url( $the_fashion_woocommerce_thumbnail_id ) . '" alt="" />';
                    }?>
                    <div class="box-content1 text-center">
                      <?php if( get_theme_mod('the_fashion_woocommerce_cat_small_title3') != '' ){ ?>
                        <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_cat_small_title3',''));?></span>
                      <?php }?>
                       <?php
                        if ($the_fashion_woocommerce_cat_name) { ?>
                            <h2 class="category-title">
                                <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>" tabindex="0">
                                    <?php echo esc_html($the_fashion_woocommerce_cat_name); ?>
                                </a>
                            </h2>
                        <?php } ?>
                        <div class="read-more-arrow">
                          <a class="p-3" href="<?php echo esc_html(get_theme_mod('the_fashion_woocommerce_fashion_btn_link',''));?>">
                            <?php echo esc_html(get_theme_mod('the_fashion_woocommerce_service_button_label', __('View All Categories', 'the-fashion-woocommerce'))); ?>
                            <span class="screen-reader-text">
                              <?php echo esc_html(get_theme_mod('the_fashion_woocommerce_service_button_label', __('View All Categories', 'the-fashion-woocommerce'))); ?>
                            </span>
                          </a>
                        </div>
                    </div>
                  </div>
              <?php } ?>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
          <div class="fashion-box wow zoomInUp delay-1000" data-wow-duration="3s">
            <?php
            $the_fashion_woocommerce_c_category = get_theme_mod('the_fashion_woocommerce_category_cat4_');
            if ($the_fashion_woocommerce_c_category) {
                $the_fashion_woocommerce_cat_obj = get_category_by_slug($the_fashion_woocommerce_c_category);
                $the_fashion_woocommerce_cat_name = isset( $the_fashion_woocommerce_cat_obj->name ) ? $the_fashion_woocommerce_cat_obj->name : '';
                $the_fashion_woocommerce_cat_id = isset( $the_fashion_woocommerce_cat_obj->term_id ) ? $the_fashion_woocommerce_cat_obj->term_id : '';
                $the_fashion_woocommerce_cat_link = get_category_link($the_fashion_woocommerce_cat_id);
                $the_fashion_woocommerce_thumbnail_id = get_term_meta($the_fashion_woocommerce_cat_id, 'category_image', true);?>
                <div class="box">
                  <?php
                    if ( $the_fashion_woocommerce_thumbnail_id ) {
                      echo '<img class="thumb_img" src="' . esc_url( $the_fashion_woocommerce_thumbnail_id ) . '" alt="" />';
                  }?>
                  <div class="box-content">
                    <div class="row">
                      <div class="col-lg-10 col-md-9 col-9">
                        <?php if( get_theme_mod('the_fashion_woocommerce_cat_small_title4') != '' ){ ?>
                          <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_cat_small_title4',''));?></span>
                        <?php }?>
                         <?php
                          if ($the_fashion_woocommerce_cat_name) { ?>
                              <h2 class="category-title">
                                  <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>" tabindex="0">
                                      <?php echo esc_html($the_fashion_woocommerce_cat_name); ?>
                                  </a>
                              </h2>
                          <?php } ?>
                      </div>
                      <div class="col-lg-2 col-md-3 col-3 read-btn align-self-center">
                        <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_category_icon4','fas fa-chevron-right')); ?>"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php } ?>
          </div>
          <div class="fashion-box wow zoomInUp delay-1000" data-wow-duration="3s">
            <?php
            $the_fashion_woocommerce_c_category = get_theme_mod('the_fashion_woocommerce_category_cat5_');
            if ($the_fashion_woocommerce_c_category) {
                $the_fashion_woocommerce_cat_obj = get_category_by_slug($the_fashion_woocommerce_c_category);
                $the_fashion_woocommerce_cat_name = isset( $the_fashion_woocommerce_cat_obj->name ) ? $the_fashion_woocommerce_cat_obj->name : '';
                $the_fashion_woocommerce_cat_id = isset( $the_fashion_woocommerce_cat_obj->term_id ) ? $the_fashion_woocommerce_cat_obj->term_id : '';
                $the_fashion_woocommerce_cat_link = get_category_link($the_fashion_woocommerce_cat_id);
                $the_fashion_woocommerce_thumbnail_id = get_term_meta($the_fashion_woocommerce_cat_id, 'category_image', true);?>
                <div class="box">
                  <?php
                    if ( $the_fashion_woocommerce_thumbnail_id ) {
                      echo '<img class="thumb_img" src="' . esc_url( $the_fashion_woocommerce_thumbnail_id ) . '" alt="" />';
                  }?>
                  <div class="box-content">
                    <div class="row">
                      <div class="col-lg-10 col-md-9 col-9">
                        <?php if( get_theme_mod('the_fashion_woocommerce_cat_small_title5') != '' ){ ?>
                          <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_cat_small_title5',''));?></span>
                        <?php }?>
                         <?php
                          if ($the_fashion_woocommerce_cat_name) { ?>
                              <h2 class="category-title">
                                  <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>" tabindex="0">
                                      <?php echo esc_html($the_fashion_woocommerce_cat_name); ?>
                                  </a>
                              </h2>
                          <?php } ?>
                      </div>
                      <div class="col-lg-2 col-md-3 col-3 read-btn align-self-center">
                        <a href="<?php echo esc_url($the_fashion_woocommerce_cat_link); ?>"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_category_icon5','fas fa-chevron-right')); ?>"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php do_action( 'the_fashion_woocommerce_post_section' ); ?>

  <div id="content">
    <div class="container entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>