<div class="copyright text-center text-md-left">
    <div class="row align-items-center">
        <div class="col-md-6">
            <p class="mb-0">&copy; <?php echo date('Y');?> <?php echo get_bloginfo( 'name' ); ?>. All rights reserved. </p>
        </div>
        <div class="col-md">
            <div class="footer-widget">
                <?php $socialLinks = ot_get_option('social_links'); ?>
                <?php if(!empty($socialLinks)){ ?>
                <ul class="social-links list-inline mb-0 text-center text-md-right">
                    <?php foreach($socialLinks as $socialLink){ ?>
                      <?php  //echo "<pre>"; print_r($socialLinks); die; ?>
                    <?php if(!empty($socialLink['href']) && !empty($socialLink['title'])){ ?>
                    <li class="list-inline-item"><a class="nav-link" href="<?php echo $socialLink['href']; ?>"><?php echo $socialLink['title']; ?></a></li>
                    <!--<li class="list-inline-item"><a class="nav-link" href="#"><i class="lab la-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="nav-link" href="#"><i class="lab la-google-plus-g"></i></a> </li>
                    <li class="list-inline-item"><a class="nav-link" href="#"><i class="lab la-linkedin-in"></i></a> </li>-->
                    <?php  }} ?>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</div>