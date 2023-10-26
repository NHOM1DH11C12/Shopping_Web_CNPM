<h1 class="text-center ">
   Đơn hàng
</h1>
<div class="col-md-12">

   <div>
      <h4 class="bg-success" align="center">
         <?php display_message(); ?>
      </h4>
   </div>
   <table class="table table-bordered">
         <td>
            <a href="index_user.php?order">
               <p>Tất cả</p>
            </a>
         </td>
         <td>
            <a href="index_user.php?process">
               <p>Đang chờ xử lý</p>
            </a>
         </td>
         <td>
            <a href="index_user.php?confirm">
               <p>Đã xác nhận </p>
         </td>
         <td>
            <a href="index_user.php?ship">
               <p>Đang giao hàng</p>
         </td>
         <td>
            <a href="index_user.php?delive">
               <p>Đã hoàn thành</p>
         </td>
   </table>
   <?php display_order(); ?>
</div>