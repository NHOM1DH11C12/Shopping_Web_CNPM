<?php require_once('..\..\kresources\config.php'); ?>
<?php include(TEMPLATE_BACK_USER . '\header_user.php'); ?>
<?php if (!isset($_SESSION['username'])) {
    redirect('..\..\public_user\index_user.php');
}

?>

<div id="page-wrapper">

    <div class="container-fluid">


        <?php
        if ($_SERVER['REQUEST_URI'] == "/Codes/public_user/user/" || $_SERVER['REQUEST_URI'] == "/Codes/public_user/user/index_user.php") {
            include(TEMPLATE_BACK_USER  . '\content.php');
        }
        //orders******************************************************************************
        
        if (isset($_GET['order'])) {
            include(TEMPLATE_BACK_USER  . '\order.php');
        }

        //adding products**********************************************************************
        //users*******************************************************************************
        if (isset($_GET['user'])) {
            include(TEMPLATE_BACK_USER  . '\user.php');
        }
        if (isset($_GET['address'])) {
            include(TEMPLATE_BACK_USER  . '\address.php');
        }

        if (isset($_GET['edit_user'])) {
            include(TEMPLATE_BACK_USER  . '\edit_user.php');
        }
        if (isset($_GET['add_address'])) {
            include(TEMPLATE_BACK_USER  . '\add_address.php');
        }




        ?>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include(TEMPLATE_BACK . '\footer.php'); ?>