<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header_admin.php');
?>


<!-- Page Content -->
<div class="container">

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h1>Tất cả sản phẩm</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">


        <?php get_products_in_admin_shop_page() ?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->

<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>