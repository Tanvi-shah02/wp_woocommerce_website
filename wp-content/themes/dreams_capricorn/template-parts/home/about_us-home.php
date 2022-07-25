<section class="features-section py-2 py-md-5">

    <div class="container-xl">

        <div class="row">



            <?php $tab1 = ot_get_option('icon1');

            if(!empty($tab1)){ ?>

            <div class="col-md-3 mb-3 mb-md-0">

                <div class="card border-0 text-center h-100">

                    <div class="card-body px-3">

                        <?= $tab1 ?>

                        <h6 class="my-3"><?php echo ot_get_option('title1'); ?></h6>

                        <p><?php echo ot_get_option('description1'); ?></p>

                    </div>

                </div>

            </div>

            <?php } ?>



            <?php $tab2 = ot_get_option('icon2');

            if(!empty($tab2)){ ?>

            <div class="col-md-3 mb-3 mb-md-0">

                <div class="card border-0 text-center h-100">

                    <div class="card-body px-3">

                        <?= $tab2 ?>

                        <h6 class="my-3"><?php echo ot_get_option('title2'); ?></h6>

                        <p><?php echo ot_get_option('description2'); ?></p>

                    </div>

                </div>

            </div>

            <?php }?>





            <?php $tab3 = ot_get_option('icon3');

            if(!empty($tab3)){ ?>

                <div class="col-md-3 mb-3 mb-md-0">

                    <div class="card border-0 text-center h-100">

                        <div class="card-body px-3">

                            <?= $tab3 ?>

                            <h6 class="my-3"><?php echo ot_get_option('title3'); ?></h6>

                            <p><?php echo ot_get_option('description3'); ?></p>

                        </div>

                    </div>

                </div>

            <?php }?>



            <?php $tab4 = ot_get_option('icon4');

            if(!empty($tab4)){ ?>

                <div class="col-md-3 mb-3 mb-md-0">

                    <div class="card border-0 text-center h-100">

                        <div class="card-body px-3">

                            <?= $tab4 ?>

                            <h6 class="my-3"><?php echo ot_get_option('title4'); ?></h6>

                            <p><?php echo ot_get_option('description4'); ?></p>

                        </div>

                    </div>

                </div>

            <?php }?>



        </div>

    </div>

</section>