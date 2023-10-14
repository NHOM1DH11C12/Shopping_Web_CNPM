<h1 class="page-header text-center">
   Đơn hàng
</h1>
<h4 class="bg-success" align="center">
   <?php display_message(); ?>
</h4>

<form method="POST">

<h4 class="text-right">Chỉnh sửa trạng thái đơn hàng theo ID:</h4>
               <div class="text-right">
                  <table class="table table-hover">
                  <tr>
                     <td><label>ID: </label><input type="text" name="id"></td>
                  </tr>
                  <tr>
                     <td>
                        <label>Trạng thái:</label>
                        <?php update_status() ?>
                        <select name='status'>
                           <option value='Đang xử lý'>Đang xử lý</option>
                           <option value='Đã xác nhận'>Đã xác nhận</option>
                           <option value='Đang giao hàng'>Đang giao hàng</option>
                           <option value='Đã hoàn thành'>Đã hoàn thành</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2"><input type='submit' name='update_status' class='btn btn-success' value='Lưu'></td>
                  </tr></table>
               </div>

</form>
<table class="table table-hover">
   <?php display_adorder(); ?>
</table>