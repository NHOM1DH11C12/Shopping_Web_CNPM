<h1 class="page-header text-center">
    Cập nhật trạng thái đơn hàng
</h1>
<div class="col-sm-4 col-sm-offset-4">
    <div  class="panel panel-login">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Trạng thái:</label>
        <?php  edit_status(); ?>
        <select name='status'>
            <option value='Đang xử lý'>Đang xử lý</option>
            <option value='Đã xác nhận'>Đã xác nhận</option>
            <option value='Đang giao hàng'>Đang giao hàng</option>
            <option value='Đã hoàn thành'>Đã hoàn thành</option>
        </select>
        <input type='submit' name='edit_status' class='btn btn-success' value='Lưu'>
    </div>
</form>
</div>