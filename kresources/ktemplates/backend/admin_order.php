<div>
   <h1 class="text-center">
      Đơn hàng
   </h1>
   <h4 class="bg-success" align="center">
      <?php display_message(); ?>
   </h4>
   <div class="navbar navbar-cat">
      <form method="post" enctype="multipart/form-data">

            <h4 class="text-left">Chỉnh sửa trạng thái đơn hàng theo mã đơn hàng:</h4>
            <label>Mã đơn hàng: </label><br><input type="text" name="buy_code"><br/>
            <label>Trạng thái:</label><br/>
            <?php update_status()?>
            <select name='status'>
               <option value='Đang xử lý'>Đang xử lý</option>
               <option value='Đã xác nhận'>Đã xác nhận</option>
               <option value='Đang giao hàng'>Đang giao hàng</option>
               <option value='Đã hoàn thành'>Đã hoàn thành</option>
            </select><br/>
            <input type='submit' name='update_status' class='btn btn-success' value='Lưu'>

      </form>
   </div>
   <table class="table table-bordered">
         <td>
            <a href="index.php?ad_order">
               <p>Tất cả</p>
            </a>
         </td>
         <td>
            <a href="index.php?ad_process">
               <p>Đang chờ xử lý</p>
            </a>
         </td>
         <td>
            <a href="index.php?ad_confirm">
               <p>Đã xác nhận </p>
         </td>
         <td>
            <a href="index.php?ad_ship">
               <p>Đang giao hàng</p>
         </td>
         <td>
            <a href="index.php?ad_delive">
               <p>Đã hoàn thành</p>
         </td>
   </table>
   <table class="table table-hover">
      <?php display_adorder(); ?>
   </table>
</div>