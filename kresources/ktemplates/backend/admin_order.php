<div class="col-md-12">
   <div class="row">
      <h1 class="page-header">
         Đơn hàng
      </h1>
      <h4 class="bg-success" align="center">
         <?php display_message(); ?>
      </h4>
   </div>
   <div class="row">
      <form method="POST">
         <table class="table table-hover">
            <thead>
               <h4 class="text-left">Chỉnh sửa trạng thái đơn hàng theo ID:</h4>
               <div class="text-left">
                  <?php update_status(); ?>
                  <tr>
                     <td><label class="form-group">ID: </label><input type="text" name="id" class="form-control"></td>
                  </tr>
                  <tr>
                     <td>
                        <label>Trạng thái:</label>
                        <select name='status' class='form-control'>
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
            <tbody>
               <?php display_adorder(); ?>
            </tbody>
         </table>
      </form>
   </div>
</div>