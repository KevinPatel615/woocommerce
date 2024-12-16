<?php
/**
 * Added Omega Page. */

/**
 * Add a new page under Appearance
 */
function omega_online_store_menu()
{
	add_theme_page(__('Omega Options', 'omega-online-store'), __('Omega Options', 'omega-online-store'), 'edit_theme_options', 'omega-online-store-theme', 'omega_online_store_page');
}
add_action('admin_menu', 'omega_online_store_menu');

function omega_online_store_notice() {
    global $pagenow;
    if (is_admin() && ('themes.php' == $pagenow) && isset($_GET['activated'])) {
        ?>
        <div class="notice notice-success is-dismissible">
            <div class="notice-content">
                <h2><?php esc_html_e('Thank You for installing Omega Online Store Theme!', 'omega-online-store') ?> </h2>
                <div class="info-link">
                    <a href="<?php echo esc_url( admin_url( 'themes.php?page=omega-online-store-theme' ) ); ?>"><?php esc_html_e('Omega Options', 'omega-online-store'); ?></a>
                </div>
                <div class="info-link">
                    <a href="<?php echo esc_url(OMEGA_ONLINE_STORE_LITE_DOCS_PRO); ?>" target="_blank"> <?php esc_html_e('Documentation', 'omega-online-store'); ?></a>
                </div>
                <div class="info-link">
                    <a href="<?php echo esc_url(OMEGA_ONLINE_STORE_BUY_NOW); ?>" target="_blank"> <?php esc_html_e('Upgrade to Pro', 'omega-online-store'); ?></a>
                </div>
                <div class="info-link">
                    <a href="<?php echo esc_url(OMEGA_ONLINE_STORE_DEMO_PRO); ?>" target="_blank"> <?php esc_html_e('Premium Demo', 'omega-online-store'); ?></a>
                </div>
            </div>
        </div>
    <?php }
}
add_action('admin_notices', 'omega_online_store_notice');


/**
 * Enqueue styles for the help page.
 */
function omega_online_store_admin_scripts($hook)
{
	wp_enqueue_style('omega-online-store-admin-style', get_template_directory_uri() . '/inc/get-started/get-started.css', array(), '');
}
add_action('admin_enqueue_scripts', 'omega_online_store_admin_scripts');

/**
 * Add the theme page
 */
function omega_online_store_page(){
$omega_online_store_user = wp_get_current_user();
$omega_online_store_theme = wp_get_theme();
?>
<div class="das-wrap">
  <div class="omega-online-store-panel header">
    <div class="omega-online-store-logo">
      <span></span>
      <h2><?php echo esc_html( $omega_online_store_theme ); ?></h2>
    </div>
    <p>
      <?php
            $omega_online_store_theme = wp_get_theme();
            echo wp_kses_post( apply_filters( 'omega_theme_description', esc_html( $omega_online_store_theme->get( 'Description' ) ) ) );
          ?>
    </p>
    <a class="btn btn-primary" href="<?php echo esc_url(admin_url('/customize.php?'));
?>"><?php esc_html_e('Edit With Customizer - Click Here', 'omega-online-store'); ?></a>
  </div>

  <div class="das-wrap-inner">
    <div class="das-col das-col-7">
      <div class="omega-online-store-panel">
        <div class="omega-online-store-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('If you are facing any issue with our theme, submit a support ticket here.', 'omega-online-store'); ?></h3>
          </div>
          <a href="<?php echo esc_url( OMEGA_ONLINE_STORE_SUPPORT_FREE ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Lite Theme Support.', 'omega-online-store'); ?></a>
        </div>
      </div>
      <div class="omega-online-store-panel">
        <div class="omega-online-store-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('Please write a review if you appreciate the theme.', 'omega-online-store'); ?></h3>
          </div>
          <a href="<?php echo esc_url( OMEGA_ONLINE_STORE_REVIEW_FREE ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Rank this topic.', 'omega-online-store'); ?></a>
        </div>
      </div>
       <div class="omega-online-store-panel"><div class="omega-online-store-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('Follow our lite theme documentation to set up our lite theme as seen in the screenshot.', 'omega-online-store'); ?></h3>
          </div>
          <a href="<?php echo esc_url( OMEGA_ONLINE_STORE_LITE_DOCS_PRO ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Lite Documentation.', 'omega-online-store'); ?></a>
        </div>
      </div>
    </div>
    <div class="das-col das-col-3">
      <div class="upgrade-div">
        <p><strong><?php esc_html_e('Premium Features Include:', 'omega-online-store'); ?></strong></p>
        <ul>
          <li>
          <?php esc_html_e('One Click Demo Content Importer', 'omega-online-store'); ?>
          </li>
          <li>
          <?php esc_html_e('Woocommerce Plugin Compatibility', 'omega-online-store'); ?>
          </li>
          <li>
          <?php esc_html_e('Multiple Section for the templates', 'omega-online-store'); ?>            
          </li>
          <li>
          <?php esc_html_e('For a better user experience, make the top of your menu sticky.', 'omega-online-store'); ?>  
          </li>
        </ul>
        <div class="text-center">
          <a href="<?php echo esc_url( OMEGA_ONLINE_STORE_BUY_NOW ); ?>" target="_blank"
            class="btn btn-success"><?php esc_html_e('Upgrade Pro $40', 'omega-online-store'); ?></a>
        </div>
      </div>
      <div class="omega-online-store-panel">
        <div class="omega-online-store-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('Kindly view the premium themes live demo.', 'omega-online-store'); ?></h3>
          </div>
          <a class="btn btn-primary demo" href="<?php echo esc_url( OMEGA_ONLINE_STORE_DEMO_PRO ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Live Demo.', 'omega-online-store'); ?></a>
        </div>
        <div class="omega-online-store-panel-content pro-doc">
          <div class="theme-title">
            <h3><?php esc_html_e('Follow our pro theme documentation to set up our premium theme as seen in the screenshot.', 'omega-online-store'); ?></h3>
          </div>
          <a href="<?php echo esc_url( OMEGA_ONLINE_STORE_DOCS_PRO ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Pro Documentation.', 'omega-online-store'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}