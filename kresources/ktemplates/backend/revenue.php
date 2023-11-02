<div class="col-md-12">
   <div class="row">
      <h1 class="">
         Doanh số

      </h1>

      <h4 class="bg-success" align="center">
         <?php display_message(); ?>
      </h4>
   </div>
   <button onclick="printRevenue()">In doanh thu</button>
   <div class="row" id="revenueData">
      <div class="col-12">
         <?php display_revenue(); ?>
      </div>
      <script>
         function printRevenue() {
            var printContents = document.getElementById("revenueData").innerHTML;
            var printWindow = window.open('', '_blank');

            printWindow.document.open();
            printWindow.document.write('<html><head><title>Doanh thu</title></head><body>');
            printWindow.document.write(printContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();

            printWindow.print();
            printWindow.close();
         }


      </script>
   </div>
</div>