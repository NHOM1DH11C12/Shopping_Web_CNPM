<?php require_once('config.php'); ?>
<?php
//Helper Function

///below global variable upload
$upload_path = "uploads";
//chuyển đến đường link
function redirect($location)
{
    header("Location: $location ");
}

//thông báo
function set_message($msg)
{

    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

//########################################


//########################################
//########################################


//########################################
//Thông báo sai mật khẩu
function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
//########################################


//#######################################
//########################################
//lấy dữ liệu db

function query($sql)
{
    global $connection;
    return mysqli_query($connection, $sql);
}
//#######################################

//########################################
//thông báo lỗi db
function confirm($results)
{
    global $connection;
    if (!$results) {
        die("LỖI!" . mysqli_error($connection));
    }

}
//########################################

//#######################################
//kết nối đến db vs gt dc lấy
function escape_string($string)
{
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}
//#########################################

//#######################################
//lấy chuỗi dl db
function fetch_array($results)
{
    return mysqli_fetch_array($results);
}
//#########################################
//**********************************************************************FRONTEND FUNCTIONS************************************
//########################################
//ht sp ở home
function get_product()
{
    $query = query("SELECT * FROM products");
    confirm($query);

    $rows = mysqli_num_rows($query); // Get total of mumber of rows from the database
    if (isset($_GET['page'])) { //get page from URL if its there
        $page = preg_replace('#[^0-9]#', '', $_GET['page']); //filter everything but numbers
    } else { // If the page url variable is not present force it to be number 1
        $page = 1;
    }
    $perPage = 8; // Items per page here 
    $lastPage = ceil($rows / $perPage); // Get the value of the last page
// Be sure URL variable $page(page number) is no lower than page 1 and no higher than $lastpage
    if ($page < 1) { // If it is less than 1
        $page = 1; // force if to be 1
    } elseif ($page > $lastPage) { // if it is greater than $lastpage
        $page = $lastPage; // force it to be $lastpage's value
    }
    $middleNumbers = ''; // Initialize this variable

    // This creates the numbers to click in between the next and back buttons
    $sub1 = $page - 1;
    $sub2 = $page - 2;
    $add1 = $page + 1;
    $add2 = $page + 2;

    if ($page == 1) {
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
    } elseif ($page == $lastPage) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
    } elseif ($page > 2 && $page < ($lastPage - 1)) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub2 . '">' . $sub2 . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add2 . '">' . $add2 . '</a></li>';
    } elseif ($page > 1 && $page < $lastPage) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page= ' . $sub1 . '">' . $sub1 . '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
    }
    // This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
    $limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage;
    // $query2 is what we will use to to display products with out $limit variable
    $query2 = query(" SELECT * FROM products $limit");
    confirm($query2);
    $outputPagination = ""; // Initialize the pagination output variable
// if($lastPage != 1){
//    echo "Page $page of $lastPage";
// }
    // If we are not on page one we place the back link

    if ($page != 1) {
        $prev = $page - 1;
        $outputPagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $prev . '">Back</a></li>';
    }
    // Lets append all our links to this variable that we can use this output pagination

    $outputPagination .= $middleNumbers;
    // If we are not on the very last page we the place the next link

    if ($page != $lastPage) {
        $next = $page + 1;
        $outputPagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $next . '">Next</a></li>';
    }
    $count = 0;
    while ($row = fetch_array($query2)) {
        $product_photo = display_images($row['product_image']);
        $product_price = number_format($row['product_price']);
        $products = <<<DELIMETER
        <div class="col-sm-3 col-lg-3 col-md-3">
            <div class="thumbnail">
                <a  href="item.php?id={$row['product_id']}" ><img src="../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;"></a>
                <div class="caption">
                    <h4><a  href="item.php?id={$row['product_id']}" >{$row['product_title']}</a></h4><p>{$row['short_desc']}.</p>
                    <h5 class="pull-left" style="color: #FFA500;">{$product_price} Đồng</h5><br/>
                    
                </div>
                <a class="btn btn-primary"  href="item.php?id={$row['product_id']}" >Xem thêm</a>
            </div>
        </div>
     DELIMETER;
        if ($count % 4 == 0) {
            echo '<div class="row">';
        }

        echo $products;

        $count++;
        if ($count % 4 == 0) {
            echo '</div>';
        }

    }

    echo "<div class='text-center'><ul class='pagination'>{$outputPagination}</ul></div>";
}

//ht sp ở home user
function get_user_product()
{
    $query = query("SELECT * FROM products");
    confirm($query);

    $rows = mysqli_num_rows($query); // Get total of mumber of rows from the database
    if (isset($_GET['page'])) { //get page from URL if its there
        $page = preg_replace('#[^0-9]#', '', $_GET['page']); //filter everything but numbers
    } else { // If the page url variable is not present force it to be number 1
        $page = 1;
    }
    $perPage = 8; // Items per page here 
    $lastPage = ceil($rows / $perPage); // Get the value of the last page
// Be sure URL variable $page(page number) is no lower than page 1 and no higher than $lastpage
    if ($page < 1) { // If it is less than 1
        $page = 1; // force if to be 1
    } elseif ($page > $lastPage) { // if it is greater than $lastpage
        $page = $lastPage; // force it to be $lastpage's value
    }
    $middleNumbers = ''; // Initialize this variable

    // This creates the numbers to click in between the next and back buttons
    $sub1 = $page - 1;
    $sub2 = $page - 2;
    $add1 = $page + 1;
    $add2 = $page + 2;

    if ($page == 1) {
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
    } elseif ($page == $lastPage) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
    } elseif ($page > 2 && $page < ($lastPage - 1)) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub2 . '">' . $sub2 . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add2 . '">' . $add2 . '</a></li>';
    } elseif ($page > 1 && $page < $lastPage) {
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page= ' . $sub1 . '">' . $sub1 . '</a></li>';
        $middleNumbers .= '<li class="page-item active"><a>' . $page . '</a></li>';
        $middleNumbers .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a></li>';
    }
    // This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
    $limit = 'LIMIT ' . ($page - 1) * $perPage . ',' . $perPage;
    // $query2 is what we will use to to display products with out $limit variable
    $query2 = query(" SELECT * FROM products $limit");
    confirm($query2);
    $outputPagination = ""; // Initialize the pagination output variable
// if($lastPage != 1){
//    echo "Page $page of $lastPage";
// }
    // If we are not on page one we place the back link

    if ($page != 1) {
        $prev = $page - 1;
        $outputPagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $prev . '">Back</a></li>';
    }
    // Lets append all our links to this variable that we can use this output pagination

    $outputPagination .= $middleNumbers;
    // If we are not on the very last page we the place the next link

    if ($page != $lastPage) {
        $next = $page + 1;
        $outputPagination .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $next . '">Next</a></li>';
    }
    $count = 0;
    while ($row = fetch_array($query2)) {
        //$product_image = display_image($row['product_image']);
        $product_photo = display_images($row['product_image']);
        $product_price = number_format($row['product_price']);
        $link = isset($_SESSION['username']) && !empty($_SESSION['username'])
            ? "..\kresources\cart.php?add={$row['product_id']}"
            : "javascript:alert('Cần đăng nhập để đặt hàng!');window.location.href='login.php';";
        if ($row['product_quantity'] > 0) {
            $products = <<<DELIMETER
            <div class="col-sm-3 col-lg-3 col-md-3">
            <div class="thumbnail">
                <a  href="item.php?id={$row['product_id']}" ><img src="../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;"></a>
                <div class="caption">
                    <h4><a  href="item.php?id={$row['product_id']}" >{$row['product_title']}</a></h4><p>{$row['short_desc']}.</p>
                    <h5 class="pull-left" style="color: #FFA500;">{$product_price} Đồng</h5><br/>
                    
                </div>
                <a href="{$link}" class="btn btn-primary">Đặt hàng</a> 
                              </div>
             </div>
            DELIMETER;
        } else {
            $products = <<<DELIMETER
            <div class="col-sm-3 col-lg-3 col-md-3">
            <div class="thumbnail">
                <a  href="item.php?id={$row['product_id']}" ><img src="../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;"></a>
                <div class="caption">
                    <h4><a  href="item.php?id={$row['product_id']}" >{$row['product_title']}</a></h4><p>{$row['short_desc']}.</p>
                    <h5 class="pull-left" style="color: #FFA500;">{$product_price} Đồng</h5><br/>
                    
                </div><a class="btn btn-primary">Đã hết hàng</a> 
                              </div>
             </div>
            DELIMETER;
        }
        if ($count % 4 == 0) {
            echo '<div class="row">';
        }

        echo $products;

        $count++;
        if ($count % 4 == 0) {
            echo '</div>';
        }
    }
    echo "<div class='text-center'><ul class='pagination'>{$outputPagination}</ul></div>";
}
// danh mục home
function get_categories()
{
    $query = query("SELECT * FROM categories");
    confirm($query);
    while ($row = fetch_array($query)) {
        $category_links = <<<DELIMETER
<a href='user_category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
DELIMETER;
        echo $category_links;
    }
}
//danh mục home user
function get_admin_categories()
{
    $query = query("SELECT * FROM categories");
    confirm($query);
    while ($row = fetch_array($query)) {
        $category_links = <<<DELIMETER
<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
DELIMETER;
        echo $category_links;
    }
}
//#########################################

//#######################################
//hien thị sp ở trang danh mục
function get_products_in_ad_category_page()
{
    $query = query("SELECT * FROM products WHERE product_category_id=" . escape_string($_GET['id']) . " ");
    confirm($query);
    $count = 0;
    while ($row = fetch_array($query)) {
        $product_photo = display_images($row['product_image']);
        $category_page = <<<DELIMETER
 <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;">
                    <div >
                        <h3>{$row['product_title']}</h3>
                        <p>{$row['short_desc']}</p>
                        <p>
                            <a href="item_user.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                        </p>
                    </div>
                </div>
            </div>
DELIMETER;
        if ($count % 4 == 0) {
            echo '<div class="row">';
        }

        echo $category_page;

        $count++;
        if ($count % 4 == 0) {
            echo '</div>';
        }
    }
}
// ht sp ở danh mục user
function get_products_in_category_page()
{
    $query = query("SELECT * FROM products WHERE product_category_id=" . escape_string($_GET['id']) . " ");
    confirm($query);
    $count = 0;
    while ($row = fetch_array($query)) {
        $product_photo = display_images($row['product_image']);
        if ($row['product_quantity'] > 0) {
            $category_page = <<<DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
                           <div class="thumbnail">
                               <img src="../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;">
                               <div >
                                   <h3>{$row['product_title']}</h3>
                                   <p>{$row['short_desc']}</p>
                                   <p>
                                       <a href="..\kresources\cart.php?add={$row['product_id']}" class="btn btn-primary">Mua ngay</a>
                                        <a href="item_user.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                                   </p>
                               </div>
                           </div>
                       </div>
           DELIMETER;
        } else {
            $category_page = <<<DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
                           <div class="thumbnail">
                               <img src="../kresources/{$product_photo}" alt="">
                               <div >
                                   <h3>{$row['product_title']}</h3>
                                   <p>{$row['short_desc']}</p>
                                   <p>
                                       <a  class="btn btn-primary">Đã hết hàng</a>
                                        <a href="item_user.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                                   </p>
                               </div>
                           </div>
                       </div>
           DELIMETER;
        }
        if ($count % 4 == 0) {
            echo '<div class="row">';
        }

        echo $category_page;

        $count++;
        if ($count % 4 == 0) {
            echo '</div>';
        }
    }
}
//sp theo danh mục ở admin 
function cat_product()
{
    if (isset($_POST['up'])) {
        $product_category_id = escape_string($_POST['product_category_id']);
        if (empty($product_category_id)) {
            echo "<br/><h1 class='text-center'>Không có dữ liệu danh mục</h1>";
            return;
        }

        $query = query("SELECT * FROM products WHERE product_category_id=" . $product_category_id . " ");
        confirm($query);
        echo "
    <thead>
        <tr>
           <th>Id</th>
           <th>Tên sản phẩm</th>
           <th>Giá</th>
           <th>Số lượng</th>
        </tr>
    </thead>";

        echo "<tbody ";
        while ($row = fetch_array($query)) {
            $product_photo = display_images($row['product_image']);
            $product_price = number_format($row['product_price']);

            $products = <<<DELIMETER
        <tr>
            <td>{$row['product_id']}</td>
            <td><a href="index.php?edit_product&id={$row['product_id']}&cat_id={$row['product_category_id']}"><p>{$row['product_title']}</p>
            </a><div><img src="../../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;"></div></td>
            <td>{$product_price} VND</td>
            <td>{$row['product_quantity']}</td>
            <td>
                <a class="btn btn-danger" href="..\..\kresources\ktemplates\backend\delete_product.php?id={$row['product_id']}">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </td>
       </tr>
DELIMETER;

            echo $products;
        }
        echo "</tbody>";
    }

}

//#########################################

//#######################################
//hiện sp ở shop
function get_products_in_shop_page()
{
    $query = query("SELECT * FROM products ");
    confirm($query);

    $count = 0; // Số sản phẩm hiện tại trong dòng
    while ($row = fetch_array($query)) {
        $short_desc = $row['short_desc'];
        if (strlen($short_desc) > 50) { // Giới hạn độ dài của short_desc
            $short_desc = substr($short_desc, 0, 50) . '...'; // Cắt chuỗi và thêm elipsis
        }
        $product_photo = display_images($row['product_image']);
        $link = isset($_SESSION['username']) && !empty($_SESSION['username'])
            ? "..\kresources\cart.php?add={$row['product_id']}"
            : "javascript:alert('Cần đăng nhập để đặt hàng!');window.location.href='login.php';";

        if ($row['product_quantity'] <= 0) {
            $category_page = <<<DELIMETER
                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;">
                        <div>
                            <h3>{$row['product_title']}</h3>
                            <p>{$short_desc}</p>
                            <p>
                                <a href="item_user.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                                <a  class="btn btn-primary">Đã hết hàng</a>
                            </p>
                        </div>
                    </div>
                </div>
            DELIMETER;
        } else {
            $category_page = <<<DELIMETER
                 <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                         <img src="../kresources/{$product_photo}" alt="" alt="" style="width: 300px; height: 182px;">
                         <div>
                              <h3>{$row['product_title']}</h3>
                                  <p>{$short_desc}</p>
                                  <p>
                                 <a href="{$link}" class="btn btn-primary">Đặt hàng</a> 
                                 <a href="item_user.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                                 </p>
                        </div>
                     </div>
                </div>

            DELIMETER;
        }
        if ($count % 4 == 0) {
            echo '<div class="row">';
        }

        echo $category_page;

        $count++;
        if ($count % 4 == 0) {
            echo '</div>';
        }
    }
}
// hiện sp ở shop ad
function get_products_in_admin_shop_page()
{
    $query = query("SELECT * FROM products ");
    confirm($query);

    $count = 0; // Số sản phẩm hiện tại trong dòng
    while ($row = fetch_array($query)) {
        $short_desc = $row['short_desc'];
        if (strlen($short_desc) > 50) { // Giới hạn độ dài của short_desc
            $short_desc = substr($short_desc, 0, 50) . '...'; // Cắt chuỗi và thêm elipsis
        }
        $product_photo = display_images($row['product_image']);
        $link = isset($_SESSION['username']) && !empty($_SESSION['username'])
            ? "..\kresources\cart.php?add={$row['product_id']}"
            : "javascript:alert('Cần đăng nhập để đặt hàng!');window.location.href='login.php';";


        $category_page = <<<DELIMETER
<div class="col-md-3 col-sm-6 hero-feature">
    <div class="thumbnail">
        <img src="../kresources/{$product_photo}" alt="" style="width: 300px; height: 182px;">
        <div>
            <h3>{$row['product_title']}</h3>
            <p>{$short_desc}</p>
            <p>
                <a href="item.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
            </p>
        </div>
    </div>
</div>
DELIMETER;
        if ($count % 4 == 0) {
            echo '<div class="row">';
        }

        echo $category_page;

        $count++;
        if ($count % 4 == 0) {
            echo '</div>';
        }
    }
}

//*************************Adding Products in Admin*************************************************************************8
function add_product()
{
    if (isset($_POST['publish'])) {

        $product_title = escape_string($_POST['product_title']);
        $product_category_id = escape_string($_POST['product_category_id']);
        $product_price = escape_string($_POST['product_price']);
        $product_quantity = escape_string($_POST['product_quantity']);
        $product_description = escape_string($_POST['product_description']);
        $short_desc = escape_string($_POST['short_desc']);
        //********************************************************************************special zone the image uploading zone ******************


        $product_image = ($_FILES['file']['name']);
        $image_temp_location = ($_FILES['file']['tmp_name']);
        $final_destination = UPLOAD_DIRECTORY . DS . $product_image;
        move_uploaded_file($image_temp_location, $final_destination);

        //****************************************************************************************************************************************
        $query = query("INSERT INTO products(product_title,product_category_id,product_price,product_description,short_desc,product_quantity,product_image)VALUES('{$product_title}','{$product_category_id}','{$product_price}','{$product_description}','{$short_desc}','{$product_quantity}','{$product_image}')");
        $last_id = last_id();
        confirm($query);
        set_message("New Product with id : {$last_id}  was Added");
        redirect("index.php?products");

    }

}
//hiện loại sản phẩm
function show_product_category_title($product_category_id)
{
    $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
    confirm($category_query);

    while ($categories_row = fetch_array($category_query)) {
        return $categories_row['cat_title'];
    }
}
//hiển thị sản phẩm admin
function get_products_in_admin()
{

    $query = query("SELECT * FROM products");
    confirm($query);
    //$category = show_product_category_title['product_category_id'];
    echo "
    <thead>

    <tr>
           <th>Id</th>
           <th>Tên sản phẩm</th>
           <th>Phân loại</th>
           <th>Giá</th>
           <th>Số lượng</th>
      </tr>
    </thead>";
    echo "<tbody ";
    while ($row = fetch_array($query)) {

        //***********************************************************
        $result_product = $row['product_category_id'];
        $category = show_product_category_title($result_product);
        $product_price = number_format($row['product_price']);

        $product_photo = display_images($row['product_image']);
        //************************************************************
        $products = <<<DELIMETER
        <tr>
            <td> {$row['product_id']}</td>
            <td><a href="index.php?edit_product&id={$row['product_id']}">
            <p>{$row['product_title']}</p></a><div><img width='100' src="../../kresources/uploads/{$product_photo}" alt=""></div></td>
            <td>{$category}</td>
            <td >{$product_price} Đồng</td>
            <td>{$row['product_quantity']}</td>
            <td>
            <a class="btn btn-danger" href = "..\..\kresources\ktemplates\backend\delete_product.php?id={$row['product_id']}"
            onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><span class = " glyphicon glyphicon-remove"></span></a>
            </td>
       </tr>
      
DELIMETER;
        echo $products;
    }
    echo "</tbody>";
}


//hiển thị danh mục sp đã có
function show_categories_add_product()
{
    $query = query("SELECT * FROM categories");
    confirm($query);
    while ($row = fetch_array($query)) {
        $category_options = <<<DELIMETER
    <option value="{$row['cat_id']}">{$row['cat_title']}</option>
           
DELIMETER;
        echo $category_options;
    }
}
//***************************************************Updating Products Code In Admin Page  ***************************************
function update_product()
{
    if (isset($_POST['update'])) {
        $product_title = escape_string($_POST['product_title']);
        if (empty($product_category_id)) {
            $get_cat = query("SELECT product_category_id FROM products WHERE product_id =" . escape_string($_GET['id']) . "");
            confirm($get_cat);
            $row = fetch_array($get_cat);
            $product_category_id = $row['product_category_id'];
        } else {
            $product_category_id = escape_string($_POST['product_category_id']);
        }
        $product_price = escape_string($_POST['product_price']);
        $product_quantity = escape_string($_POST['product_quantity']);
        $product_description = escape_string($_POST['product_description']);
        $short_desc = escape_string($_POST['short_desc']);
        $product_image = $_FILES['file']['name'];
        $image_temp_location = $_FILES['file']['tmp_name'];
        $final_destination = UPLOAD_DIRECTORY . DS . $product_image;
        move_uploaded_file($image_temp_location, $final_destination);

        if (empty($product_image)) {
            $get_pic = query("SELECT product_image FROM products WHERE product_id =" . escape_string($_GET['id']) . "");
            confirm($get_pic);
            $row = fetch_array($get_pic);
            $product_image = $row['product_image'];
        }
        $query = "UPDATE products SET ";
        $query .= "product_title          = '{$product_title}'            , ";
        $query .= "product_category_id    = '{$product_category_id}'      , ";
        $query .= "product_price          = '{$product_price}'            , ";
        $query .= "product_quantity       = '{$product_quantity}'         , ";
        $query .= "product_description    = '{$product_description}'      , ";
        $query .= "short_desc             = '{$short_desc}'               , ";
        $query .= "product_image          = '{$product_image}'              ";
        $query .= "WHERE product_id= " . escape_string($_GET['id']);
        $send_update_query = query($query);
        confirm($send_update_query);
        set_message("Products has been updated !");
        redirect("index.php?products");

    }

}

//*************************************************Category Zone Under The Admin Page ********************************************************//
//hiển thị danh mục sp
function show_categories_in_admin()
{



    $query = "SELECT * FROM categories";
    $category_query = query($query);
    confirm($query);
    while ($row = fetch_array($category_query)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        $category_admin = <<<DELIMETER
<tr>
    <td>{$cat_id}</td>
    <td>{$cat_title}</td>
    <td><a class="btn btn-danger" href = "..\..\kresources\ktemplates\backend\delete_category.php?id={$row['cat_id']}"
    onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><span class = " glyphicon glyphicon-remove"></span></a></td>
</tr>
DELIMETER;

        echo $category_admin;
    }
}
// thêm danh mục
function add_category()
{
    if (isset($_POST['add_category'])) {
        $cat_title = escape_string($_POST['cat_title']);
        if (empty($cat_title) || $cat_title == "") {
            echo "<p class= 'bg-danger' >kHÔNG THỂ ĐỂ TRỐNG, THỬ LẠI! </p> ";
        } else {
            $query = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}')");
            confirm($query);
            set_message("Category Created !");
        }
    }
}


//tim kiem sản phẩm ở admin
function search_product($keyword)
{
    $connection = mysqli_connect('localhost', 'root', '', 'thuchanh2');
    if ($connection === false) {
        die("Lỗi kết nối database: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $keyword = $_POST['search'];
        $query = $connection->prepare("SELECT * FROM products WHERE product_title LIKE ?");
        confirm($query);
        $keyword = '%' . $keyword . '%';
        $query->bind_param("s", $keyword);
        $query->execute();
        $result = $query->get_result();
        echo "
    <thead>

    <tr>
           <th>Id</th>
           <th>Tên sản phẩm</th>
           <th>Phân loại</th>
           <th>Giá</th>
           <th>Số lượng</th>
      </tr>
    </thead>";
        echo "<tbody ";
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                $result_product = $row['product_category_id'];
                $category = show_product_category_title($result_product);
                $product_price = number_format($row['product_price']);
                $product_photo = display_images($row['product_image']);
                //************************************************************
                $products = <<<DELIMETER
                <tr>
                    <td> {$row['product_id']}</td>
                    <td><a href="index.php?edit_product&id={$row['product_id']}&cat_id={$row['product_category_id']}"><p>{$row['product_title']}</p>
                    </a><div><img src="../../kresources/{$product_photo}" alt="" style="width: 282px; height: 182px;"></div></td>
                    <td>{$category}</td>
                    <td >{$product_price} VND</td>
                    <td>{$row['product_quantity']}</td>
                    <td>
                    <a class="btn btn-danger" href = "..\..\kresources\ktemplates\backend\delete_product.php?id={$row['product_id']}">
                    <span class = " glyphicon glyphicon-remove"></span></a>
                    </td>
               </tr>
DELIMETER;
                echo $products;

            }
            echo "</tbody> ";

        } else {
            echo "<h2>Không tìm thấy sản phẩm nào.</h2>";
        }
    }

}


//tìm kiếm sp

function search($keyword)
{
    $connection = mysqli_connect('localhost', 'root', '', 'toy');
    if ($connection === false) {
        die("Lỗi kết nối database: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $keyword = $_POST['search'];
        $query = $connection->prepare("SELECT * FROM products WHERE product_title LIKE ?");
        confirm($query);
        $keyword = '%' . $keyword . '%';
        $query->bind_param("s", $keyword);
        $query->execute();
        $result = $query->get_result();
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                $short_desc = $row['short_desc'];
                if (strlen($short_desc) > 50) {
                    $short_desc = substr($short_desc, 0, 50) . '...';
                }
                $product_photo = display_images($row['product_image']);
                $link = isset($_SESSION['username']) && !empty($_SESSION['username'])
                    ? "..\kresources\cart.php?add={$row['product_id']}"
                    : "javascript:alert('Cần đăng nhập để đặt hàng!');window.location.href='login.php';";


                if ($row['product_quantity'] <= 0) {
                    $category_page = <<<DELIMETER
                        <div class="col-md-3 col-sm-6 hero-feature">
                            <div class="thumbnail">
                                <img src="../kresources/{$product_photo}" alt="" width="100" height="80">
                                <div>
                                    <h3>{$row['product_title']}</h3>
                                    <p>{$short_desc}</p>
                                    <p>
                                        <a href="item_user.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                                        <a  class="btn btn-primary">Đã hết hàng</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    DELIMETER;
                } else {
                    $category_page = <<<DELIMETER
                         <div class="col-md-3 col-sm-6 hero-feature">
                            <div class="thumbnail">
                                 <img src="../kresources/{$product_photo}" alt="" width="100" height="80">
                                 <div>
                                      <h3>{$row['product_title']}</h3>
                                          <p>{$short_desc}</p>
                                          <p>
                                         <a href="{$link}" class="btn btn-primary">Đặt hàng</a> 
                                         <a href="item_user.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                                         </p>
                                </div>
                             </div>
                        </div>
        
                    DELIMETER;
                }
                echo $category_page;
            }

        } else {
            echo "<h2>Không tìm thấy sản phẩm nào.</h2>";
        }
    }

}
// tìm sp ad
function search_ad($keyword)
{
    $connection = mysqli_connect('localhost', 'root', '', 'toy');
    if ($connection === false) {
        die("Lỗi kết nối database: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $keyword = $_POST['search'];
        $query = $connection->prepare("SELECT * FROM products WHERE product_title LIKE ?");
        confirm($query);
        $keyword = '%' . $keyword . '%';
        $query->bind_param("s", $keyword);
        $query->execute();
        $result = $query->get_result();
        if ($result->num_rows > 0) {
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                $short_desc = $row['short_desc'];
                if (strlen($short_desc) > 50) {
                    $short_desc = substr($short_desc, 0, 50) . '...';
                }
                $product_photo = display_images($row['product_image']);


                $category_page = <<<DELIMETER
 <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../kresources/{$product_photo}" alt="">
                    <div>
                        <h3>{$row['product_title']}</h3>
                        <p>{$row['short_desc']}</p>
                        <p>
                            <a href="item.php?id={$row['product_id']}" class="btn btn-default">Xem thêm</a>
                        </p>
                    </div>
                </div>
            </div>
DELIMETER;
                echo $category_page;
            }

        } else {
            echo "<h2>Không tìm thấy sản phẩm nào.</h2>";
        }
    }

}


//**********************************************************************ORDER FUNCTIONS************************************
//thêm dữ liệu đơn hàng và doanh thu
function add_order()
{
    global $connection;
    $buy_code = rand(100000000, 987654567);
    $_SESSION['buy_code'] = $buy_code;
    if (isset($_POST['add_order']) && isset($_POST['payment'])) {
        $item_quantity = 0;
        $user_name = "";
        $user_id = $_SESSION['user_id'];
        $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
        confirm($query_user);
        while ($row_user = fetch_array($query_user)) {
            $user_name = $row_user['username'];
        }
        foreach ($_SESSION['selected_products'] as $selected_product) {
            $query = query("SELECT * FROM products WHERE product_id = " . escape_string($selected_product));
            confirm($query);
            while ($row = fetch_array($query)) {
                $sub = $row['product_price'] * $_SESSION["product_" . $selected_product];
                $item_quantity += $_SESSION["product_" . $selected_product];
                $query2 = "INSERT INTO buy(buy_code,user_name, product_name, price, quantity, amount, status, photo, buyad)
                VALUES('{$buy_code}','{$user_name}', '{$row['product_title']}', '{$row['product_price']}', '{$_SESSION["product_" . $selected_product]}',
               '{$sub}', 'Đang xử lý', '{$row['product_image']}', '{$_SESSION['fulladdress']}')";

                confirm($query2);
                $result = mysqli_query($connection, $query2);
                if (!$result) {
                    die('Query FAILED' . mysqli_error($connection));
                }

                unset($_SESSION['item_quantity']);
                unset($_SESSION['item_total']);
                // Trừ số lượng sản phẩm trong cơ sở dữ liệu
                $query4 = "UPDATE products 
                SET product_quantity = product_quantity - {$_SESSION["product_" . $selected_product]} 
                WHERE product_id = {$selected_product}";
                unset($_SESSION["product_" . $selected_product]);
                confirm($query4);
                $result3 = mysqli_query($connection, $query4);
                if (!$result3) {
                    die('Query FAILED' . mysqli_error($connection));
                }
            }
        }

        echo "<script>window.location='thank_you.php';</script>";
    } elseif (isset($_POST['add_order']) && isset($_POST['redirect'])) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $vnp_TmnCode = "N7VY01PV"; //Mã định danh merchant kết nối (Terminal Id)
        $vnp_HashSecret = "AAGIGCPBFGUVLTRZBYUSGNVHDHLEGINL"; //Secret key
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/Shopping_Web_CNPM/public_user/thank_you.php";
        $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
        $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
        $total = 0;
        $item_quantity = 0;
        foreach ($_SESSION['selected_products'] as $selected_product) {
            $query = query("SELECT * FROM products WHERE product_id = " . escape_string($selected_product));
            confirm($query);
            while ($row = fetch_array($query)) {
                $sub = $row['product_price'] * $_SESSION["product_" . $selected_product];
                $item_quantity += $_SESSION["product_" . $selected_product];
                $total += $sub;
            }
        }
        $vnp_TxnRef = $buy_code;
        $vnp_OrderInfo = "Thanh toan don hang";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $vnp_ExpireDate = $expire;
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00'
            ,
            'message' => 'success'
            ,
            'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);

        }
    }
}
function save_order()
{
    if (isset($_GET['vnp_ResponseCode']) && $_GET['vnp_ResponseCode'] == '00') {
        global $connection;
        $item_quantity = 0;
        $user_name = "";
        $user_id = $_SESSION['user_id'];
        $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
        confirm($query_user);
        while ($row_user = fetch_array($query_user)) {
            $user_name = $row_user['username'];
        }
        foreach ($_SESSION['selected_products'] as $selected_product) {
            $query = query("SELECT * FROM products WHERE product_id = " . escape_string($selected_product));
            confirm($query);
            while ($row = fetch_array($query)) {
                $sub = $row['product_price'] * $_SESSION["product_" . $selected_product];
                $item_quantity += $_SESSION["product_" . $selected_product];
                $query2 = "INSERT INTO buy(buy_code,user_name, product_name, price, quantity, amount, status, photo, buyad)
                VALUES('{$_SESSION['buy_code']}','{$user_name}', '{$row['product_title']}', '{$row['product_price']}', '{$_SESSION["product_" . $selected_product]}',
               '{$sub}', 'Đang xử lý', '{$row['product_image']}', '{$_SESSION['fulladdress']}')";

                confirm($query2);
                $result = mysqli_query($connection, $query2);
                if (!$result) {
                    die('Query FAILED' . mysqli_error($connection));
                }
                unset($_SESSION['item_quantity']);
                unset($_SESSION['item_total']);
                // Trừ số lượng sản phẩm trong cơ sở dữ liệu
                $query4 = "UPDATE products 
                SET product_quantity = product_quantity - {$_SESSION["product_" . $selected_product]} 
                WHERE product_id = {$selected_product}";
                unset($_SESSION["product_" . $selected_product]);
                confirm($query4);
                $result3 = mysqli_query($connection, $query4);
                if (!$result3) {
                    die('Query FAILED' . mysqli_error($connection));
                }
            }
        }
    }
}



//hiển thị đơn hàng

function display_order()
{
    global $connection;
    $user_name = "";
    $user_id = $_SESSION['user_id'];

    $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
    confirm($query_user);
    while ($row_user = fetch_array($query_user)) {
        $user_name = $row_user['username'];
    }

    $query = query("SELECT * FROM buy WHERE user_name = '{$user_name}' ORDER BY 
        CASE
            WHEN status = 'Đang xử lý' THEN 1
            WHEN status = 'Đã xác nhận' THEN 2
            WHEN status = 'Đang giao hàng' THEN 3
            ELSE 4
        END, id DESC");

    if (mysqli_num_rows($query) > 0) {
        while ($row = fetch_array($query)) {
            $date = $row['add_date'];
            $get_date = $row['receive_date'];
            $status = $row['status'];
            $photo = display_images($row['photo']);

            echo "<tr>";
            echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Sản phẩm</th>";
            echo "<th>Số lượng</th>";
            echo "<th>Giá</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$row['product_name']}</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "<td>";
            echo number_format($row['price']);
            echo " VND</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><img width='100' src='../../kresources/{$photo}'></td>";
            echo "<td><strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";

            if ($status == 'Đang xử lý') {
                echo "<td><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend_user\delete_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";
            }

            echo "</tr>";
            echo "<tr>";
            echo "<td>Tổng tiền: ";
            echo number_format($row['amount']);
            echo " VND</td>";

            if ($status == 'Đang xử lý') {
                echo "<td>Trạng thái: 
                <div class='status-processing text-center'>
                <i class='fa fa-redo'></i> {$row['status']}</div></td>";
            } elseif ($status == 'Đã xác nhận') {
                echo "<td>Trạng thái: <div class='status-confirmed text-center'>
                <i class='fa fa-check-circle'></i> {$row['status']}</div></td>";
            } elseif ($status == 'Đang giao hàng') {
                echo "<td>Trạng thái: <div class='status-shipping text-center'>
                <i class='fa fa-truck-moving'></i> {$row['status']}</div></td>";
            } else {
                echo "<td>Trạng thái: <div class='status-delivered text-center'>
                <i class='fa fa-clipboard-check'></i> {$row['status']}</div></td>";
            }
            echo "<td>Ngày đặt: {$date}</td>";
            if ($status == 'Đã hoàn thành') {
                echo "<td>Ngày giao : {$get_date}</td>";
            }
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>Không có đơn hàng</td></tr>";
    }
}

//hiển thị đơn hàng chờ hoặc đã xác nhận 
function display_process()
{
    global $connection;
    $user_name = "";

    // Lấy username từ bảng users
    $user_id = $_SESSION['user_id']; // Giả sử user_id đã được lưu trữ trong session
    $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
    confirm($query_user);
    while ($row_user = fetch_array($query_user)) {
        $user_name = $row_user['username'];
    }

    $query = query("SELECT * FROM buy WHERE user_name = '{$user_name}' ORDER BY add_date DESC");
    // Kiểm tra xem có dữ liệu hay không
    if (mysqli_num_rows($query) > 0) {

        while ($row = fetch_array($query)) {
            $date = $row['add_date'];
            $status = $row['status'];
            $photo = display_images($row['photo']);
            if ($status == 'Đang xử lý') {
                echo "<tr>";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>{$row['product_name']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>";
                echo number_format($row['price']);
                echo " VND</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td><strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend_user\delete_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";

                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: ";
                echo number_format($row['amount']);
                echo " VND</td>";
                echo "<td>Trạng thái: <div class='status-processing text-center'>
                <i class='fa fa-redo'></i> {$row['status']}</div></td>";
                echo "<td>Ngày đặt: {$date}</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<tr><td colspan='3'>Không có đơn hàng</td></tr>";
    }
}
//hiển thị đơn hàng đã được xác nhận
function display_confirm()
{
    global $connection;
    $user_name = "";

    // Lấy username từ bảng users
    $user_id = $_SESSION['user_id']; // Giả sử user_id đã được lưu trữ trong session
    $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
    confirm($query_user);
    while ($row_user = fetch_array($query_user)) {
        $user_name = $row_user['username'];
    }

    $query = query("SELECT * FROM buy WHERE user_name = '{$user_name}' ORDER BY add_date DESC");
    // Kiểm tra xem có dữ liệu hay không
    if (mysqli_num_rows($query) > 0) {

        while ($row = fetch_array($query)) {
            $date = $row['add_date'];
            $status = $row['status'];
            $photo = display_images($row['photo']);
            if ($status == 'Đã xác nhận') {
                echo "<tr>";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>{$row['product_name']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>";
                echo number_format($row['price']);
                echo " VND</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td><strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend_user\delete_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";

                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: ";
                echo number_format($row['amount']);
                echo " VND</td>";
                echo "<td>
                Trạng thái: <div class='status-confirmed text-center'>
                <i class='fa fa-check-circle'></i> {$row['status']}</div></td>";
                echo "<td>Ngày đặt: {$date}</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<tr><td colspan='3'>Không có đơn hàng</td></tr>";
    }
}
//hiển thị đơn hàng đang được giao
function display_ship()
{
    global $connection;
    $user_name = "";

    // Lấy username từ bảng users
    $user_id = $_SESSION['user_id']; // Giả sử user_id đã được lưu trữ trong session
    $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
    confirm($query_user);
    while ($row_user = fetch_array($query_user)) {
        $user_name = $row_user['username'];
    }

    $query = query("SELECT * FROM buy WHERE user_name = '{$user_name}' ORDER BY add_date DESC");
    // Kiểm tra xem có dữ liệu hay không
    if (mysqli_num_rows($query) > 0) {
        $count = 0;

        while ($row = fetch_array($query)) {
            $date = $row['add_date'];
            $status = $row['status'];
            $photo = display_images($row['photo']);
            $count++;
            if ($status == 'Đang giao hàng') {
                echo "<tr>";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>{$row['product_name']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>";
                echo number_format($row['price']);
                echo " VND</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td><strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend_user\delete_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";

                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: ";
                echo number_format($row['amount']);
                echo " VND</td>";
                echo "<td>Trạng thái: <div class='status-shipping text-center'>
            <i class='fa fa-truck-moving'></i> {$row['status']}</div></td>";
                echo "<td>Ngày đặt: {$date}</td>";
                echo "</tr>";
            }
        }
    }
    if ($count != 0) {
        echo "<tr><td colspan='3'>Không có đơn hàng</td></tr>";
    }
}
//hiển thị đơn hàng đã hoàn thành
function display_delive()
{
    global $connection;
    $user_name = "";

    // Lấy username từ bảng users
    $user_id = $_SESSION['user_id']; // Giả sử user_id đã được lưu trữ trong session
    $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
    confirm($query_user);
    while ($row_user = fetch_array($query_user)) {
        $user_name = $row_user['username'];
    }

    $query = query("SELECT * FROM buy WHERE user_name = '{$user_name}' ORDER BY add_date DESC");
    // Kiểm tra xem có dữ liệu hay không
    if (mysqli_num_rows($query) > 0) {
        $count = 0;

        while ($row = fetch_array($query)) {
            $date = $row['add_date'];
            $get_date = $row['receive_date'];
            $status = $row['status'];
            $photo = display_images($row['photo']);
            $count++;
            if ($status == 'Đã hoàn thành') {
                echo "<tr>";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>{$row['product_name']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>";
                echo number_format($row['price']);
                echo " VND</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td><strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend_user\delete_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";

                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: ";
                echo number_format($row['amount']);
                echo " VND</td>";
                echo "<td>
                Trạng thái: <div class='status-delivered text-center'>
                <i class='fa fa-clipboard-check'></i> {$row['status']}</div></td>";
                echo "<td>Ngày đặt: {$date}</td>";
                if ($status == 'Đã hoàn thành') {
                    echo "<td>Ngày giao : {$get_date}</td>";
                }
                echo "</tr>";
            }
        }
    }
    if ($count != 0) {
        echo "<tr><td colspan='3'>Không có đơn hàng</td></tr>";
    }
}
//hiển thị đơn hàng ad
function display_adorder()
{
    $query = query("SELECT * FROM buy ORDER BY 
    CASE
            WHEN status = 'Đang xử lý' THEN 1
            WHEN status = 'Đã xác nhận' THEN 2
            WHEN status = 'Đang giao hàng' THEN 3
            ELSE 4
    END,id DESC");
    confirm($query);

    if (mysqli_num_rows($query) > 0) {


        while ($row = fetch_array($query)) {
            $photo = display_images($row['photo']);
            $price = number_format($row['price']);
            $id = $row['id'];
            $date = $row['add_date'];
            $status = $row['status'];
            $get_date = $row['receive_date'];
            $amount = number_format($row['amount']);
            echo "<tr> ";
            echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
            echo "</tr>";
            echo "<tr> ";
            echo "<th>ID</th>";
            echo "<th>Sản phẩm</th>";
            echo "<th>Số lượng</th>";
            echo "<th>Giá</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>&nbsp{$id}<br><img width='100' src='../../kresources/{$photo}'></td>";
            echo "<td>{$row['product_name']}<br/>
            <strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "<td>{$price} VND<br><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend\delete_ad_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tổng tiền: {$amount} VND</td>";


            if ($status == 'Đang xử lý') {
                echo "<td>Trạng thái: <div class='status-processing text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-redo'></i> {$row['status']}</div>
                </td>";
            } elseif ($status == 'Đã xác nhận') {
                echo "<td>
                Trạng thái: <div class='status-confirmed text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-check-circle'></i> {$row['status']}</div></td>";
            } elseif ($status == 'Đang giao hàng') {
                echo "<td>
                Trạng thái: <div class='status-shipping text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-truck-moving'></i> {$row['status']}</div></td>";
            } else {
                echo "<td>
                Trạng thái: <div class='status-delivered text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-clipboard-check'></i> {$row['status']}</div></td>";
            }
            echo "<td>
            <form id='form{$row['id']}' style='display: none;
            ' action='index.php?update_status&order_id={$row['id']}' method='post' enctype='multipart/form-data'>
                <label>Chỉnh sửa trạng thái đơn hàng : </label><br/>
                <select name='status'>
                    <option value='Đang xử lý'>Đang xử lý</option>
                    <option value='Đã xác nhận'>Đã xác nhận</option>
                    <option value='Đang giao hàng'>Đang giao hàng</option>
                    <option value='Đã hoàn thành'>Đã hoàn thành</option>
                </select>
                <div class='form-group text-left'>
                    <input type='submit' name='edit_status' class='btn btn-success' value='Lưu'>
                </div>
            </form> 
            <script>
            function toggleForm(formId) 
            {
                var form = document.getElementById(formId);
                if (form.style.display === 'none') 
                {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            }
            </script>
        </td>";

            echo "<td>Ngày đặt: {$date}</td>";
            if ($status == 'Đã hoàn thành') {
                echo "<td>Ngày giao : {$get_date}</td>";
            }
            echo "</tr>";

        }
    } else {
        echo "<br><h4 class='text-center' colspan='4'><strong>Không có đơn hàng</strong></h4>";
    }
}
//hiển thị đơn hàng đang chờ xử lý:
function display_ad_process()
{
    $count = 0;
    $query = query("SELECT * FROM buy ORDER BY id DESC");
    confirm($query);

    if (mysqli_num_rows($query) > 0) {


        while ($row = fetch_array($query)) {
            $photo = display_images($row['photo']);
            $price = number_format($row['price']);
            $id = $row['id'];
            $date = $row['add_date'];
            $status = $row['status'];
            $amount = number_format($row['amount']);
            if ($status == 'Đang xử lý') {
                echo "<tr> ";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr> ";
                echo "<th>ID</th>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>&nbsp{$id}<br><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td>{$row['product_name']}<br/>
            <strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>{$price} VND<br><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend\delete_ad_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: {$amount} VND</td>";

                echo "<td>Trạng thái: <div class='status-processing text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-redo'></i> {$row['status']}</div></td>";
                echo "<td>
            <form id='form{$row['id']}' style='display: none;
            ' action='index.php?update_status&order_id={$row['id']}' method='post' enctype='multipart/form-data'>
                <label>Chỉnh sửa trạng thái đơn hàng : </label><br/>
                <select name='status'>
                    <option value='Đang xử lý'>Đang xử lý</option>
                    <option value='Đã xác nhận'>Đã xác nhận</option>
                    <option value='Đang giao hàng'>Đang giao hàng</option>
                    <option value='Đã hoàn thành'>Đã hoàn thành</option>
                </select>
                <div class='form-group text-left'>
                    <input type='submit' name='edit_status' class='btn btn-success' value='Lưu'>
                </div>
            </form> 
            <script>
            function toggleForm(formId) 
            {
                var form = document.getElementById(formId);
                if (form.style.display === 'none') 
                {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            }
            </script>
        </td>";

                echo "<td>Ngày đặt: {$date}</td>";
                echo "</tr>";
                $count++;

            }
        }
    }
    if ($count == 0) {
        echo "<br><h4 class='text-center' colspan='4'><strong>Không có đơn hàng</strong></h4>";
    }
}
//Hiển thị đơn hàng theo trạng thái : đã xác nhận

function display_ad_confirm()
{
    $count = 0;
    $query = query("SELECT * FROM buy ORDER BY id DESC");
    confirm($query);

    if (mysqli_num_rows($query) > 0) {


        while ($row = fetch_array($query)) {
            $photo = display_images($row['photo']);
            $price = number_format($row['price']);
            $id = $row['id'];
            $date = $row['add_date'];
            $status = $row['status'];
            $get_date = $row['receive_date'];
            $amount = number_format($row['amount']);
            if ($status == 'Đã xác nhận') {
                echo "<tr> ";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr> ";
                echo "<th>ID</th>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>&nbsp{$id}<br><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td>{$row['product_name']}<br/>
            <strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>{$price} VND<br><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend\delete_ad_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: {$amount} VND</td>";
                echo "<td>
                Trạng thái: <div class='status-confirmed text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-check-circle'></i> {$row['status']}</div>
                </td>";
                echo "<td>
            <form id='form{$row['id']}' style='display: none;
            ' action='index.php?update_status&order_id={$row['id']}' method='post' enctype='multipart/form-data'>
                <label>Chỉnh sửa trạng thái đơn hàng : </label><br/>
                <select name='status'>
                    <option value='Đang xử lý'>Đang xử lý</option>
                    <option value='Đã xác nhận'>Đã xác nhận</option>
                    <option value='Đang giao hàng'>Đang giao hàng</option>
                    <option value='Đã hoàn thành'>Đã hoàn thành</option>
                </select>
                <div class='form-group text-left'>
                    <input type='submit' name='edit_status' class='btn btn-success' value='Lưu'>
                </div>
            </form> 
            <script>
            function toggleForm(formId) 
            {
                var form = document.getElementById(formId);
                if (form.style.display === 'none') 
                {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            }
            </script>
        </td>";

                echo "<td>Ngày đặt: {$date}</td>";
                echo "</tr>";
                $count++;

            }
        }
    }
    if ($count == 0) {
        echo "<br><h4 class='text-center' colspan='4'><strong>Không có đơn hàng</strong></h4>";
    }
}
//Hiển thị đơn hàng theo trạng thái đang vận chuyển
function display_ad_ship()
{
    $count = 0;
    $query = query("SELECT * FROM buy ORDER BY id DESC");
    confirm($query);

    if (mysqli_num_rows($query) > 0) {


        while ($row = fetch_array($query)) {
            $photo = display_images($row['photo']);
            $price = number_format($row['price']);
            $id = $row['id'];
            $date = $row['add_date'];
            $status = $row['status'];
            $get_date = $row['receive_date'];
            $amount = number_format($row['amount']);
            if ($status == 'Đang giao hàng') {
                echo "<tr> ";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr> ";
                echo "<th>ID</th>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>&nbsp{$id}<br><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td>{$row['product_name']}<br/>
            <strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>{$price} VND<br><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend\delete_ad_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: {$amount} VND</td>";
                echo "<td>
                Trạng thái: <div class='status-shipping text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-truck-moving'></i> {$row['status']}</div></td>";
                echo "<td>
            <form id='form{$row['id']}' style='display: none;
            ' action='index.php?update_status&order_id={$row['id']}' method='post' enctype='multipart/form-data'>
                <label>Chỉnh sửa trạng thái đơn hàng : </label><br/>
                <select name='status'>
                    <option value='Đang xử lý'>Đang xử lý</option>
                    <option value='Đã xác nhận'>Đã xác nhận</option>
                    <option value='Đang giao hàng'>Đang giao hàng</option>
                    <option value='Đã hoàn thành'>Đã hoàn thành</option>
                </select>
                <div class='form-group text-left'>
                    <input type='submit' name='edit_status' class='btn btn-success' value='Lưu'>
                </div>
            </form> 
            <script>
            function toggleForm(formId) 
            {
                var form = document.getElementById(formId);
                if (form.style.display === 'none') 
                {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            }
            </script>
        </td>";

                echo "<td>Ngày đặt: {$date}</td>";
                echo "</tr>";
                $count++;

            }
        }
    }
    if ($count == 0) {
        echo "<br><h4 class='text-center' colspan='4'><strong>Không có đơn hàng</strong></h4>";
    }
}
//Hiển thị danh sách đơn hàng theo trạng thái đã hoàn thành
function display_ad_delive()
{
    $count = 0;
    $query = query("SELECT * FROM buy ORDER BY id DESC");
    confirm($query);

    if (mysqli_num_rows($query) > 0) {


        while ($row = fetch_array($query)) {
            $photo = display_images($row['photo']);
            $price = number_format($row['price']);
            $id = $row['id'];
            $date = $row['add_date'];
            $status = $row['status'];
            $get_date = $row['receive_date'];
            $amount = number_format($row['amount']);
            if ($status == 'Đã hoàn thành') {
                echo "<tr> ";
                echo "<td><hr style='border: 1px solid blue; width:500%;'> </td>";
                echo "</tr>";
                echo "<tr> ";
                echo "<th>ID</th>";
                echo "<th>Sản phẩm</th>";
                echo "<th>Số lượng</th>";
                echo "<th>Giá</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>&nbsp{$id}<br><img width='100' src='../../kresources/{$photo}'></td>";
                echo "<td>{$row['product_name']}<br/>
                <strong>địa chỉ:</strong> " . nl2br($row['buyad']) . "</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>{$price} VND<br><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend\delete_ad_order.php?id={$row['id']}'
                onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class ='glyphicon glyphicon-remove'></span></a></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Tổng tiền: {$amount} VND</td>";
                echo "<td>
                Trạng thái: <div class='status-delivered text-center' onclick='toggleForm(\"form{$row['id']}\")'>
                <i class='fa fa-clipboard-check'></i> {$row['status']}</div></td>";
                echo "<td>
                <form id='form{$row['id']}' style='display: none;
                ' action='index.php?update_status&order_id={$row['id']}' method='post' enctype='multipart/form-data'>
                <label>Chỉnh sửa trạng thái đơn hàng : </label><br/>
                <select name='status'>
                    <option value='Đang xử lý'>Đang xử lý</option>
                    <option value='Đã xác nhận'>Đã xác nhận</option>
                    <option value='Đang giao hàng'>Đang giao hàng</option>
                    <option value='Đã hoàn thành'>Đã hoàn thành</option>
                </select>
                <div class='form-group text-left'>
                    <input type='submit' name='edit_status' class='btn btn-success' value='Lưu'>
                </div>
                </form> 
                <script>
                function toggleForm(formId) 
                {
                var form = document.getElementById(formId);
                if (form.style.display === 'none') 
                {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
                }
                </script>
                </td>";

                echo "<td>Ngày đặt: {$date}</td>";
                if ($status == 'Đã hoàn thành') {
                    echo "<td>Ngày giao : {$get_date}</td>";
                }
                echo "</tr>";

                $count++;

            }
        }
    }
    if ($count == 0) {
        echo "<br><h4 class='text-center' colspan='4'><strong>Không có đơn hàng</strong></h4>";
    }
}
//cập nhật trạng thái đơn hàng theo id
function update_status()
{
    if (isset($_POST['update_status']) && isset($_POST['id'])) {
        $status = $_POST['status'];
        $id = $_POST['id'];

        // Truy vấn dữ liệu từ cơ sở dữ liệu để lấy thông tin về đơn hàng
        $query_order_info = query("SELECT add_date, user_name, product_name, price, quantity, amount, status, photo, buyad, receive_date FROM buy WHERE id = '{$id}'");
        confirm($query_order_info);
        $row = fetch_array($query_order_info);
        $date = $row['add_date'];
        $user_name = $row['user_name'];
        $product_name = $row['product_name'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $amount = $row['amount'];
        $photo = $row['photo'];
        $buyad = $row['buyad'];
        $receive_date = $row['receive_date'];

        if ($status == 'Đã hoàn thành') {
            $query = query("UPDATE buy SET status = '{$status}', add_date ='{$date}', receive_date = CURRENT_TIMESTAMP WHERE id = '{$id}'");
            $query_orders = query("INSERT INTO orders (order_name, order_quantity, order_amount, order_status, order_currency, receive_date) 
            VALUES ('{$product_name}', '{$quantity}', '{$amount}', '{$status}', 'VND', '{$receive_date}')");
        } else {
            $query = query("UPDATE buy SET status = '{$status}' WHERE id = '{$id}'");
            $query_orders = query("UPDATE orders SET order_status = '{$status}' WHERE order_name = '{$product_name}'");
        }

        confirm($query);
        confirm($query_orders);
        set_message("Cập nhật trạng thái thành công");
        redirect("../admin/index.php?admin_order");
    }
}
//Cập nhật trạng thái đơn hàng
//hiện doanh thu
function display_revenue()
{
    $query = query("SELECT * FROM orders");
    confirm($query);

    $revenue = array(); // Mảng để lưu trữ thông tin của các đơn hàng
    echo "<table class='table table-hover' border='1px'>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Số lượng</th>
                    <th>Số tiền</th>
                    <th>Đơn vị</th>
                    <th>Trạng thái</th>
                    <th>Ngày cập nhật </th>
                </tr>
            </thead>
            <tbody>";

    while ($row = fetch_array($query)) {
        $order_id = $row['order_id'];
        $order_name = $row['order_name'];
        $order_quantity = $row['order_quantity'];
        $order_amount = $row['order_amount'];
        $order_status = $row['order_status'];
        $order_currency = $row['order_currency'];
        $get_date = $row['get_date'];

        if (array_key_exists($order_name, $revenue)) {
            $revenue[$order_name]['order_quantity'] += $order_quantity;
            $revenue[$order_name]['order_amount'] += $order_amount;
        } else {
            $revenue[$order_name] = array(
                'order_id' => $order_id,
                'order_quantity' => $order_quantity,
                'order_amount' => $order_amount,
                'order_status' => $order_status,
                'order_currency' => $order_currency,
            );
        }

        echo "<tr>
         <td>{$order_id}</td>
        <td>{$order_name}</td>
        <td>{$order_quantity}</td>
        <td>{$order_amount}</td>
        <td>{$order_currency}</td>
        <td>{$order_status}</td>
        <td>{$get_date}</td>
        <td><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend\delete_revenue.php?name={$order_name}' 
        onclick=\"return confirm('Bạn có chắc chắn muốn xóa không?')\"><span class='glyphicon glyphicon-remove'></span></a></td>
    </tr>";
    }

    foreach ($revenue as $name => $data) {
        $order_id = $data['order_id'];
        $order_quantity = $data['order_quantity'];
        $order_amount = number_format($data['order_amount']);
        $order_status = $data['order_status'];
        $order_currency = $data['order_currency'];

    }

    echo "</tbody></table>";
}


//#########################################
//**********************************************************************USER FUNCTIONS************************************
//#######################################
//Thêm tài khoản từ trang admin
function add_user()
{


    if (isset($_POST['add_user'])) {

        $user_level = escape_string($_POST['user_level']);

        $first_name = escape_string($_POST['first_name']);
        $last_name = escape_string($_POST['last_name']);
        $username = escape_string($_POST['username']);
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);
        $user_photo = ($_FILES['file']['name']);
        $image_temp_location = ($_FILES['file']['tmp_name']);
        $user_sex = escape_string($_POST['sex']);
        $final_destination = UPLOAD_DIRECTORY . DS . $user_photo;
        move_uploaded_file($image_temp_location, $final_destination);


        $query = query("INSERT INTO users(user_level,first_name,last_name,username,email,password,user_photo,sex) 
        VALUES('{$user_level}','{$first_name}','{$last_name}','{$username}','{$email}','{$password}','$user_photo','{$user_sex}') ");
        confirm($query);

        set_message("USER CREATED");

        redirect("index.php?users");

    }

}
// người dùng đăng kí tài khoản mới
function register_user()
{
    if (isset($_POST['register_user'])) {
        $user_level = 1; // Thêm mặc định cho user_level là 1 nếu không có giá trị được gửi lên
        $first_name = escape_string($_POST['first_name']);
        $last_name = escape_string($_POST['last_name']);
        $username = escape_string($_POST['username']);
        $email = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);
        $user_photo = ($_FILES['file']['name']);
        $user_sex = escape_string($_POST['sex']);
        $image_temp_location = ($_FILES['file']['tmp_name']);
        $final_destination = UPLOAD_DIRECTORY . DS . $user_photo;
        move_uploaded_file($image_temp_location, $final_destination);

        // Kiểm tra dữ liệu có khớp với database hay không
        $query = query("SELECT * FROM users WHERE email = '{$email}' OR username = '{$username}'");
        confirm($query);
        if (mysqli_num_rows($query) > 0) {
            // Nếu dữ liệu đã tồn tại, hiển thị thông báo yêu cầu nhập lại
            $existing_info = [];
            while ($row = fetch_array($query)) {
                if ($row['email'] == $email) {
                    $existing_info[] = 'Địa chỉ email';
                }
                if ($row['username'] == $username) {
                    $existing_info[] = 'Tên tài khoản';
                }
            }
            $error_message = implode(' và ', $existing_info) . " đã tồn tại, vui lòng nhập lại.";
            set_message($error_message);
        } else {
            // Nếu dữ liệu không tồn tại, thêm mới người dùng và chuyển đến trang login.php
            $query = query("INSERT INTO users(user_level,first_name,last_name,username,email,password,user_photo,sex) 
            VALUES('{$user_level}','{$first_name}','{$last_name}','{$username}','{$email}','{$password}','$user_photo','{$user_sex}')");
            confirm($query);
            set_message("TẠO TÀI KHOẢN THÀNH CÔNG");
            redirect("login.php");
        }
    }
}



//the log in to the system
function login_user()
{
    if (isset($_POST['submit'])) {
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM users WHERE username ='{$username}' AND password='{$password}' ");
        confirm($query);
        if (mysqli_num_rows($query) == 0) {
            set_message("TÀI KHOẢN HƠCJ MẬT KHẨU KHÔNG CHÍNH XÁC, VUI LÒNG ĐĂNG NHẬP LẠI!");
            redirect("login.php");
        } else {
            $row = fetch_array($query);
            $user_level = $row['user_level'];
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $row['user_id'];
            if ($user_level == 2) {
                redirect("..\public\index.php");
            } else if ($user_level == 1) {
                redirect("index_user.php");
            }
        }
    }
}
//hiển thị người dùng
function display_user()
{
    $category_query = query("SELECT * FROM users");
    confirm($category_query);

    while ($row = fetch_array($category_query)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $user_level = $row['user_level'];
        $username = $row['username'];
        $email = $row['email'];
        $sex = $row['sex'];
        $password = $row['password'];
        // Retrieve the image path from the database
        $user_photo = $row['user_photo'];

        // Add condition to only display the currently logged-in user
        if ($username === $_SESSION['username']) {
            $user = <<<DELIMETER
            <div class="row justify-content-center">
            <div class="media-left  col-sm-3">
            <table>
            <tr>
                <td><strong><a href="index_user.php?edit_user&user_id={$row['user_id']}">Tên tài khoản: </strong>
                <input type="text" class="form-control" value="{$username}" readonly style='cursor: pointer;'></td>
            </tr>
            <tr>
                <td><strong>Tên: </strong>
                <input type="text" class="form-control" value="{$first_name}" readonly></td>
            </tr>
            <tr>
                <td><div class="form-group"><strong>Họ: </strong>
                <input type="text" class="form-control" value="{$last_name}" readonly></div></td>
            </tr>
            <tr>
                <td><strong>Email: </strong>
                <input class="form-control" value="{$email}" readonly></td>
            </tr>
            <tr>
                <td><strong>Giới tính: </strong>
                <input class="form-control" value="{$sex}" readonly></td>
            </tr>
        </table>
        
            </div>
            <div class='media-right col-sm-5'>
            <img src='../../kresources/uploads/{$user_photo}' style="width: 300px;height: 300px;border: 1px solid black;border-radius: 15%;overflow: hidden;">
            </div>
            </div>
        DELIMETER;

            echo $user;
        }
    }
}
//hiển thị các tài khoản đã có trong db
function display_users()
{

    $category_query = query("SELECT * FROM users");
    confirm($category_query);


    while ($row = fetch_array($category_query)) {

        $user_id = $row['user_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $user_level = $row['user_level'];
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        $user_photo = $row['user_photo'];
        $sex = $row['sex'];
        $user = <<<DELIMETER


<tr>
    <td><a href="index.php?edit_users&user_id={$row['user_id']}">{$user_id}</td>
    <td>{$user_level}</td>
    <td>{$username}<br>
    <img width='100'src='../../kresources/uploads/{$user_photo}'></td></td>
    <td>{$first_name}</td>
    <td>{$last_name}</td>
     <td>{$email}</td>
     <td>{$sex}</td>
    <td><a class="btn btn-danger" href="..\..\kresources\ktemplates\backend\delete_user.php?id={$row['user_id']}"
    onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>



DELIMETER;

        echo $user;
    }
}
function edit_user()
{
    if (isset($_POST['update_user'])) {
        $user_id = $_SESSION['user_id'];
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_photo = ($_FILES['file']['name']);
        if (empty($sex)) {
            $get_level = query("SELECT sex FROM users WHERE user_id =" . escape_string($_GET['user_id']) . "");
            confirm($get_level);
            $row = fetch_array($get_level);
            $sex = $row['sex'];
        } else {
            $sex = $_POST['sex'];
        }
        $image_temp_location = ($_FILES['file']['tmp_name']);
        $final_destination = UPLOAD_DIRECTORY . DS . $user_photo;
        move_uploaded_file($image_temp_location, $final_destination);
        if (empty($user_photo)) {
            $get_pic = query("SELECT user_photo FROM users WHERE user_id =" . escape_string($_GET['user_id']) . "");
            confirm($get_pic);
            $row = fetch_array($get_pic);
            $user_photo = $row['user_photo'];
        }
        $query = "UPDATE users SET 
                    username = '{$username}',
                    first_name = '{$first_name}',
                    last_name = '{$last_name}',
                    sex = '{$sex}',
                    email = '{$email}',
                    password = '{$password}',
                    user_photo = '{$user_photo}' 
                    WHERE user_id={$user_id}";

        $send_update_query = query($query);
        confirm($send_update_query);

        echo "<script>alert('Dữ liệu đã được cập nhật thành công!'); window.location='index_user.php?user';</script>";

    }
}


function edit()
{
    if (isset($_POST['update_users'])) {
        if (empty($user_level)) {
            $get_level = query("SELECT user_level FROM users WHERE user_id =" . escape_string($_GET['user_id']) . "");
            confirm($get_level);
            $row = fetch_array($get_level);
            $user_level = $row['user_level'];
        } else {
            $user_level = $_POST['user_level'];
        }
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $sex = $_POST['sex'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_photo = ($_FILES['file']['name']);
        $image_temp_location = ($_FILES['file']['tmp_name']);
        $final_destination = UPLOAD_DIRECTORY . DS . $user_photo;
        move_uploaded_file($image_temp_location, $final_destination);
        if (empty($user_photo)) {
            $get_pic = query("SELECT user_photo FROM users WHERE user_id =" . escape_string($_GET['user_id']) . "");
            confirm($get_pic);
            $row = fetch_array($get_pic);
            $user_photo = $row['user_photo'];
        }
        if (empty($sex)) {
            $get_level = query("SELECT sex FROM users WHERE user_id =" . escape_string($_GET['user_id']) . "");
            confirm($get_level);
            $row = fetch_array($get_level);
            $sex = $row['sex'];
        } else {
            $sex = $_POST['sex'];
        }
        $query = "UPDATE users SET 
                    user_level = '{$user_level}',
                    username = '{$username}',
                    first_name = '{$first_name}',
                    last_name = '{$last_name}',
                    sex = '{$sex}',
                    email = '{$email}',
                    password = '{$password}',
                    user_photo = '{$user_photo}'
                    WHERE user_id = " . escape_string($_GET['user_id']) . "";

        $send_update_query = query($query);
        confirm($send_update_query);

        echo "<script>alert('Dữ liệu đã được cập nhật thành công!'); window.location='index.php?users';</script>";

    }
}



//hiện tên người dùng trong trang quả lý
function user_name()
{
    $query = query("SELECT * FROM users WHERE username ='{$_SESSION['username']}' ");
    confirm($query);
    return $_SESSION['username'];
}



//#########################################

//#######################################
//#########################################

//#######################################
//gửi hỗ trợ đến admin
function send_message()
{
    if (isset($_POST['submit'])) {
        $to = "ndt87864@gmail.com";
        $from_name = $_POST['name'];
        $from_email = $_POST['email'];
        $from_subject = $_POST['subject'];
        $from_message = $_POST['message'];

        $headers = "From: {$from_name} <{$from_email}>";
        $headers .= "Reply-To: {$from_email}";
        $headers .= "MIME-Version: 1.0";
        $headers .= "Content-Type: text/html; charset=UTF-8";

        $result = mail($to, $from_subject, $from_message, $headers);

        if (!$result) {
            set_message('LỖI! Tin nhắn chưa được gửi , vui lòng thử lại');
            redirect("contact.php");
        } else {
            set_message('Tin nhắn của bạn đã được gửi , vui lòng đợi phản hồi');
            redirect("contact.php");
        }
    }
}



function last_id()
{
    global $connection;
    return mysqli_insert_id($connection);
}

//up ảnh
function display_images($pictures)
{
    global $upload_path;

    return $upload_path . DS . $pictures;
}
/******************ADDRESS Functions *******************/
//hiển thị địa chỉ, thông tin nhận hàng
function display_address()
{
    $username = "";
    $user_id = $_SESSION['user_id']; // Giả sử user_id đã được lưu trữ trong session
    $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
    confirm($query_user);

    while ($row_user = fetch_array($query_user)) {
        $user_name = $row_user['username'];
    }

    if (isset($_SESSION['username']) && $_SESSION['username'] == $user_name) {
        $query_address = query("SELECT * FROM address WHERE username = '{$user_name}'");
        confirm($query_address);
        echo "<tr>
        <th>Họ và tên</th>
          <th>Số điện thoại</th>
          <th>Tỉnh/Thành phố</th>
          <th>Huyện</th>
          <th>Xã/Phường</th>
          <th>Địa chỉ cụ thể</th>
          <th>Xóa</th>
          <th>POP UP</th></tr>";
        if (mysqli_num_rows($query_address) > 0) {
            while ($row = fetch_array($query_address)) {
                // Lấy thông tin địa chỉ từ cột
                $fullname = $row['fullname'];
                $phone = $row['phone'];
                $province = $row['province'];
                $district = $row['district'];
                $ward = $row['ward'];
                $address = $row['address'];

                // Hiển thị thông tin địa chỉ
                echo "
                  <tr>
                  <td><a href='index_user.php?edit_address&id={$row['id']}'>{$fullname}</td>
                  <td>{$phone}</td>
                  <td>{$province}</td>
                  <td>{$district}</td>
                  <td>{$ward}</td>
                  <td>{$address}</td>";
                $delete = <<<DELIMETER
                  <td><a class='btn btn-danger' href='..\..\kresources\ktemplates\backend_user\delete_address.php?id={$row['id']}'
                  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                  <span class='glyphicon glyphicon-remove'></span></a></td>
                  DELIMETER;
                echo $delete;
                if ($row['id'] == 1) {
                    continue;
                } else {
                    $popup = <<<DELIMETER
                    <td><a class='btn btn-success' href='..\..\kresources\ktemplates\backend_user\change_location.php?id={$row['id']}'
                  onclick="return confirm('Bạn có chắc chắn muốn đẩy địa chỉ này làm địa chỉ nhận hàng không ?')">
                  <span class='fa fa-fw fa-arrow-circle-up'></span></a></td>
                  DELIMETER;
                    echo $popup;
                }
                echo "</tr>";
            }
        } else {
            echo "<h2 class='text-center'>Chưa thêm thông tin đơn hàng</h2>";
        }
    }
}



// hiện địa chỉ trong trang đặt hàng
function buy_address()
{
    $username = "";
    $user_id = $_SESSION['user_id']; // Giả sử user_id đã được lưu trữ trong session
    $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
    confirm($query_user);

    while ($row_user = fetch_array($query_user)) {
        $user_name = $row_user['username'];
    }

    if (isset($_SESSION['username']) && $_SESSION['username'] == $user_name) {
        $query_address = query("SELECT * FROM address WHERE username = '{$user_name}'");
        confirm($query_address);
        if ($row = fetch_array($query_address)) {
            $fullname = $row['fullname'];
            $phone = $row['phone'];
            $province = $row['province'];
            $district = $row['district'];
            $ward = $row['ward'];
            $address = $row['address'];

            $fulladdress = <<<DELIMETER

        <tr>
            <td><strong>{$fullname}</strong> {$phone}</td>
        </tr>
        <tr>
            <td>{$address}, {$ward}, {$district}, {$province}</td>
        </tr>

        DELIMETER;

            echo $fulladdress;
            $fulladdress = $fullname . ";" . $phone . "\n" . $province . ";" . $district . ";" . $ward . "\n" . $address;
            $_SESSION['fulladdress'] = $fulladdress;
        }
    } else {
        $addAddressLink = <<<DELIMETER

        <tr>
            <td><a href="user/index_user.php?add_address">Thêm địa chỉ</td>
        </tr>

        DELIMETER;

        echo $addAddressLink;
    }
}

//thêm địa chỉ
function add_address()
{
    if (isset($_POST['add_address'])) {
        // Lấy tên người dùng từ bảng users

        $user_name = "";
        $user_id = $_SESSION['user_id'];
        $query_user = query("SELECT username FROM users WHERE user_id = " . escape_string($user_id));
        confirm($query_user);
        while ($row_user = fetch_array($query_user)) {
            $user_name = $row_user['username'];
        }
        $fullname = escape_string($_POST['fullname']);
        $phone = escape_string($_POST['phone']);
        $province = escape_string($_POST['province']);
        $district = escape_string($_POST['district']);
        $ward = escape_string($_POST['ward']);
        $address = escape_string($_POST['address']);

        if (empty($fullname) || empty($phone) || empty($province) || empty($district) || empty($ward) || empty($address)) {
            echo "<h2 class='text-center bg-danger'>Các trường không được để trống</h2>";
        } else {
            // Thực hiện INSERT vào bảng address
            $query = query("INSERT INTO address(username, fullname, phone, province, district, ward, address) 
                            VALUES('{$user_name}', '{$fullname}', '{$phone}', '{$province}', '{$district}', '{$ward}', '{$address}')");
            confirm($query);
            echo "<script>alert('Dữ liệu đã được cập nhật thành công!'); window.location='index_user.php?address';</script>";

        }
    }
}

function update_address()
{
    if (isset($_POST['update_address'])) {
        $fullname = escape_string($_POST['fullname']);
        $phone = escape_string($_POST['phone']);
        $province = escape_string($_POST['province']);
        $district = escape_string($_POST['district']);
        $ward = escape_string($_POST['ward']);
        $address = escape_string($_POST['address']);
        $query = "UPDATE address SET 
                        fullname = '{$fullname}',
                        phone = '{$phone}',
                        province = '{$province}',
                        district = '{$district}',
                        ward = '{$ward}',
                        address = '{$address}'
                        WHERE id = " . escape_string($_GET['id']) . "";

        $send_update_query = query($query);
        confirm($send_update_query);

        set_message("Địa chỉ đã được cập nhật");
        redirect("index_user.php?address");
    }
}

/******************SLIDES Functions *******************/

//thêm slides
function add_slides()
{
    if (isset($_POST['add_slide'])) {
        $slide_title = escape_string($_POST['slide_title']);
        $slide_image = $_FILES['file']['name'];
        $slide_image_loc = $_FILES['file']['tmp_name'];
        if (empty($slide_title) || empty($slide_image)) {
            echo "<p class='bg-danger'>KHÔNG THỂ ĐỂ TRỐNG TRƯỜNG NÀY</p>";
        } else {
            $final_destination = UPLOAD_DIRECTORY . DS . $slide_image;
            move_uploaded_file($slide_image_loc, $final_destination);
            $query = query("INSERT INTO slides(slide_title, slide_image) VALUES('{$slide_title}', '{$slide_image}')");
            confirm($query);
            set_message("Slide đã được thêm");
            redirect("index.php?slides");
        }
    }
}

function get_current_slide_in_admin()
{
    $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);

    while ($row = fetch_array($query)) {

        $slide_image = display_images($row['slide_image']);

        $slide_active_admin = <<<DELIMETER
    <img width='800' height='300' class="img-responsive" src="../../kresources/{$slide_image}" alt="">
DELIMETER;
        echo $slide_active_admin;
    }
}
function get_active_slide()
{
    $query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
    confirm($query);
    while ($row = fetch_array($query)) {
        $slide_image = display_images($row['slide_image']);
        $slide_active = <<<DELIMETER
 <div class="item active">
    <img width='800' height='300' class="slide-image" src="../kresources/{$slide_image}" alt="">
</div>
DELIMETER;
        echo $slide_active;
    }

}



function get_slides()
{

    $query = query("SELECT * FROM slides");
    confirm($query);
    while ($row = fetch_array($query)) {
        $slide_image = display_images($row['slide_image']);
        $slides = <<<DELIMETER


<div class="item">
    <img width='800' height='300' class="slide-image"  src="../kresources/{$slide_image}" alt="">
</div>

DELIMETER;
        echo $slides;
    }

}


function get_slide_thumbnails()
{
    $query = query("SELECT * FROM slides ORDER BY slide_id ASC ");
    confirm($query);

    while ($row = fetch_array($query)) {

        $slide_image = display_images($row['slide_image']);

        $slide_thumb_admin = <<<DELIMETER


<div class="col-xs-6 col-md-3 image_container">
    
    <a href="index.php?delete_slide_id={$row['slide_id']}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
        
         <img width='800' height='300' class="img-responsive slide_image" src="../../kresources/{$slide_image}" alt="">


    </a>

    <div class="caption">

    <p>{$row['slide_title']}</p>

    </div>


</div>
DELIMETER;

        echo $slide_thumb_admin;


    }

}
?>