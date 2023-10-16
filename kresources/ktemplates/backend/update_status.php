<?php 
function update_ad_status()
{
    $connection = mysqli_connect("localhost", "root", "", "toy");

    // Kiểm tra nếu nhận được yêu cầu
    if (isset($_GET['order_id'])&& isset($_POST['edit_status']) ) {
        $status = $_POST['status'];
        $id = $_GET['order_id'];

        $query = "UPDATE buy SET status = '{$status}' WHERE id = '{$id}'";
        $result = mysqli_query($connection, $query);

        $query_orders = "UPDATE orders SET order_status = '{$status}' WHERE order_id = '{$id}'";
        $result_orders = mysqli_query($connection, $query_orders);

        if ($result && $result_orders) {
            set_message("Cập nhật trạng thái thành công");
            redirect("../admin/index.php?admin_order");
        } else {
            echo "Lỗi cập nhật trạng thái: " . mysqli_error($connection);
        }
    }
}
?>