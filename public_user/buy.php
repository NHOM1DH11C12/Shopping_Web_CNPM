<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT_USER . DS . 'header_user.php'); ?>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    add_order();
}
?>
<!-- Page Content -->
<div class="container">


    <!-- /.row -->

    <div class="row">
        <br />
        <h4 class="text-center bg-danger">
            <?php display_message(); ?>
        </h4>
        <header>
            <br />
            <h1 class="text-center ">Đặt hàng</h1>
        </header>
        <div class="col-lg-4 col-md-6">
            <div>
                <div class="panel-heading">
                    <div class="row">
                        <table>
                            <?php buy_address(); ?>
                        </table>
                    </div>
                </div>
                <a href="user/index_user.php?address">
                    <div class="panel-footer">
                        <span class="pull-left">Thay đổi địa chỉ </span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    </div>
                </a>
            </div>


        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_name">
            <input type="hidden" name="price">
            <input type="hidden" name="quantity">
            <input type="hidden" name="amount">
            <input type="hidden" name="photo">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sản phẩm </th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>

                <tbody>
                    <?php buy_cart(); ?>
                </tbody>
            </table>

            <?php return_cart() ?>

            <!-- Thêm 2 thẻ radio vào đây -->
            <div class="form-group">
                <label for="direct"><input type="checkbox" name="payment"> Thanh toán trực
                    tiếp</label><br>
                <label for="redirect"><input type="checkbox" name="redirect"> Thanh toán
                    bằng VNPAY</label>
            </div>
            <script>
                const checkboxes = document.querySelectorAll('input[name="payment"]');
                checkboxes.forEach((checkbox) => {
                    checkbox.addEventListener('change', (event) => {
                        checkboxes.forEach((c) => {
                            if (c !== event.target) {
                                c.checked = false;
                            }
                        });
                    });
                });
            </script>

            <div id="buy-button" class="form-group" style="width: 100%;">

                <input type="submit" name="return_cart" class="btn btn-danger pull-left" value="Quay lại">
                <input type="submit" name="add_order" class="btn btn-primary pull-right" value="Đặt hàng">
            </div>
        </form>

    </div>
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT_USER.DS.'footer.php'); ?>