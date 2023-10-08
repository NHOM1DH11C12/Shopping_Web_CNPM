
<?php
require_once("..\..\config.php");

if(isset($_GET['id'])){
    $selected_id = escape_string($_GET['id']);
    $first_id_query = query("SELECT id FROM address ORDER BY id ASC LIMIT 1"); 
    confirm($first_id_query);
    $row = fetch_array($first_id_query);
    $first_id = $row['id'];
    $swap_query1 = query("UPDATE address SET id = -1 WHERE id = '{$selected_id}'");
    $swap_query2 = query("UPDATE address SET id = '{$selected_id}' WHERE id = '{$first_id}'");
    $swap_query3 = query("UPDATE address SET id = '{$first_id}' WHERE id = -1");
    confirm($swap_query1);
    confirm($swap_query2);
    confirm($swap_query3);

    set_message("Id đã được đổi");
    redirect("..\..\..\public_user\user\index_user.php?address"); 
} else {
    redirect("..\..\..\public_user\user\index_user.php?address");
}
?>