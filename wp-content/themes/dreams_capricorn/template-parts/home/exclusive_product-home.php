<section class="exclusive-products pt-3 pt-md-5">
    <div class="container-xl">
        <h2>Exclusive Products</h2>

        <?php
        $args = array(
            'numberposts' => 5,
            'order' => 'DESC',
            'post_type'   => array( 'product' ),
        );

        $exc_products = new WP_Query( $args );
        //echo "<pre>"; print_r($exc_products); die;
        if ( $exc_products->have_posts() ) {

            ?>

        <div class="exclusive-products-slider d-flex flex-column mt-md-n5">

            <div class="exclusive-products-nav products-nav d-flex justify-content-end align-self-end order-2 order-md-1">
            </div>

            <div class="exclusive-products-carousel owl-carousel owl-theme py-3 order-1 order-md-2">
                <?php while ( $exc_products->have_posts() ) {


                    $exc_products->the_post();
                    $price = get_post_meta( get_the_ID(), '_price', true );
                    $product_id = get_the_ID();
                    ?>

                    <div class="item py-4">
                    <div class="card border-0 card-product">
                        <div class="card-body">
                            <div class="product-module text-center">
                                <div class="product-image">
                                   <!-- <img src="images/assets/product-01.jpg" class="img-fluid" alt="product"/>-->
                                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => 'product']);?>
                                </div>
                                <h6 class="product-title font-weight-normal my-5"><?php the_title(); ?></h6>
                                <h4 class="text-primary"><?php echo wc_price( $price ); ?></h4>

                                <div class="product-hover-module text-center d-flex justify-content-center align-items-center">
                                    <?php
                                    $variation_ID = 0;
                                    $variations = '';
                                    $args = array(
                                        'post_type'     => 'product_variation',
                                        'post_status'   => array(  'publish' ),
                                        'numberposts'   => 1,
                                        'orderby'       => 'menu_order',
                                        'order'         => 'asc',
                                        'post_parent'   => get_the_ID() // get parent post-ID
                                    );
                                    $variations = get_posts( $args );
                                    if(!empty($variations)) {
                                        foreach ($variations as $variation) {

                                            $variation_ID = $variation->ID;
                                        }
                                        wp_reset_postdata();
                                    }

                                    ?>
                                    <?php echo do_shortcode('[ti_wishlists_addtowishlist product_id="'.get_the_ID().'" variation_id="'.$variation_ID.'"]');

                                    ?>
                                    <a class="btn btn-sm btn-info mx-1" href="<?php echo do_shortcode('[add_to_cart_url id="' . $product_id . '"]'); ?>"><i class="las la-shopping-bag la-lg"></i></a>
                                    <a href="<?php echo get_the_permalink($product_id); ?>" class="btn btn-sm btn-warning mx-1"><i class="las la-eye la-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }
                wp_reset_postdata();
            ?>

            </div>
        </div>
        <?php } ?>
    </div>
</section>
