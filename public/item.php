<?php require_once('..\kresources\config.php'); ?>
<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    include(TEMPLATE_FRONT . DS . 'header_admin.php');
} else {
    include(TEMPLATE_FRONT . DS . 'header.php');
} ?>

<!-- Page Content -->
<div class="container">

    <!-- Side Navigation -->

    <?php include(TEMPLATE_FRONT . DS . 'side_nav.php'); ?>

    <?php
    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . " ");
    confirm($query);
    while ($row = fetch_array($query)):


        ?>





        <div class="col-md-9">

            <!--hiển thị hình ảnh và đoạn mô tả ngắn-->

            <div class="row">

                <div class="col-md-7">
                    <img class="img-responsive" src="..\kresources\<?php echo display_images($row['product_image']); ?>"
                        alt="">

                </div>

                <div class="col-md-5">

                    <div class="thumbnail">


                        <div class="caption-full">
                            <h4><a href="#">
                                    <?php echo $row['product_title'] ?>
                                </a> </h4>
                            <hr>
                            <h4 class="text-warning">
                                <?php echo number_format($row['product_price']) ?> VND
                            </h4>

                            <p>
                                <?php echo $row['short_desc'] ?>
                            </p>

                        </div>

                    </div>

                </div>


            </div><!--hiển thị hình ảnh và đoạn mô tả ngắn-->


            <hr>


            <!--Row for Tab Panel-->

            <div class="row">

                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab">Mô tả sản phẩm </a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh
                                giá</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <p>
                                <?php echo $row['product_description'] ?>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <?php display_report() ?>

                        </div>

                    </div>


                </div><!--Row for Tab Panel-->


            </div>
        </div>
    </div>
<?php endwhile; ?>

</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>