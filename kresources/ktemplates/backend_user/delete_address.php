<?php require_once("..\..\config.php");


if (isset($_GET['id'])) {


    $query = query("DELETE FROM address WHERE id = " . escape_string($_GET['id']) . " ");
    confirm($query);


    set_message("Profile Deleted");
    redirect("..\..\..\public_user\user\index_user.php?address");


} else {
    set_message("Profile Not Deleted");
    redirect("..\..\..\public_user\user\index_user.php?address");

}

?>