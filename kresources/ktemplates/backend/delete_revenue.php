<?php 
require_once("..\..\config.php");

if(isset($_GET['name'])){
    $query = query("DELETE FROM orders WHERE order_name = '" . escape_string($_GET['name']) . "'");
    confirm($query);
    set_message("Đã xóa");
    redirect("..\..\..\public\admin\index.php?revenue");
} else{
    redirect("..\..\..\public\admin\index.php?revenue");
}
?>
