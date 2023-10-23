
<?php require_once('..\kresources\config.php'); ?>

<?php require_once ('..\kresources\cart.php');?>
<?php include(TEMPLATE_FRONT_USER . DS . 'header_user.php');?>
<?php
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
        echo "<script>window.location='thank_you.php';</script>";
    }
} elseif ($_GET['vnp_ResponseCode'] != '00') {
    echo "<script>alert('Thanh toán không thành công!trở lại giỏ hàng'); window.location='checkout.php';</script>";
}
?>