<?php
/**
 * The template part for displaying single post
 *
 * @package the-fashion-woocommerce
 * @subpackage the-fashion-woocommerce
 * @since the-fashion-woocommerce 1.0
 */
?> 
<?php 
  $the_fashion_woocommerce_archive_year  = get_the_time('Y'); 
  $the_fashion_woocommerce_archive_month = get_the_time('m'); 
  $the_fashion_woocommerce_archive_day   = get_the_time('d'); 
?>  
<article class="page-box-single">
  <h1><?php the_title();?></h1>
  <?php if( get_theme_mod( 'the_fashion_woocommerce_show_featured_image_single_post',true) != '') { ?>
    <div class="box-img">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php } ?>
  <div class="new-text">
    <?php if( get_theme_mod( 'the_fashion_woocommerce_single_post_date_hide',true) != '' || get_theme_mod( 'the_fashion_woocommerce_single_post_comment_hide',true) != '' || get_theme_mod( 'the_fashion_woocommerce_single_post_author_hide',true) != '' || get_theme_mod( 'the_fashion_woocommerce_single_post_time_hide',true) != '') { ?>
      <div class="metabox">
        <?php if( get_theme_mod( 'the_fashion_woocommerce_single_post_date_hide',true) != '') { ?>
          <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_single_post_date_icon','fa fa-calendar')); ?>"></i><a href="<?php echo esc_url( get_day_link( $the_fashion_woocommerce_archive_year, $the_fashion_woocommerce_archive_month, $the_fashion_woocommerce_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('the_fashion_woocommerce_single_post_meta_seperator','|') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'the_fashion_woocommerce_single_post_comment_hide',true) != '') { ?>
          <span class="entry-comments"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_single_post_comment_icon','fas fa-comments')); ?>"></i><?php comments_number( __('0 Comments','the-fashion-woocommerce'), __('0 Comments','the-fashion-woocommerce'), __('% Comments','the-fashion-woocommerce') ); ?></span><?php echo esc_html( get_theme_mod('the_fashion_woocommerce_single_post_meta_seperator','|') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'the_fashion_woocommerce_single_post_author_hide',true) != '') { ?>
          <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_single_post_author_icon','fa fa-user')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('the_fashion_woocommerce_single_post_meta_seperator','|') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'the_fashion_woocommerce_single_post_time_hide',true) != '') { ?>
          <span class="entry-time"><i class="<?php echo esc_attr(get_theme_mod('the_fashion_woocommerce_single_post_time_icon','fas fa-clock')); ?>"></i> <?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
      </div>
    <?php }?>
    <?php if( get_theme_mod('the_fashion_woocommerce_category_show_hide',true) != ''){ ?>
      <div class="category-sec">
        <span class="category"><?php esc_html_e('Categories:','the-fashion-woocommerce'); ?></span>
        <?php the_category(); ?>
      </div>
    <?php } ?>
    <div class="entry-content"><p><?php the_content();?></p></div>
    <?php if( get_theme_mod( 'the_fashion_woocommerce_tags_hide',true) != '') { ?>
      <div class="tags"><p><?php
        if( $tags = get_the_tags() ) {
          echo '<i class="fas fa-tags"></i>';
          echo '<span class="meta-sep"></span>';
          foreach( $tags as $content_tag ) {
            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
          }
        } ?></p>
      </div>
    <?php } ?>

    <?php if( get_theme_mod( 'the_fashion_woocommerce_show_single_post_pagination',true) != '') { ?>
      <?php
      the_post_navigation( array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'the-fashion-woocommerce' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Next post:', 'the-fashion-woocommerce' ) . '</span> ',
        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'the-fashion-woocommerce' ) . '</span> ' .
          '<span class="screen-reader-text">' . __( 'Previous post:', 'the-fashion-woocommerce' ) . '</span> ',
      ) );
      echo '<div class="clearfix"></div>';?>
    <?php } ?>
    
  </div>

  <?php if( get_theme_mod( 'the_fashion_woocommerce_post_comment',true) != '') { 
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
  }?>

  <?php get_template_part('template-parts/related-posts'); ?>
</article>


              