<h1 class="page-header">
  Danh sách sản phẩm

</h1>
<div class="navbar navbar-right">
<form class="navbar-form navbar-right" action="index.php?display_product.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <input type="search" class="form-control" name="search" placeholder="Tìm kiếm sản phẩm ">
            <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-orang"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
</div>
<div class="navbar navbar-left">
<h3 class= "bg-success"><?php display_message(); ?></h3>
<button onclick="printProducts()">In danh sách sản phẩm<br/></button>
<form action="index.php?cat_product.php" method="post" enctype="multipart/form-data">
<div class="form-group">
         <label for="product-title"> Phân loại:
        <select name="product_category_id" id="" class="form-control">
            <option value="">Chọn danh mục</option>
           <?php show_categories_add_product();
           $_SESSION['$product_category_id'] ;?>
        </select></label>
        
        <input type="submit" name="up"value="Lọc">
</div>
</form>
</div>
</div>
<div class="container" id="productData">
<table class="table table-hover" border="1px">
     <?php get_products_in_admin(); ?>
    </table>
      <script>
         function printProducts() {
            var printContents = document.getElementById("productData").innerHTML;
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

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->




