<?php 
if( !class_exists( 'WC_Booster_Wish_List_Table_Block' ) ){

	class WC_Booster_Wish_List_Table_Block extends WC_Booster_Base_Block{

		public $slug = 'wish-list-table';

		/**
		* Title of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $title = 'Wish List Table';

		/**
		* Description of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $description = 'This Block renders wishlist items, providing users with a comprehensive view of their saved products for easy management and reference.';

		/**
		* SVG Icon for this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $icon = '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><path fill="#ffffff" d="M64 256V160H224v96H64zm0 64H224v96H64V320zm224 96V320H448v96H288zM448 256H288V160H448v96zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg>';

	    protected static $instance;
	    
	    public static function get_instance() {
	        if ( null === self::$instance ) {
	            self::$instance = new self();
	        }
	        return self::$instance;
	    }

		public function render( $attrs, $content, $block ) {
		    $wishlist_instance = WC_Booster_Wishlist::get_instance();
		    $wishlisted_items = $wishlist_instance->get_wishlist();

		    if ( ! is_array( $wishlisted_items ) || empty( $wishlisted_items ) ) {
		        return '<div class="wc-booster-empty-wishlist" style="display:block"> '. esc_html__( 'The Wishlist is empty.', 'wc-booster' ) .'</div>';
		    }

		    $product_ids = array_column( $wishlisted_items, 'product_id' );
		    $wishlist_query_args = array(
		        'post_type'      => array( 'product', 'product_variation' ),
		        'post_status'    => array( 'publish', 'trash' ),
		        'posts_per_page' => -1,
		        'post__in'       => $product_ids,
		        'orderby'        => 'post__in',
		        'order'          => 'asc'
		    );

		    $wishlists = new WP_Query( $wishlist_query_args );

		    if ( ! $wishlists->have_posts() ) {
		        return '<div class="wc-booster-empty-wishlist" style="display:block"> '. esc_html__( 'The Wishlist is empty.', 'wc-booster' ) .'</div>';
		    }

		    ob_start();
		    $this->table_template( $wishlists );
		    wp_reset_postdata();
		    return ob_get_clean();
		}

		public function table_template( $wishlists ){ ?>
			<table class="wc-booster-wishlist-table">
		        <thead class="wc-booster-table-head">
		            <tr>
		                <th><?php  esc_html_e( 'SN', 'wc-booster' ); ?></th>
		                <th><?php  esc_html_e( 'Product', 'wc-booster' ); ?></th>
		                <th><?php  esc_html_e( 'Price', 'wc-booster' ); ?></th>
		                <th><?php  esc_html_e( 'Quantity', 'wc-booster' ); ?></th>
		                <th></th>
		            </tr>
		        </thead>
		        <tbody>
		            <?php foreach ( $wishlists->posts as $i => $product_post ) :
		                $product = wc_get_product( $product_post->ID ); ?>
		                <tr>
		                    <td class="product-count"><?php echo $i + 1; ?></td>
		                    <td class="product-title-img">
		                        <a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		                            <?php echo $product->get_image( array( 100, 80 ) ) ?>
		                            <?php echo esc_html( $product->get_title() ); ?>
		                        </a>
		                    </td>
		                    <td class="product-price"><?php echo $product->get_price_html(); ?></td>
		                    <td class="product-qty">
								<?php $qty =  get_post_meta( $product->get_id(), '_stock', true ); ?>
								<?php echo woocommerce_quantity_input( null != $qty ? array( 'input_value' => $qty, 'min_value' => 1 ) : array( 'min_value' => 1 ), $product ); ?>
								<input type="hidden" class="prod-id" name="prod_id" value="<?php echo esc_attr( $product->get_id() ); ?>"/>
							</td>
		                    <td class="add-to-cart-btn">
		                        <?php
		                        $add_to_cart_args = array(
		                            'add-to-cart' => $product->get_id()
		                        );
		                        $qty = isset( $qty ) ? $qty : 1;
		                        ?>
		                        <?php echo do_shortcode( '[add_to_cart quantity="' . $qty . '" show_price="false" style="" id="' . $product->get_id() . '"]' ); ?>

		                        <button class="product-remove-btn" data-id="<?php echo esc_attr( $product_post->ID ); ?>">
		                            <i class="fa-regular fa-trash-can"></i>
		                        </button>
		                    </td>
		                </tr>
		            <?php endforeach; ?>
		        </tbody>
		    </table>

		<?php
		}
	}

	WC_Booster_Wish_List_Table_Block::get_instance();
}