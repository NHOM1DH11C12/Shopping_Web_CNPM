<?php 
require_once("..\..\config.php");
if(isset($_GET['id'])){
$query = query("DELETE FROM buy WHERE id = " .escape_string($_GET['id'])."");
confirm($query);
set_message("đã xóa đơn hàng");
redirect("..\..\..\public\admin\index.php?admin_order");
}else{
redirect("..\..\..\public\admin\index.php?admin_order");

}
?>