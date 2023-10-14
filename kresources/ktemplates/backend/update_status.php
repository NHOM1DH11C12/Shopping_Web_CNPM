<?php 
function up_sta(){
if (isset($_POST['update_status']) && isset($_POST['id'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];

    $query = "UPDATE buy SET status = '{$status}' WHERE id = '{$id}'";
    $result = query( $query);

    $query_orders = "UPDATE orders SET order_status = '{$status}' WHERE order_id = '{$id}'";
    $result_orders =query( $query_orders);

    if ($result && $result_orders) {
        set_message("Cập nhật trạng thái thành công");
        redirect("../admin/index.php?admin_order");
    }
}
}
?>
<?php if (isset($_GET['buy_id'])) { ?>
<form method="POST">
         <table class="table table-hover">
            <thead>
                  <tr>
                     <td>
                        <label>Trạng thái:</label>
                        <?php up_sta() ?>
                        <select name='status'>
                           <option value='Đang xử lý'>Đang xử lý</option>
                           <option value='Đã xác nhận'>Đã xác nhận</option>
                           <option value='Đã gửi hàng'>Đã gửi hàng</option>
                           <option value='Đã hoàn thành'>Đã hoàn thành</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2"><input type='submit' name='update_status' class='btn btn-success' value='Lưu'></td>
                  </tr>
               </div>
            </thead>
         </table>
      </form>
<?php } ?>