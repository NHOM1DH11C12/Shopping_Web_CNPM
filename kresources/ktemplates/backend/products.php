<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h1 class="col-12">
                Danh sách sản phẩm
            </h1>
            <div class="col-12">
                <h3 class="bg-success">
                    <?php display_message(); ?>
                </h3>
                <h3 class="bg-success">
                    <?php display_message(); ?>
                </h3>
            </div>
            <div class="navbar navbar-cat col-6">
                <form action="index.php?cat_product" method="post" enctype="multipart/form-data">
                    <label>Phân loại:</label><br>
                    <select name="product_category_id" id="" class="form-product">
                        <option value="">Chọn danh mục</option>
                        <?php show_categories_add_product();
                        $_SESSION['product_category_id']; ?>
                    </select>
                    <input type="submit" name="up" class="btn btn-success" value="Lọc"><br>
                    <button onclick="printProducts()">In danh sách sản phẩm<br></button>
                </form>
            </div>
            <div class="navbar navbar-search col-6">
                <form action="index.php?display_product" method="post" enctype="multipart/form-data">
                        <input type="search" class="form-group" name="search" placeholder="Tìm kiếm sản phẩm">
                            <button type="submit" name="submit" class="btn btn-primary ">
                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                            </button>
                </form>
            </div>
            <div class="col-md-10" id="productData">
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
</div>
