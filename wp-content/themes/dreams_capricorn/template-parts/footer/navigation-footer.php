<div class="col-lg-3">
    <div class="footer-widget">
        <h6 class="footer-widget-title">Company</h6>
        <?php
        if( has_nav_menu('bottom_menu') ){
            //include ('submenu.php');
            wp_nav_menu( array('theme_location'=>'bottom_menu', 'menu_class'=> 'footer-widget-links list-inline', 'container'=> '') );?>
        <?php }
        ?>
    </div>
</div>


<div class="col-md">
    <div class="footer-widget">
        <h6 class="footer-widget-title">Categories</h6>
<?php
$orderby = 'name';
$order = 'asc';
$hide_empty = false ;
$cat_args = array(
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
    'exclude' => 20,
    'parent' => 0,
);
$product_categories = get_terms( 'product_cat', $cat_args );
if( !empty($product_categories) ){
    echo '<ul class="footer-widget-links list-inline">';

    foreach ($product_categories as $key => $category) {
        echo '<li class="nav-item">';
        echo '<a href="'.get_term_link($category).'" >';
        echo $category->name;
        echo '</a>';
        echo '</li>';
    }
    echo '</ul>';
}
?>
    </div>
</div>

<!--<div class="col-md">
    <div class="footer-widget">
        <h6 class="footer-widget-title">Categories</h6>
        <?php
/*        if( has_nav_menu('footer_menu1') ){

            //include ('submenu.php');
            wp_nav_menu( array('theme_location'=>'footer_menu1', 'menu_class'=> 'footer-widget-links list-inline', 'container'=> '') );*/?>
        <?php /*}
        */?>
    </div>
</div>-->

<div class="col-md">
    <div class="footer-widget">
        <h6 class="footer-widget-title">Policies</h6>
        <?php
        if( has_nav_menu('footer_menu2') ){

            //include ('submenu.php');
            wp_nav_menu( array('theme_location'=>'footer_menu2', 'menu_class'=> 'footer-widget-links list-inline', 'container'=> '') );?>
        <?php }
        ?>
        <!--<ul class="footer-widget-links list-inline">
            <li class="nav-item"><a class="nav-link" href="#">Terms of Use</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Security</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Return &amp; Refund</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Payment Policy</a></li>
        </ul>-->
    </div>
</div>

<div class="col-md-4">
    <div class="footer-widget">
        <h6 class="footer-widget-title">Subscribe to Email List</h6>
        <div class="input-subscribe mb-lg-3 mb-1">
            <?php echo do_shortcode( '[email-subscribers-form id="1"]' ); ?>
        </div>
    </div>
</div>