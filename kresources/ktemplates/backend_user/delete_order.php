<?php 
require_once("..\..\config.php");
if(isset($_GET['id'])){
$query = query("DELETE FROM buy WHERE id = " .escape_string($_GET['id'])."");
confirm($query);
set_message("đã xóa");
redirect("..\..\..\public_user\user\index_user.php?order");
}else{
redirect("..\..\..\public_user\user\index_user.php?order");

}
?>