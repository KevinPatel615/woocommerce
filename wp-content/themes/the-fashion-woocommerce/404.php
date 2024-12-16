<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package the-fashion-woocommerce
 */

get_header(); ?>

<main role="main" id="maincontent" class="content-ts">
	<div class="container">
        <div class="middle-align">
			<h1><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_title_404_page',__('404 Not Found','the-fashion-woocommerce')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_content_404_page',__('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','the-fashion-woocommerce')));?></p>
			<?php if( get_theme_mod('the_fashion_woocommerce_button_404_page','Back to Home Page') != ''){ ?>
				<div class="read-moresec my-4">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="button px-3 py-2"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_button_404_page',__('Back to Home Page','the-fashion-woocommerce')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('the_fashion_woocommerce_button_404_page',__('Back to Home Page','the-fashion-woocommerce')));?></span></a>
	        	</div>
        	<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>