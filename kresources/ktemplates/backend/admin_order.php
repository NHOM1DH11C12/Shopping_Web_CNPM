<div class="col-md-12">
      <h1 class="page-header">
         Đơn hàng
      </h1>
      <h4 class="bg-success" align="center">
         <?php display_message(); ?>
      </h4>
      <form method="POST">
         <table class="table table-hover">
            <thead>
               <h4 class="text-left">Chỉnh sửa trạng thái đơn hàng theo ID:</h4>
               <div class="text-left">
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