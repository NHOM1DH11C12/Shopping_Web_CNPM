<?php
require_once(__DIR__ . "/../../config.php");

if (isset($_GET['order_id']) && isset($_POST['edit_status'])) {
    $status = $_POST['status'];
    $id = $_GET['order_id'];

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
} else {
    redirect("../admin/index.php?admin_order");
}
?>
