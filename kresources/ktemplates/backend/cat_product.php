<div>
<div class="row" id="productData">
<table class="table table-hover" border="1px">
<form class="navbar-form navbar-right" action="index.php?cat_product.php" method="post" enctype="multipart/form-data">
<div class="form-group">
         <label for="product-title"> Phân loại:
        <select name="product_category_id" id="" class="form-control">
            <option value="">Chọn danh mục</option>
           <?php show_categories_add_product();
           $_SESSION['$product_category_id'] ;?>
        </select></label>
        
        <input type="submit" name="up" class="panel panel-blue" value="Lọc">

</form>
<?php cat_product()?>
</table>
     
</div>