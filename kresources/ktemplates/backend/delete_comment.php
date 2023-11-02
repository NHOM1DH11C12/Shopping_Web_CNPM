<?php require_once("..\..\config.php");


if(isset($_GET['report_id'])) {
$query = query("DELETE FROM reports WHERE report_id = " . escape_string($_GET['report_id']) . " ");
confirm($query);
set_message("Đã xóa comment");
redirect("..\..\..\public\admin\index.php?display_comment");
} else {
redirect("..\..\..\public\admin\index.php?display_comment");
}
?>