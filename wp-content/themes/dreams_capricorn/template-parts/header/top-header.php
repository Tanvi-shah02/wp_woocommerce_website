<div class="container-xl">

    <div class="row row-small align-items-center">

        <div class="co1-12 col-lg-2 d-flex justify-content-between align-items-center">



          <?php /* 
          <button class="navbar-toggler d-lg-none border-0 my-3" type="button" data-toggle="collapse" data-target="#categoriesNavigation" aria-controls="categoriesNavigation" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          */
            ?>

            <a class="navbar-brand py-md-3" href="<?php echo site_url();?>"> <img src="<?php echo ot_get_option('site_logo'); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>"  class="img-fluid"> </a>



    <div class="mobile-elements d-flex d-md-none justify-content-lg-end align-items-center ml-auto pr-3">

            <a href="javascript:void()" class="search-toggle btn btn-light mr-1">
                
                
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 485.213 485.213" xml:space="preserve">
 
      <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324
			c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z"></path>
      <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951
			C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46
			c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465
			C318.424,257.208,257.206,318.416,181.956,318.416z"></path>
      <path d="M75.817,181.955h30.322c0-41.803,34.014-75.814,75.816-75.814V75.816C123.438,75.816,75.817,123.437,75.817,181.955z"></path>
   
</svg>
            </a>
            
           <div class="mobile-cart">
               <?php 
            
            echo do_shortcode('[mobile_cart_but]');
            
            ?>
            
          </div>  
 </div>  
            <button class="navbar-toggler d-lg-none border-0 my-3" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>



        </div>

        <div class="col-lg-10 py-0 py-md-3 d-md-flex flex-column header-contacts-wrap">

            <div class="header-contacts d-none d-md-flex justify-content-center justify-content-lg-end w-100">
           
<div class="row justify-content-end">
    <div class="col-md-auto">
            <?php $address = ot_get_option('address');

            if(!empty($address)){ ?>

            <div class="media contact-media ml-4">

                <div class="media-left">

              <span class="icon-circle d-flex justify-content-center align-items-center text-dark">

                  <i class="la la-map-marker la-lg"></i></span>

                </div>

                <div class="media-body"> <span class="text-primary d-block text-uppercase">Address</span><?= $address ?></div>

            </div>

            <?php }?>
    </div>
    <div class="col-md-auto">
        
            <?php $contact_no = ot_get_option('contact_no');

            if(!empty($contact_no)){ ?>

            <div class="media contact-media ml-4">

                <div class="media-left"> <span class="icon-circle d-flex justify-content-center align-items-center text-dark"> <i class="la la-mobile la-lg"></i></span> </div>

                <div class="media-body"> <span class="text-primary d-block text-uppercase">Call us</span>

                    <a href="tel:<?= $contact_no ?>" class="text-body"><?= $contact_no ?></a> </div>

                <?php }?>

            </div>
    </div>
</div>
            



        



 </div>

<div class="search-wrap w-100 pb-3 pb-md-0">

                <!--<input type="text" class="form-control" placeholder="What are you looking for?">

                <button type="submit" class="btn-search">

                    <i class="la la-search"></i>

                </button>-->
                <?php echo do_shortcode("[apsw_search_bar_preview]");?>
            </div>
        </div>

    </div>

</div>