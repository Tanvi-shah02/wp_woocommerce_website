<?php

    /**
    * Template Name: Services
    */
?>
<?php get_header(); ?>
<section class="default-two-column no-padd-top">
    <div class="auto-container">
        <div class="centered-title">
            <div class="page_title">
                <h3><?php wp_title(''); ?></h3>
            </div>
        </div>
        <?php
            $args = array(
            'post_type'        => 'servicess',
            'post_status'      => 'publish',
            'order'            =>  'ASC',
            'suppress_filters' => true 
            );

            $args_get_services = new WP_Query( $args );


            //echo "<pre>"; print_r($args_get_services); 
            if ( $args_get_services->have_posts() ) {
                while ( $args_get_services->have_posts() ) {


                    $args_get_services->the_post();
                ?>
                <div class="row clearfix">
                    <div class="column image-column col-md-4 col-sm-6 col-xs-12">
                        <figure class="image-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms"><?php the_post_thumbnail('medium'); ?></figure>
                    </div>
                    <div class="column text-column col-md-8 col-sm-6 col-xs-12 serv">
                        <div class="text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content();?>

                        </div>
                        <?php
                        if(get_the_ID()==29)
                        {
                        ?>
                        	<div class="link"><a href="<?php echo get_permalink(73); ?>" class="theme-btn btn-style-three">VIEW DETAILS <span class="icon icon-right fa fa-angle-right"></span></a></div>

                        <?php
                        }
                        else
                        {
			?>                        
                        <div class="link"><a href="<?php the_permalink(); ?>" class="theme-btn btn-style-three">VIEW DETAILS <span class="icon icon-right fa fa-angle-right"></span></a></div>
                        <?php } ?>
                    </div>

                </div>
                <?php

                }
                wp_reset_postdata();
            }
        ?>
    </div>
</section>
<?php get_footer(); ?>