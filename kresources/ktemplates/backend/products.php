
        
        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="row">

<h1 class="page-header">
  Danh sách sản phẩm

</h1>
<h3 class= "bg-success"><?php display_message(); ?></h3>
<button onclick="printProducts()">In danh sách sản phẩm</button>
<div class="row" id="productData">
<table class="table table-hover" border="1px">
     <?php get_products_in_admin(); ?>
    </table>
      <script>
         function printProducts() {
            var printContents = document.getElementById("productData").innerHTML;
            var printWindow = window.open('', '_blank');

            printWindow.document.open();
            printWindow.document.write('<html><head><title>Danh sach san pham</title></head><body>');
            printWindow.document.write(printContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();

            printWindow.print();
            printWindow.close();
         }


      </script>
</div>











                
                 


             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->




