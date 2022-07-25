<!--

-----------------------------------------------------

	BANNER

-----------------------------------------------------

-->

<div class="banner-wrapper">

    <div class="container">

        <div class="row no-gutters justify-content-end">



           



            <?php $slides = ot_get_option( 'banner', array() ); ?>

            <?php if(!empty($slides)){?>

            <div class="col-md-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators justify-content-start mr-0 ml-5">

                        <?php $i = 0;

                        foreach ($slides as $slide) { ?>

                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ?"active":"" ?>"></li>

                            <?php $i++;} ?>

                    </ol>



                    <div class="carousel-inner">

                        <?php $i = 0;

                        foreach ($slides as $slide) { ?>

                        <div class="carousel-item <?php echo $i == 0 ?"active":"" ?>">

                            <img class="d-block w-100" src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">

                        </div>

                            <?php $i++;} ?>

                       <!-- <div class="carousel-item">

                            <img class="d-block w-100" src="images/assets/slider-01.jpg" alt="First slide">

                        </div>-->

                    </div>

                </div>

            </div>





        </div>

    </div>

</div>

<?php } ?>

