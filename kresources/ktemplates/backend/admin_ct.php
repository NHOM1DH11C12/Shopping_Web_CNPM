<?php
function total_buy()
{
    $query = query("SELECT COUNT(id) as total FROM buy WHERE status='Đang xử lý'");
    confirm($query);
    // Xuất dữ liệu của mỗi hàng
    while ($row = fetch_array($query)) {
        $total = $row["total"];
        return $total;
    }
}
function total_product()
{
    $query = query("SELECT COUNT(product_id) as total FROM products");
    confirm($query);
    // Xuất dữ liệu của mỗi hàng
    while ($row = fetch_array($query)) {
        $total = $row["total"];
        return $total;
    }
}
function total_id()
{
    $query = query("SELECT COUNT(user_id) as total FROM users");
    confirm($query);
    // Xuất dữ liệu của mỗi hàng
    while ($row = fetch_array($query)) {
        $total = $row["total"];
        return $total;
    }
}
?>


<div class="row">
    <div class="col-lg-12">
        <h1>
            Công cụ
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>Công cụ
            </li>
        </ol>
    </div>
</div>
<div class="row">

    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-table fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo total_buy(); ?>
                        </div>
                        <div>Đơn hàng mới !</div>
                    </div>
                </div>
            </div>
            <a href="index.php?admin_order">
                <div class="panel-footer">
                    <span class="pull-left">Xem thêm </span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list-ol fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo total_product(); ?>
                        </div>
                        <div>Sản phẩm!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?products">
                <div class="panel-footer">
                    <span class="pull-left">Xem thêm</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user-cog fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo total_id(); ?>
                        </div>
                        <div>Tài khoản!</div>
                    </div>
                </div>
            </div>
            <a href="index.php?products">
                <div class="panel-footer">
                    <span class="pull-left">Xem thêm</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- /.row -->
<!-- SECOND ROW WITH TABLES-->


</div>
<!-- /.row -->