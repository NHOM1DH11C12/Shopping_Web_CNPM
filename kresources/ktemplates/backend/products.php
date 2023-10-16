<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">

            <h1 class="page-header">
                Danh sách sản phẩm

            </h1>
            <h3 class="bg-success">
                <?php display_message(); ?>
            </h3>

            <div class="navbar navbar-cat">
                <h3 class="bg-success">
                    <?php display_message(); ?>
                </h3>
                <button onclick="printProducts()">In danh sách sản phẩm<br /></button>
                <form action="index.php?cat_product.php" method="post" enctype="multipart/form-data">
                    <label> Phân loại:</label><br />
                    <select name="product_category_id" id="" class="form-product">
                        <option value="">Chọn danh mục</option>
                        <?php show_categories_add_product();
                        $_SESSION['product_category_id']; ?>
                    </select>

                    <input type="submit" name="up" class="btn btn-success" value="Lọc">
                    
                </form>
            </div>
            <div class="navbar navbar-search">
                <form class="navbar-form navbar-search" action="index.php?display_product.php" method="post"
                    enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="search" class="form-control" name="search" placeholder="Tìm kiếm sản phẩm ">
                        <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-orang"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row" id="productData">
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