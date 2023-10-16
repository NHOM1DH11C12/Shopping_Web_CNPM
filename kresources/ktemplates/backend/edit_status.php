<h1 class="page-header text-center">
    Cập nhật trạng thái đơn hàng
</h1>
<div class="col-sm-4 col-sm-offset-4">
    <div class="panel panel-login">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Đơn hàng số : </label><br/>
                <input type="text" class="form-group" value="<?php echo $_GET['order_id']?>" readonly>
                <label>Trạng thái:</label><br/>
                <?php edit_status(); ?>
                <select name='status'>
                    <option value='Đang xử lý'>Đang xử lý</option>
                    <option value='Đã xác nhận'>Đã xác nhận</option>
                    <option value='Đang giao hàng'>Đang giao hàng</option>
                    <option value='Đã hoàn thành'>Đã hoàn thành</option>
                </select>
                <div class="form-group text-left">
                    <input type='submit' name='edit_status' class='btn btn-success' value='Lưu'>
                </div>
                <div class='status-processing text-center'><i class='fa fa-spinner'></i> Đang xử lý</div>
                <div class='status-confirmed text-center'><i class='fa fa fa-check-circle-o'></i> Đã xác nhận</div>
                <div class='status-shipping text-center'><i class='fa fa-fw fa-truck'></i> Đang giao hàng</div>
                <div class='status-delivered text-center'><i class='fa fa-check-square-o'></i> Đã hoàn thành</div>

            </div>
        </form>
    </div>