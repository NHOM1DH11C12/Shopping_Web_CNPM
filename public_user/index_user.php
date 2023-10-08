<?php require_once('..\kresources\config.php'); ?>
<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    include(TEMPLATE_FRONT_USER . DS . 'header_user.php');
} else {
    include(TEMPLATE_FRONT . DS . 'header.php');
} ?>

<!-- Page Content -->
<div class="container">

    <div >

        <!--Categories here-->
        <?php include(TEMPLATE_FRONT_USER . DS . 'user_side_nav.php'); ?>

        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">

                    <!--Carouse-->
                    <?php include(TEMPLATE_FRONT_USER . DS . 'user_slider.php'); ?>

                </div>

                <!--Product Functon-->
                <?php include(TEMPLATE_FRONT_USER . DS . 'user_products.php');
                if (isset($_GET['address'])) {
                    include(TEMPLATE_BACK_USER . '\address.php');
                }

                ;
                ?>

            </div>
        </div>

        </div>

    </div>
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>