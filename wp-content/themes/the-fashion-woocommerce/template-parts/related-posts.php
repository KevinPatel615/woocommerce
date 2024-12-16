<?php $the_fashion_woocommerce_related_posts = the_fashion_woocommerce_related_posts();
if(get_theme_mod('the_fashion_woocommerce_show_related_post',true)==1){ ?>
<?php if ( $the_fashion_woocommerce_related_posts->have_posts() ): ?>
    <div class="related-posts">
        <?php if ( get_theme_mod('the_fashion_woocommerce_related_post_title','Related Posts') != '' ) {?>
            <h3 class="mb-3"><?php echo esc_html( get_theme_mod('the_fashion_woocommerce_related_post_title',__('Related Posts','the-fashion-woocommerce')) ); ?></h3>
        <?php }?>
        <div class="row">
            <?php while ( $the_fashion_woocommerce_related_posts->have_posts() ) : $the_fashion_woocommerce_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-box mb-3 p-2">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="p-0"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
                        <div class="entry-content"><p><?php $the_fashion_woocommerce_excerpt = get_the_excerpt(); echo esc_html( the_fashion_woocommerce_string_limit_words( $the_fashion_woocommerce_excerpt, esc_attr(get_theme_mod('the_fashion_woocommerce_related_post_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('the_fashion_woocommerce_post_suffix_option','...') ); ?></p></div>
                        <?php if( get_theme_mod('the_fashion_woocommerce_button_text','Read More') != ''){ ?>
                            <div class="read-more-btn">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_button_text','Read More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>