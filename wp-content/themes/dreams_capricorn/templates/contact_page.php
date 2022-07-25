<?php
/**

 * Template Name: Contact Page

 */
get_header(); ?>

<section class="inner-page-wrapper pb-md-5">

    <div class="pageheaing-wrapper py-2 py-md-5">
        <div class="container">
            <div class="page-heading">
                <h2 class="text-primary m-0"> <?php wp_title(''); ?> </h2>
            </div>
        </div>
    </div>


    <div class="auto-container pt-4">
            <div class="container">

                    <div class="row">
                        <div class="col-md-4">
                           <h4> Quick Contacts</h4>
                            <hr>

                            <?php $address = ot_get_option('address');
                            if(!empty($address)){ ?>
                                <div class="card border-0 shadow mb-4">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-left mr-3">
                                              <span class="icon-circle d-flex justify-content-center align-items-center text-dark">

                  <i class="la la-map-marker la-lg"></i></span>
                                            </div>
                                            <div class="media-body text-xl">
                                                <h6>Address </h6>
                                                <p class="mb-0 text-xl"><?php echo $address; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php $contact_no = ot_get_option('contact_no');
                            if(!empty($contact_no)){ ?>
                                <div class="card border-0 shadow mb-4">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-left mr-3">
                                               <span class="icon-circle d-flex justify-content-center align-items-center text-dark"> <i class="la la-mobile la-lg"></i></span>
                                            </div>
                                            <div class="media-body text-xl">
                                                <h6>Call Us </h6>
                                                <p class="mb-0 text-xl"><?php echo $contact_no; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>


                        <div class="col-md pl-md-5">
                             <h4>We would like to hear from you</h4>
                            <hr>
                            <div class="contact_form pt-3">
                            <?php echo do_shortcode('[contact-form-7 id="77" title="Contact form 1"]')?>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
<?php get_footer(); ?>