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
         <?php display_ad_confirm(); ?>
   </table>
</div>