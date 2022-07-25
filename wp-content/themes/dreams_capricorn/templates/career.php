<?php 
session_start();
if ($_SESSION["jobappmsg"] =="success") {
	$msg = '<div class="alert alert-success">'.ot_get_option("application_success_message").'</div>';
}elseif($_SESSION["jobappmsg"] =="unsuccess")
{
	$msg ='<div class="alert alert-danger">'.ot_get_option("application_unsuccessful_message").'</div>';		
} ?>
<?php

/**

 * Template Name: Career

 */

?>
<?php get_header(); ?>
<section class="inner-page-wrapper pb-md-5">
  <div class="pageheaing-wrapper py-2 py-md-5 bg-light-gray">
    <div class="container">
      <div class="page-heading">
        <h2 class="text-primary m-0">
          <?php wp_title(''); ?>
        </h2>
      </div>
    </div>
  </div>
  
  <!--Info Section--> 
  
  <!--Contact Section-->
  <?php //echo $msg; ?>
  <div class="career-section info-section pt-4">
    <div class="container">
      <?php echo $msg; unset($_SESSION["jobappmsg"]); ?>
      <div class="entry-content">
        <div class="row mb-4 mb-md-5">
           <div class="col-md-6">
                <?php
                 $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                      $myposts = get_post(get_the_ID()); ?>
                <img class="img-fluid" src="<?php echo $featured_img_url; ?>">
           </div> 
           <div class="col-md-6">
              <?php echo $myposts->post_content; ?>

           </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-8">
      <?php $myposts = get_posts( array(
                          'post_type'   => 'job-listing',
                           'posts_per_page' => -1) );
                           
            	foreach ($myposts as $mypost ) {
            			$meta = get_post_meta($mypost->ID);
            			$terms = get_the_terms($mypost->ID, 'key-skills');
            		?>
      <div class="career-panel mb-2 bg-white p-4">
        <div class="row">
          <div class="col-md-12">
            <h5> <?php echo (!empty($mypost->post_title))? $mypost->post_title : ""; ?> </h5>
            <span class="mr-3 small"> <i class="fa fa-map-marker mr-2"> </i> <span class="h6">Location :</span> <?php echo (!empty($meta))?$meta['wpcf-location'][0]:""; ?></span>
            <span class="mr-3 small"><i class="fa fa-graduation-cap mr-2"></i> <span class="h6">Qualification :</span> <?php echo (!empty($meta))?$meta['wpcf-qualification'][0]:""; ?> </span>
           
            <hr>
          </div>
          <div class="col-md-8">
            <h6>Skills</h6>
            <?php 
				            		if (!empty($terms)) {
				            		
						            		foreach ($terms as $termsmeta) {?>
            <span class="small"> <?php echo $termsmeta->name; ?>, </span>
            <?php }} ?>
          </div>
          <div class="col-md-4 text-md-right pt-3"> <a class="btn btn-sm btn-success" href="<?php echo $mypost->guid;?>">View More</a> </div>
        </div>
      </div>
      <?php } ?>
      
      </div>
      <div class="col-md-4 mb-5 mb-md-0">
      	<div class="card border-0 rounded-0 bg-light h-100 benefits-card">
	    <h5 class="card-title p-3 bg-gray m-0">Benefits</h5>
        <div class="card-body">
	    <!--<h6 class="text-gray-dark">Areeva Solutions offer a competitive package that includes the following benefits.</h6>-->
       	
        
        
        <?php $short_description = get_post_meta( get_the_ID(), 'wpcf-benefits', true );
								echo $short_description;?> 
                                
                                
           <?php  $url = wp_upload_dir();?>
          
          <!--<p class="small"> Areeva Solutions, LLC.  reserves the right to change any or all the above benefits from time to time.</p>
          <hr>
          <h6 class="text-gray-dark">Areeva Solutions, LLC. participates in the E-Verify program as required by law.</h6>-->
          <?php $e_verify = get_post_meta( get_the_ID(), 'wpcf-e-verify', true ); ?>
          <div class="mt-4"><a class="btn btn-primary" target="_blank" href="<?php echo $e_verify;?>">Learn more</a>
        </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<?php get_footer(); ?>
