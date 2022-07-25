<?php

    /**
    * Template Name:TESTIMONIAL
    */
?>
<?php get_header(); ?>
<article id="post-13" class="post-13 page type-page status-publish hentry">
      <section class="features-two">
        <div class="auto-container">
      <div class="centered-title">
            <h3>Client Testimonials</h3>
            <!--<div class="text">Lorem Ipsum is simply text only lorem ipsum is simply text only lorem ipsum is simply text only </div>-->
        </div>

    <div class="entry-content">
      
                <div class="faq-accordion" data-accordion-group="">    
                      <?php
                       $id=$_GET['id'];
                $args = array(
                'post_type'        => 'testimonial',
                'post_status'      => 'publish',
                'order'            =>  'ASC',
                'suppress_filters' => true 
                );

                $get_testimonials = get_posts($args);
                 //echo "<pre>"; print_r($get_testimonials); die;
                foreach($get_testimonials as $post_testimonials)
                {
                    $title = $post_testimonials->post_title;
                    $testimonials = get_post_meta($post_testimonials->ID,'wpcf-name', true);

                ?>
                  
                 <div data-accordion="" class="faq-main <?php  if($id==$post_testimonials->ID){ echo "open"; }else{ echo ""; } ?>">
                   <div data-control="" class="faq-title "><h4> 
                                        <?php 
                                      $str = $post_testimonials->post_content;
                                        $words = explode(" ",$str);
                                     //  echo implode(" ", array_splice($words, 0, 50))." ...";

                                    ?> 
                                    <?php
                                            $str = $testimonials; 
                                           $words1 = explode(" ",$title);
                                           $words2 = explode(" ",$str);

                                           $data = array_merge($words1, $words2);
                                       //   echo"<pre>";print_r($data);
                                            if(sizeof($data)<=18)
                                            {
                                                echo implode(" ", array_splice($data, 0, 18));
                                           }
                                            else
                                           {
                                                echo implode(" ", array_splice($data, 0, 18))." ...";    
                                            }

                                        ?>
                                             </h4></div>
                      <div data-content="" style="max-height: 76px; overflow: hidden; transition: max-height 300ms ease;">
                                      <div class="faq-content"><p>
                                        <?php 
                                     
                                        echo implode(" ", $words);

                                    ?> 
                                    </p>
                                       
                                           </div>
                                           </div>
                      </div>
                  <?php
                }
            ?>
                </div>
        <script type="text/javascript">
      jQuery(document).ready(function() {
        jQuery('.faq-accordion [data-accordion]').accordionfaq({
         singleOpen: true,
         transitionEasing: 'ease',
          transitionSpeed: 300        });        
      });
    </script>
    
        
            </div><!-- .entry-content -->
     </div>
    </section>
    
</article>
    <?php get_footer(); ?>
    