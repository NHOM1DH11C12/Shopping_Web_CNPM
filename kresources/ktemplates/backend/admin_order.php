<div>
   <h1 class="page-header text-center">
      Đơn hàng
   </h1>
   <h4 class="bg-success" align="center">
      <?php display_message(); ?>
   </h4>
   <div class="navbar navbar-left">
      <form method="post" enctype="multipart/form-data">
         <div class="panel-login">
            <h4 class="text-left">Chỉnh sửa trạng thái đơn hàng theo ID:</h4>
            <label>ID: </label><br><input type="text" name="id"><br/>
            <label>Trạng thái:</label><br/>
            <?php update_status() ?>
            <select name='status'>
               <option value='Đang xử lý'>Đang xử lý</option>
               <option value='Đã xác nhận'>Đã xác nhận</option>
               <option value='Đang giao hàng'>Đang giao hàng</option>
               <option value='Đã hoàn thành'>Đã hoàn thành</option>
            </select><br/>
            <input type='submit' name='update_status' class='btn btn-success' value='Lưu'>
         </div>
      </form>
   </div>
   <table class="table table-hover">
      <?php display_adorder(); ?>
   </table>