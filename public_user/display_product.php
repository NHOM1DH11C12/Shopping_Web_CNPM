<?php require_once('..\kresources\config.php'); ?>
<?php
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    include(TEMPLATE_FRONT_USER . DS . 'header_user.php');
} else {
    include(TEMPLATE_FRONT . DS . 'header.php');
}
?>


<!-- Page Content -->
<div class="container">

<!-- Title -->
<div class="row">
<?php if(isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    search($keyword);
}
?>
</div>


<?php include(TEMPLATE_FRONT_USER.DS.'footer.php'); ?>