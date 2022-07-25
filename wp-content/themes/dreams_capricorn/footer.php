<footer class="footer py-3 py-md-5 bg-white">
    <div class="container">
        <div class="row pb-3">
            <?php get_template_part( 'template-parts/footer/navigation', 'footer' ); ?>
        </div>
        <hr>
        <?php get_template_part( 'template-parts/footer/bottom', 'footer' ); ?>
        
    </div>
</footer>
<script>
    /*jQuery(document).ready(function () {
        

    });*/
jQuery(function ($) {
    $(".input-subscribe .es-field-wrap .es_txt_email").addClass("form-control");
    
    $(".input-subscribe .es_submit_button").addClass("btn btn-block btn-primary"); 
   
});
    
jQuery(".search-toggle").click(function($){
    jQuery(".search-wrap").toggleClass("search-wrap-show"); 
})
    jQuery('.product-remove a').click(function () {
        jQuery( document ).ajaxComplete(function( event, request, settings ) {
            location.reload(true);
        });
    });
    jQuery('.but-cart-update').click(function () {
        jQuery( document ).ajaxComplete(function( event, request, settings ) {
            location.reload(true);
        });
    });



</script>


<?php wp_footer(); ?>
</body>
</html>
