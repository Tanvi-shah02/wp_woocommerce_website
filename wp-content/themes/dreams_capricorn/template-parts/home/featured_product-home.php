<section class="features-products pt-3 pt-md-5">
    <div class="container-xl">
        <h2>Featured Products</h2>

        <?php
        $meta_query  = WC()->query->get_meta_query();
        $tax_query   = WC()->query->get_tax_query();
        $tax_query[] = array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
            'operator' => 'IN',
        );

        $args = array(
            'post_type'           => 'product',
            'post_status'         => 'publish',
            'posts_per_page'      => -1,
            'meta_query'          => $meta_query,
            'tax_query'           => $tax_query,
        );

        $featured_query = new WP_Query( $args );
        //echo "<pre>";  print_r($featured_query); die;

        if ($featured_query->have_posts()) {
            //echo "<pre>";  print_r($featured_query); die;
        ?>

        <div class="features-products-slider d-flex flex-column mt-md-n5">

            <div class="features-products-nav products-nav d-flex justify-content-end align-self-end order-2 order-md-1">
            </div>

            <div class="features-products-carousel owl-carousel owl-theme py-3 order-1 order-md-2">

                <?php

                if ($featured_query->have_posts()) {

                    while ($featured_query->have_posts()) :

                        $featured_query->the_post();

                        $product = get_product( $featured_query->post->ID );
                        $price = $product->get_price_html();

                    ?>

                <div class="item py-4">
                    <div class="card border-0 card-product">
                        <div class="card-body">
                            <div class="product-module text-center">
                                <div class="product-image">
                                  <!--  <img src="images/assets/product-01.jpg" class="img-fluid" alt="product"/>-->
                                    <?php echo woocommerce_get_product_thumbnail(); ?>
                                </div>

                                <h6 class="product-title font-weight-normal my-5"><?php the_title(); ?></h6>
                                <h4 class="text-primary"><?php  echo $price; ?></h4>

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
                                    <?php echo do_shortcode('[ti_wishlists_addtowishlist product_id="'.get_the_ID().'" variation_id="'.$variation_ID.'"]');?>
                                    <a class="btn btn-sm btn-info mx-1" href="<?php echo do_shortcode('[add_to_cart_url id="' . get_the_ID() . '"]'); ?>"><i class="las la-shopping-bag la-lg"></i></a>
                                    <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="btn btn-sm btn-warning mx-1"><i class="las la-eye la-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php   endwhile; }

                ?>

            </div>
        </div>
        <?php wp_reset_query(); }
        ?>

    </div>
</section>
