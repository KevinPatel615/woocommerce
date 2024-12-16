<?php
//about theme info
add_action( 'admin_menu', 'the_fashion_woocommerce_abouttheme' );
function the_fashion_woocommerce_abouttheme() {    	
	add_theme_page( esc_html__('The Fashion Woocommerce Theme', 'the-fashion-woocommerce'), esc_html__('The Fashion Woocommerce Theme', 'the-fashion-woocommerce'), 'edit_theme_options', 'the_fashion_woocommerce_guide', 'the_fashion_woocommerce_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function the_fashion_woocommerce_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'the_fashion_woocommerce_admin_theme_style');

//guidline for about theme
function the_fashion_woocommerce_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to The Fashion Woocommerce Theme', 'the-fashion-woocommerce'); ?></h2>
 		<p><?php esc_html_e('The Fashion Woocommerce is a stylish and versatile WordPress theme designed to enhance the online presence of fashion-related businesses. With a contemporary and visually appealing layout, this theme caters to fashion boutiques, clothing stores, and online retailers. Its user-friendly design ensures a seamless shopping experience for customers, allowing them to explore and purchase products effortlessly. The themes responsive nature guarantees an optimal viewing experience across various devices, enhancing accessibility for a broader audience. The The Fashion Woocommerce WordPress Theme not only focuses on aesthetics but also prioritizes functionality. Its integration with WooCommerce provides a robust e-commerce platform, empowering businesses to manage inventory, process transactions, and offer a secure and convenient shopping environment. The themes customization optionsallow businesses to tailor their online storefront to align with their brand identity, ensuring a unique and memorable customer experience. This theme goes beyond the surface, incorporating essential features for an effective online fashion store. From product galleries and user-friendly navigation to secure payment gateways, the The Fashion Woocommerce WordPress Theme is equipped to meet the diverse needs of fashion entrepreneurs. With its clean and modern design, businesses can showcase their products in a visually compelling manner, attracting and engaging customers. Its intuitive design, e-commerce capabilities, and customizable features make it an ideal choice for those looking to establish a strong and visually appealing platform for their fashion endeavors.', 'the-fashion-woocommerce'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'the-fashion-woocommerce'); ?></a>
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'the-fashion-woocommerce'); ?></a>
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'the-fashion-woocommerce'); ?></a>
		</div>
	</div>
	<div class="button-bg">
		<button  role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'the-fashion-woocommerce'); ?></button>
		<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'the-fashion-woocommerce'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'the-fashion-woocommerce'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'the-fashion-woocommerce'); ?></a>
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Support', 'the-fashion-woocommerce'); ?></a>
			<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" target="_blank"><?php esc_html_e('Start Customizing', 'the-fashion-woocommerce'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'the-fashion-woocommerce'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'the-fashion-woocommerce'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'the-fashion-woocommerce'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'the-fashion-woocommerce'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'the-fashion-woocommerce'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'the-fashion-woocommerce'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>
	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'the-fashion-woocommerce'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'the-fashion-woocommerce'); ?></a>
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'the-fashion-woocommerce'); ?></a>
			<a href="<?php echo esc_url( THE_FASHION_WOOCOMMERCE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'the-fashion-woocommerce'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'The Fashion Woocommerce is a stylish and versatile WordPress theme designed to enhance the online presence of fashion-related businesses. With a contemporary and visually appealing layout, this theme caters to fashion boutiques, clothing stores, and online retailers. Its user-friendly design ensures a seamless shopping experience for customers, allowing them to explore and purchase products effortlessly. The themes responsive nature guarantees an optimal viewing experience across various devices, enhancing accessibility for a broader audience. The The Fashion Woocommerce WordPress Theme not only focuses on aesthetics but also prioritizes functionality. Its integration with WooCommerce provides a robust e-commerce platform, empowering businesses to manage inventory, process transactions, and offer a secure and convenient shopping environment. The themes customization optionsallow businesses to tailor their online storefront to align with their brand identity, ensuring a unique and memorable customer experience. This theme goes beyond the surface, incorporating essential features for an effective online fashion store. From product galleries and user-friendly navigation to secure payment gateways, the The Fashion Woocommerce WordPress Theme is equipped to meet the diverse needs of fashion entrepreneurs. With its clean and modern design, businesses can showcase their products in a visually compelling manner, attracting and engaging customers. Its intuitive design, e-commerce capabilities, and customizable features make it an ideal choice for those looking to establish a strong and visually appealing platform for their fashion endeavors.', 'the-fashion-woocommerce' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'the-fashion-woocommerce' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'the-fashion-woocommerce' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'the-fashion-woocommerce' ); ?></li>
				</ul>
			</div>
		</div>
	</div>
<script>
	function openPage(pageName,elmnt,color) {
	    var the_fashion_woocommerce_i, the_fashion_woocommerce_tabcontent, the_fashion_woocommerce_tablinks;
	    the_fashion_woocommerce_tabcontent = document.getElementsByClassName("tabcontent");
	    for (the_fashion_woocommerce_i = 0; the_fashion_woocommerce_i < the_fashion_woocommerce_tabcontent.length; the_fashion_woocommerce_i++) {
	        the_fashion_woocommerce_tabcontent[the_fashion_woocommerce_i].style.display = "none";
	    }
	    the_fashion_woocommerce_tablinks = document.getElementsByClassName("tablink");
	    for (the_fashion_woocommerce_i = 0; the_fashion_woocommerce_i < the_fashion_woocommerce_tablinks.length; the_fashion_woocommerce_i++) {
	        the_fashion_woocommerce_tablinks[the_fashion_woocommerce_i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;
	}
</script>
<?php } ?>