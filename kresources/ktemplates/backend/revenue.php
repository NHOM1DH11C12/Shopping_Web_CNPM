<div class="col-md-12">
   <div class="row">
      <h1 class="page-header">
         Doanh số

      </h1>

      <h4 class="bg-success" align="center">
         <?php display_message(); ?>
      </h4>
   </div>
   <button onclick="printRevenue()">In doanh thu</button>
   <div class="row" id="revenueData" >
            <?php display_revenue(); ?>
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