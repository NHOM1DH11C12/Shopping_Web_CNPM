<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header_admin.php'); ?>


<style>
    * {
        font-family: 'AR One Sans', sans-serif;
    }

    .container {

        font-family: 'AR One Sans', sans-serif !important;
    }
</style>

<!-- Page Content -->
<div class="container">
    <!--Categories here-->


    <div class="col-md-12">

        <div class="row carousel-holder">
            <?php include(TEMPLATE_FRONT . DS . 'side_nav.php'); ?>
            <div class="col-md-9">

                <!--Carouse-->
                <?php include(TEMPLATE_FRONT . DS . 'slider.php'); ?>

            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="col-md-12">

        <div class="row carousel-holder">
            <!--Product Functon-->
            <?php include(TEMPLATE_FRONT . DS . 'products.php'); ?>

        </div>

    </div>

</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>