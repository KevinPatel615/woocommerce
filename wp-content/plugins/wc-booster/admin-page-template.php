<div class="wc-booster-welcome-page">
    <div class="wc-booster-welcome-page-header">
        <div class="wc-booster-welcome-page-header-left">
            <h1>WC Booster - V <?php echo WC_Booster_Version; ?></h1>
            <p>Advance your business by giving customers a distinctive shopping experience with WC Booster</p>
        </div>

        <div class="wc-booster-welcome-page-header-right">
            <a href="//www.eaglevisionit.com/downloads/" target="_blank">
                <span class="dashicons dashicons-admin-customizer"></span>
                Browse Compatible Themes
            </a>          
            <a href="//www.eaglevisionit.com/downloads/wc-booster/" target="_blank" class="rate-us-btn">
                <span class="dashicons dashicons-star-filled"></span> 
                Rate Us 
            </a>
            <a href="//www.eaglevisionit.com/contact-us/" target="_blank" class="get-support-btn">
                <span class="dashicons dashicons-admin-links"></span>
                Get Support 
            </a>
          
        </div>
    </div>

    <div class="wc-booster-welcome-page-body">
        <div class="wc-booster-welcome-page-body-left">
            <h1>WC Booster Features</h1>
            <div class="wc-booster-blocks-wrapper">
                <?php
                $contents = WC_Booster_Helper::get_blocks_info();
                $pro_blocks = [
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">>
                                    <path
                                    fill="#ffffff"
                                    d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                    />
                                    </svg>',
                        'pro'  => true,
                        'title' => 'Carousel Category',
                        'description' => 'The Carousel Category block allows you to effortlessly create visually appealing Gutenberg WooCommerce product category sliders.',
                        'demo_link' => ''
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">>
                                    <path
                                    fill="#ffffff"
                                    d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                    />
                                    </svg>',
                        'pro'  => true,
                        'title' => 'Carousel Product Category',
                        'description' => 'The Carousel Product Category block empowers users to select product categories, enabling dynamic displays of filtered products.',
                        'demo_link' => ''
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 448 512">
                                    <path
                                        d="M128 136c0-22.1-17.9-40-40-40L40 96C17.9 96 0 113.9 0 136l0 48c0 22.1 17.9 40 40 40H88c22.1 0 40-17.9 40-40l0-48zm0 192c0-22.1-17.9-40-40-40H40c-22.1 0-40 17.9-40 40l0 48c0 22.1 17.9 40 40 40H88c22.1 0 40-17.9 40-40V328zm32-192v48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V136c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40zM288 328c0-22.1-17.9-40-40-40H200c-22.1 0-40 17.9-40 40l0 48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V328zm32-192v48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V136c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40zM448 328c0-22.1-17.9-40-40-40H360c-22.1 0-40 17.9-40 40v48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V328z"
                                    />
                                </svg>',
                        'pro'  => true,
                        'title' => 'Product Collage',
                        'description' => 'The Product Collage block enables users to highlight their store\'s products in a visually engaging colalge with different layouts',
                        'demo_link' => ''
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512">
                                    <path
                                        fill="#ffffff"
                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"
                                    />
                                </svg>',
                        'pro'  => true,
                        'title' => 'Advance Search',
                        'description' => 'The Advance Search Block provides instant search based on categories, enhancing the search experience for users on your website.',
                        'demo_link' => ''
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">
                                    <path
                                        fill="#ffffff"
                                        d="M504.3 273.6c4.9-4.5 7.7-10.9 7.7-17.6s-2.8-13-7.7-17.6l-112-104c-7-6.5-17.2-8.2-25.9-4.4s-14.4 12.5-14.4 22l0 56-192 0 0-56c0-9.5-5.7-18.2-14.4-22s-18.9-2.1-25.9 4.4l-112 104C2.8 243 0 249.3 0 256s2.8 13 7.7 17.6l112 104c7 6.5 17.2 8.2 25.9 4.4s14.4-12.5 14.4-22l0-56 192 0 0 56c0 9.5 5.7 18.2 14.4 22s18.9 2.1 25.9-4.4l112-104z"
                                    />
                                </svg>',
                        'pro'  => true,
                        'title' => 'Product Navigation',
                        'description' => 'Effortlessly browse between products on the single product page with this block, showcasing the previous and next products for easy navigation.',
                        'demo_link' => ''
                    ]
                ];

                $contents = array_merge( $contents, $pro_blocks );

                // sort by title
                usort($contents, function( $a, $b ){
                    return $a[ 'title' ] <=> $b[ 'title' ];
                });

                foreach( $contents as $block_id => $content ):
                    ?>
                    <div class="wc-booster-blocks-items">
                        <?php if( isset( $content[ 'pro' ] ) ): ?>
                            <span class="pro">Premium</span>
                        <?php endif; ?>

                        <div class="wc-booster-blocks-items-inner">
                            <div class="wc-booster-blocks-image">
                                <?php WC_Booster_Helper::render_svg( $content[ 'icon' ] ); ?>
                            </div>
                            <h3><?php echo esc_html( $content[ 'title' ] ); ?></h3>
                            <p><?php echo esc_html( $content[ 'description' ] ); ?></p>
                            <a href="#">Explore More</a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>       
    </div>
</div>