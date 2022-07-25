<nav class="navigation-wrapper bg-primary navbar-light navbar navbar-expand-lg p-0 justify-content-end">

    <div class="container">

        <div class="main-navigation">

            <div id="mainNavigation" class="collapse navbar-collapse">
<div class="row no-gutters w-100">
                

                <div class="col-lg-3 pr-0 categories_navigation mb-3 mb-md-0">

                    <span class="d-none d-md-block text-white font-weight-bold text-uppercase text-lg bg-warning p-3 d-block" href="#">Categories  </span>
                    
                   
                          <button class="btn-toggle border-0 my-3" type="button" data-toggle="collapse" data-target="#categoriesNavigation" aria-controls="categoriesNavigation" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    
                    <div id="categoriesNavigation" class="collapse w-100">

                    <div class="card border-0 rounded-0 h-100 bg-white pb-0 w-100 shadow">

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
                        echo '<ul class="list-group list-group-flush text-uppercase list-categories">';

                            foreach ($product_categories as $key => $category) {
                            echo '<li class="list-group-item">';
                                echo '<a href="'.get_term_link($category).'" >';
                                    echo $category->name;
                                    echo '</a>';
                                echo '</li>';
                            }
                            echo '</ul>';
                        }
                        ?>

                      <!--  <ul class="list-group list-group-flush mb-3 text-uppercase list-categories">

                            <li class="list-group-item"><a href="">Canvas</a></li>

                            <li class="list-group-item"><a href="">Canvas Frames</a></li>

                            <li class="list-group-item"><a href="">Posters</a></li>

                            <li class="list-group-item"><a href="">Unisex T-Shirts </a></li>

                            <li class="list-group-item"><a href="">Women's Jersey</a></li>

                            <li class="list-group-item"><a href="">Unisex Long Sleeve</a></li>

                            <li class="list-group-item"><a href="">Men's Long Sleeve Sport </a></li>

                            <li class="list-group-item"><a href="">Hoodie</a></li>

                            <li class="list-group-item"><a href="">Mask</a></li>

                            <li class="list-group-item"><a href="">Tote Bags</a></li>

                        </ul>

                        <a href="#" class="btn btn-info mx-3">More Categories</a>-->

                    </div></div>

                </div>

                <!--<ul class="navbar-nav main-nav justify-content-between">

                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>

                    <li class="nav-item"><a class="nav-link" href="#">Blog </a></li>

                    <li class="nav-item"><a class="nav-link" href="#">Shop </a></li>

                    <li class="nav-item"><a class="nav-link" href="#">Contact Us </a></li>

                    <li class="nav-item active"><a class="nav-link linl-account" href="#"><i class="la la-user la-lg"></i></a></li>

                    <li class="nav-item"><a class="nav-link linl-account" href="#"><i class="lar la-heart"></i></a></li>

                    <li class="nav-item"><a class="nav-link linl-account" href="#"><i class="las la-shopping-bag"></i></a></li>

                </ul>-->


                <div class="col-md-9 d-lg-flex">

                <?php

                if( has_nav_menu('primary') ){



                    //include ('submenu.php');

                    wp_nav_menu( array('theme_location'=>'primary', 'menu_class'=> 'navbar-nav main-nav justify-content-between w-100', 'container'=> '') );

                }



                if( has_nav_menu('topbar') ){

                    //include ('submenu.php');

                    wp_nav_menu( array('theme_location'=>'topbar', 'menu_class'=> 'navbar-nav main-nav user-nav justify-content-between ml-auto flex-row', 'container'=> '') );

                }

                ?>

               <!-- <ul class="navbar-nav main-nav justify-content-between">

                    <li class="nav-item active"><a class="nav-link linl-account" href="<?php /*echo get_the_permalink(107); */?>"><i class="la la-user la-lg"></i></a></li>

                    <li class="nav-item"><a class="nav-link linl-account" href="<?php /*echo get_the_permalink(148); */?>"><i class="lar la-heart"></i></a></li>

                    <li class="nav-item"><a class="nav-link linl-account" href="<?php /*echo get_the_permalink(105); */?>"><i class="las la-shopping-bag"></i></a></li>

                </ul>

-->


</div>
            </div>

        </div>

    </div>

</nav>