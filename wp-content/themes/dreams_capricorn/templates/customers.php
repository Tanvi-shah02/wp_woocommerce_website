<?php

/**



 * Template Name: Customers



 */

get_header(); ?>

<?php

// WP_Query arguments

$args = array(

    'post_type' => array( 'testimonial' ),

);



// The Query

$testimonials = new WP_Query( $args );

?>

<section class="inner-page-wrapper pb-md-5">

    <div class="pageheaing-wrapper py-2 py-md-5">

        <div class="container">

            <div class="page-heading">

                <h2 class="text-primary m-0">

                    <?php wp_title(''); ?>

                </h2>

            </div>

        </div>

    </div>

    <div class="auto-container pt-4">

        <div class="container">

            <div class="entry-content service-content">

                <div class="pb-4">

                    <?php

                    // TO SHOW THE PAGE CONTENTS

                    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->



                        <?php the_content(); ?> <!-- Page Content -->





                    <?php

                    endwhile; //resetting the page loop

                    wp_reset_query(); //resetting the page query

                    ?>

                </div>

                <div class="row">

                    <?php

                if ( $testimonials->have_posts() ) {

                    while ( $testimonials->have_posts() ) {

                        $testimonials->the_post();

                        ?>

                        <div class="col-md-6 mb-4">

                            <div class="card border-0 testimonials-card shadow  h-100">

                                <div class="card-body px-5 py-4">

                                    <div class="testimonials-content">

                                        <p><?php the_cfc_field('testimonials', 'testimonial-content'); ?></p>

                                        <h5 class="user-name text-primary mb-0"><?php the_cfc_field('testimonials', 'reviewer-name'); ?>,</h5>

                                        <span class="text-muted small"><?php the_cfc_field('testimonials', 'reviewer-identity-or-position'); ?></span>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php

                    }

                }

                ?>

                </div>

            </div>



        </div>

    </div>

</section>

<?php get_footer(); ?>