<?php
   register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'dream' ),
        'topbar' => __( 'Topbar Menu', 'dream' ),
        'footer_menu1' => __( 'Footer Menu 1', 'dream' ),
        'footer_menu2' => __( 'Footer Menu 2', 'dream' ),
        'bottom_menu' => __( 'Bottom Menu', 'dream' ),

    ) );
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
    function dream_widgets_init() {
         register_sidebar( array(
        'name'          => __( 'Contact page sidebar', 'dream' ),
        'id'            => 'contact-sidebar',
        'description'   => __( 'Add widgets here to appear in your contact page.', 'dream' ),
        'before_widget' => '<div class="footer-widget twitter-feeds">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ) );
        
         register_sidebar( array(
        'name'          => __( 'About Us', 'dream' ),
        'id'            => 'about_us',
        'description'   => __( 'Add widgets here to appear in your Footer section.', 'dream' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s edu-item edu-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="edu-widget-title">',
        'after_title'   => '</h3><div class="clear"></div>',
        ) );
         register_sidebar( array(
        'name'          => __( 'Subscription', 'dream' ),
        'id'            => 'subscription',
        'description'   => __( 'Add widgets here.', 'dream' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
        ) );
         register_sidebar( array(
        'name'          => __( 'Footer', 'dream' ),
        'id'            => 'footer',
        'description'   => __( 'Add widgets here.', 'dream' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Email Subscription', 'dream' ),
            'id'            => 'email_subscription',
            'description'   => __( 'Add widgets here.', 'dream' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    }
    add_action( 'widgets_init', 'dream_widgets_init' );
    
    function dream_scripts() {

        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array() );

        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css', array() );

        wp_enqueue_style( 'line_awesome', get_template_directory_uri() . '/css/line-awesome.min.css', array() );

    	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array() );

    	wp_enqueue_style( 'theam_style', get_template_directory_uri() . '/style.css', array(),'202001' );


    	wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'boostrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '2020', true );
    	wp_enqueue_script( 'html_shiv', get_template_directory_uri() . '/js/html5shiv.js', array( 'jquery' ), '2020', false );
    	//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array( 'jquery' ), '2020', false );
    	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), '2020', true );
    	wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '2020', true );
    	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), '2020', true );
        //wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array( 'jquery' ), '2020', false );
        wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), '2020', true );

    }
    add_action( 'wp_enqueue_scripts', 'dream_scripts',9999,1 );
    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 3);
    function special_nav_class($classes, $item, $args){

        if( in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        if($args->add_li_class) {
            $classes[] = $args->add_li_class;
        }
        return $classes;

        return $classes;
    }
add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}
function custom_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);
    return $menu;
}

add_filter('wp_nav_menu','custom_submenu_class');
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter( 'woocommerce_checkout_fields', 'custom_edit_checkout_fields' );

function custom_edit_checkout_fields( $fields ) {
    //echo "<pre>"; print_r($fields); die;
    foreach($fields as $key => $inner_field){
        foreach($inner_field as $key2 => $fld){
            $fields[$key][$key2]['input_class'][] = 'form-control';
            $fields[$key][$key2]['placeholder'] = $fields[$key][$key2]['label'];
            unset($fields[$key][$key2]['label']);
        }
    }

   return $fields;
}
//add_filter( 'woocommerce_shipping_fields', 'woocommerce_shipping_fields_edit' );

/*function woocommerce_shipping_fields_edit( $fields )
{
    //echo "<pre>"; print_r( $fields ); die;
    $fields['shipping_first_name']['input_class'] = array('form-control');
    $fields['shipping_first_name']['placeholder'] = 'First Name';
    $fields['shipping_first_name']['label'] = '';

    $fields['shipping_last_name']['input_class'] = array('form-control');
    $fields['shipping_last_name']['placeholder'] = 'Last Name';
    $fields['shipping_last_name']['label'] = '';

    $fields['shipping_company']['input_class'] = array('form-control');
    $fields['shipping_company']['placeholder'] = 'Company Name';
    $fields['shipping_company']['label'] = '';

    return $fields;
}*/
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', static function( $args ) {
    $args['class'] = 'custom-select';
    return $args;
}, 2 );
remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );

add_action('woocommerce_shop_loop_item_title', 'wmtChangeProductsTitle', 10 );
function wmtChangeProductsTitle() {
    echo '<h6 class="woocommerce-loop-product_title">' . get_the_title() . '</h6>';
}
/**** Cart button on menu ******/

add_shortcode ('woo_cart_but', 'woo_cart_but' );

function woo_cart_but() {
    ob_start();

    $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
    $cart_url = wc_get_cart_url();  // Set Cart URL

    ?>
    <li class="nav-item d-none d-md-inline">
        <a class="nav-link" href="<?php echo $cart_url; ?>" title="My Basket">
            <?php
            if ( $cart_count > 0 ) {
                ?>
                <span class="cart-contents-count"><?php echo $cart_count; ?></span>
                <?php
            }
            ?>
            <i class="las la-shopping-bag"></i>
        </a>
    </li>
    <?php

    return ob_get_clean();

}

/**** Header Cart button for Mobile ******/
add_shortcode ('mobile_cart_but', 'mobile_cart_but' );

function mobile_cart_but() { 
    ob_start();

    $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
    $cart_url = wc_get_cart_url();  // Set Cart URL

    ?>
    
        <a class="btn btn-primary btn-cart-mobile" href="<?php echo $cart_url; ?>" title="My Basket">
            <?php
            if ( $cart_count > 0 ) {
                ?>
                <span class="cart-contents-count badge badge-info"><?php echo $cart_count; ?></span>
                <?php
            }
            ?>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20px" height="20px"><path d="M 16 3 C 13.253906 3 11 5.253906 11 8 L 11 9 L 6.0625 9 L 6 9.9375 L 5 27.9375 L 4.9375 29 L 27.0625 29 L 27 27.9375 L 26 9.9375 L 25.9375 9 L 21 9 L 21 8 C 21 5.253906 18.746094 3 16 3 Z M 16 5 C 17.65625 5 19 6.34375 19 8 L 19 9 L 13 9 L 13 8 C 13 6.34375 14.34375 5 16 5 Z M 7.9375 11 L 11 11 L 11 14 L 13 14 L 13 11 L 19 11 L 19 14 L 21 14 L 21 11 L 24.0625 11 L 24.9375 27 L 7.0625 27 Z"/></svg>
           
        </a>
    <?php

    return ob_get_clean();

}

add_filter( 'wp_nav_menu_items', 'woo_cart_but_icon', 10, 2 ); // Change menu to suit - example uses 'top-menu'

/**
 * Add WooCommerce Cart Menu Item Shortcode to particular menu
 */
function woo_cart_but_icon ( $items, $args ) {

    if( $args->theme_location == 'topbar' ) {
        $items .= do_shortcode('[woo_cart_but]'); // Adding the created Icon via the shortcode already created
    }
    if ( is_user_logged_in() ) {
        $items = str_replace( "la la-user la-lg", "las la-user-check la-lg", $items );
    }
    return $items;
}

add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_display_quantity_plus' );

/**** Cart button on menu ******/

function bbloomer_display_quantity_plus() {
    echo '<button type="button" class="plus btn-quantity btn-quantity-plus" >+</button>';
}

add_action( 'woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_minus' );

function bbloomer_display_quantity_minus() {
    echo '<button type="button" class="minus btn-quantity btn-quantity-minus" >-</button>';
}


add_action( 'wp_footer', 'bbloomer_add_cart_quantity_plus_minus' );

function bbloomer_add_cart_quantity_plus_minus() {
    // Only run this on the single product page
    if ( ! is_product() ) return;
    ?>
    <script type="text/javascript">

        jQuery(document).ready(function($){

            $('form.cart').on( 'click', 'button.plus, button.minus', function() {

                // Get current quantity values
                var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
                var val   = parseFloat(qty.val());
                var max = parseFloat(qty.attr( 'max' ));
                var min = parseFloat(qty.attr( 'min' ));
                var step = parseFloat(qty.attr( 'step' ));

                // Change the value if plus or minus
                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( max <= val ) ) {
                        qty.val( max );
                    } else {
                        qty.val( val + step );
                    }
                } else {
                    if ( min && ( min >= val ) ) {
                        qty.val( min );
                    } else if ( val > 1 ) {
                        qty.val( val - step );
                    }
                }

            });
            var qty = $('.quantity').find( '.qty' );
            qty.change(function(){
                if(qty.val().length < 1){
                    qty.val(1);
                }
            });

        });

    </script>
    <?php
}
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

// define the woocommerce_process_login_errors callback
function filter_woocommerce_process_login_errors($validation_error, $post_username, $post_password)
{
    //if (strpos($post_username, '@') == FALSE)
    if (!filter_var($post_username, FILTER_VALIDATE_EMAIL)) //<--recommend option
    {
        throw new Exception( '<strong>' . __( 'Error', 'woocommerce' ) . ':</strong> ' . __( 'Please Enter a Valid Email ID.', 'woocommerce' ) );
    }
    return $validation_error;
}

// add the filter
add_filter('woocommerce_process_login_errors', 'filter_woocommerce_process_login_errors', 10, 3);
// Remove coupon code when user empty his cart
add_action('woocommerce_cart_item_removed', 'check_coupon_code_cart_items_removed', 10, 6 );
function check_coupon_code_cart_items_removed( $cart_item_key, $cart ){
    //echo "<pre>"; print_r(WC()->cart->get_coupons()); die;

    foreach ( WC()->cart->get_coupons() as $code => $coupon ){
        $cart->remove_coupon( $code );
    }

}
?>






