<div class="container-fluid">
   <h1 class="text-center">
      ĐƠN HÀNG
   </h1>
   <div class="navbar" style="border-radiusL:25px;">
      <form method="post" enctype="multipart/form-data" class="col-md 8">

         <h4 class="text-left">Chỉnh sửa trạng thái đơn hàng theo mã đơn hàng:</h4>
         <label>Mã đơn hàng: </label>
         <br>
         <input type="text" name="buy_code" style="border: 1px solid black;border-radius: 25px;">
         <br>
         <label>Trạng thái:</label><br />
         <div style="border-radius:25px;">
            <?php update_status() ?>
         </div>
         <select name='status' class="form control" style="border-radius:15px;">
            <option value='Đang xử lý'>Đang xử lý</option>
            <option value='Đã xác nhận'>Đã xác nhận</option>
            <option value='Đang giao hàng'>Đang giao hàng</option>
            <option value='Đã hoàn thành'>Đã hoàn thành</option>
         </select><br />
         <input type='submit' name='update_status' class='btn btn-success' value='Lưu' style="border-radius: 25px;">

      </form>
      <p style="padding-right:15px;">Xem dưới dạng bảng&ensp;
      <div class="toggle-btn">
         <div class="inner-circle"></div>
      </div>
      </p>
   </div>
   <div class="container col-12" style="display:block; border-radius:25px;">
      <?php display_adorder(); ?>
   </div>
   <div class="container col-md-12" style="display:none;">
      <div class="row">
         <table class="table table-hover">
            <thead>
               <tr>
                  <th>Mã đơn hàng</th>
                  <th>tên sản phẩm</th>
                  <th>Đơn giá</th>
                  <th>Số lượng</th>
                  <th>Thành tiền</th>
                  <th>Người nhận</th>
                  <th>Trạng thái</th>
                  <th>Thời gian đặt hàng:</th>
                  <th>Thời gian nhận hàng:</th>
               </tr>
            </thead>
            <?php display_list_adorder() ?>
         </table>
         <br>
         <br>
      </div>
   </div>

   <script>
      document.querySelector('.toggle-btn').addEventListener('click', function () {
         this.classList.toggle('active');
         var container = document.querySelector('.container.col-12');
         var containerMt5 = document.querySelector('.container.col-md-12');
         if (this.classList.contains('active')) {
            container.style.display = 'none';
            containerMt5.style.display = 'block';
         } else {
            container.style.display = 'block';
            containerMt5.style.display = 'none';
         }
      });
   </script>
</div>