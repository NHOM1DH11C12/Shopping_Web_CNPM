<?php require_once('..\kresources\config.php');
function extra_name()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $username = escape_string($row['username']);
            return $username;
        }
    }
}
function extra_email()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $email = escape_string($row['email']);
            return $email;
        }
    }
}
?>
<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    include(TEMPLATE_FRONT_USER . DS . 'header_user.php');
} else {
    include(TEMPLATE_FRONT . DS . 'header.php');
} ?>

<div class="container">
    </br />
    <br />
    <br />
    <?php include(TEMPLATE_FRONT_USER . DS . 'user_side_nav.php'); ?>
    <?php
    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . " ");
    confirm($query);
    while ($row = fetch_array($query)): ?>





        <div class="col-md-9">
            <!--Row For Image and Short Description-->

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
                            <h4 class=" text-warning">
                                <?php echo number_format($row['product_price']) ?> VND
                            </h4>

                            <div class="ratings">

                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>

                                </p>
                            </div>

                            <p>
                                <?php echo $row['short_desc'] ?>
                            </p>


                            <form action="">
                                <div class="form-group">
                                    <?php if ($row['product_quantity'] > 0) { ?>
                                        <a href="..\kresources\cart.php?add=<?php echo $row['product_id']; ?>"
                                            class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    <?php } else {
                                        echo "Đã hết hàng";
                                    }
                                    ?>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>


            </div><!--Row For Image and Short Description-->


            <hr>


            <!--Row for Tab Panel-->

            <div class="row">

                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab">Mô tả sản phẩm </a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <p>
                                <?php echo $row['product_description'] ?>
                            </p>
                        </div>

                    </div>

                </div>


            </div><!--Row for Tab Panel-->




        </div><!-- col-md-9 end here-->
    <?php endwhile; ?>

</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>