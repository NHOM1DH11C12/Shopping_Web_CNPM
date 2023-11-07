<link href="css/order.css" rel="stylesheet">
<h1 class="col-12">
   Doanh số
</h1>
<div class="col-12">
   <h3 class="bg-success">
      <?php display_message(); ?>
   </h3>
   <h3 class="bg-success">
      <?php display_message(); ?>
   </h3>
</div>
<div class="col-md-12"></div><button onclick="printRevenue()" class="btn btn-primary">In doanh thu</button>
<div class="col-md-12" id="revenueData">
   <?php display_revenue(); ?>
</div>
<script>
   function printRevenue() {
      var printContents = document.getElementById("revenueData").innerHTML;
      var printWindow = window.open('', '_blank');

      printWindow.document.open();
      printWindow.document.write('<html><head><title>Hóa đơn chi tiết</title>');
      printWindow.document.write('<style>table {border-collapse: collapse; width: 100%;}');
      printWindow.document.write(' table, th, td {border: 1px solid black; padding: 10px;}</style></head><body>');
      printWindow.document.write(printContents);
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      printWindow.print();
   }
</script>
