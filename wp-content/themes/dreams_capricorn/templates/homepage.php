<?php
    /**
    * Template Name: Homepage
    */
?>
<?php get_header(); ?>
<?php
get_template_part( 'template-parts/home/slider', 'home' );
get_template_part( 'template-parts/home/exclusive_product', 'home' );
get_template_part( 'template-parts/home/featured_product', 'home' );
get_template_part( 'template-parts/home/about_us', 'home' );
?>
<?php get_footer(); ?>