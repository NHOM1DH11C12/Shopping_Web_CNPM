<?php


//******************************************Product Title***********************************
function extra_title()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $product_title = escape_string($row['product_title']);
            return $product_title;
        }
    }
}
//*********************************************************************************************



//******************************************Product Category Id***********************************
function extra_category_id()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM products INNER JOIN categories ON products.product_category_id=categories.cat_id ORDER BY product_id");
        confirm($query);
        while ($row = fetch_array($query)) {
            $product_category_id = escape_string($row['cat_title']);
            return $product_category_id;
        }
    }
}
//*********************************************************************************************



//******************************************Product Price***********************************
function extra_price()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $product_price = escape_string($row['product_price']);
            return $product_price;
        }
    }
}
//*********************************************************************************************




//******************************************Product Quantity***********************************
function extra_quantity()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $product_quantity = escape_string($row['product_quantity']);
            return $product_quantity;
        }
    }
}
//*********************************************************************************************


//******************************************Product Description***********************************
function extra_description()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $product_description = escape_string($row['product_description']);
            return $product_description;
        }
    }
}
//*********************************************************************************************


//******************************************Short Desc***********************************
function extra_short_desc()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $short_desc = escape_string($row['short_desc']);
            return $short_desc;
        }
    }
}
//*********************************************************************************************





//******************************************Product Image***********************************
function extra_image()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $product_image = escape_string($row['product_image']);
            $product_image = display_images($product_image);
            return $product_image;
        }
    }
}

?>
<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Chỉnh sửa sản phẩm
        </h1>
    </div>

    <?php
    //***************************************************Updating Product Function being called***************************************
    update_product();
    //*******************************************************************************************************************************
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <a id="user-id" class="btn btn-danger" href="index.php?products">Quay lại</a>
            <div class="form-group">
                <label for="product-title"><i class="fa fa-tag"></i> Tên sản phẩm</label>
                <input type="text" name="product_title" class="form-control" value="<?php echo extra_title(); ?>">

            </div>
            <div class="form-group">
                <label for="product-title"><i class="fa fa-file-text-o"></i>Mô tả</label>
                <textarea name="product_description" id="" cols="30" rows="10"
                    class="form-control"><?php echo extra_description(); ?></textarea>
            </div>
            <div class="form-group row">

                <div class="col-xs-3">
                    <label for="product-price"><i class="fa fa-usd"></i>Giá</label>
                    <input name="product_price" class="form-control" value="<?php echo extra_price(); ?>">
                </div>
            </div>


            <div class="form-group">
                <label for="product-title"><i class="fa fa-pencil"></i>Giới thiệu qua</label>
                <textarea name="short_desc" id="" cols="30" rows="3"
                    class="form-control"><?php echo extra_short_desc(); ?></textarea>
            </div>
        </div>
        <aside id="admin_sidebar" class="col-md-4">

            <div class="form-group">
                <label for="product-title"><i class="fa fa-list"></i>Phân loại</label>
                <select name="product_category_id" id="" class="form-control">
                    <option value="<?php echo $product_category_id; ?>"><?php echo extra_category_id(); ?></option>
                    <?php show_categories_add_product(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="product-title"><i class="fa fa-sort-numeric-asc"></i> Số lượng</label>
                <input type="number" name="product_quantity" class="form-control"
                    value="<?php echo extra_quantity(); ?>">
            </div>
            <div class="form-group">
                <label for="product-title"><i class="fa fa-picture-o"></i> Hình ảnh</label>
                <input type="file" name="file"><br>
                <img width="200" src="..\..\kresources\<?php echo extra_image(); ?>" alt="">

            </div>
            <div class="form-group">
                <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Lưu dưới dạng bản nháp">
                <input type="submit" name="update" class="btn btn-primary btn-lg" value="Cập nhật">
            </div>
        </aside>

    </form>