<h1 class="page-header">
  Khiếu nại

</h1>

<h3 class="bg-success">
  <?php display_message(); ?>
</h3>
<table class="table table-hover">


  <thead>

    <tr>
      <th>Id</th>
      <th>Id sản phẩm</th>
      <th>Id đơn hàng</th>
      <th>Giá</th>
      <th>Loại sản phẩm</th>
      <th>Số lượng sản phẩm</th>
    </tr>
  </thead>
  <tbody>


    <?php get_reports(); ?>


  </tbody>
</table>