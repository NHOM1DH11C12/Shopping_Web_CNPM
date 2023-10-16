<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header_admin.php');?>


<!-- Page Content -->
<div class="container">

<!-- Title -->
<div class="row">
<?php if(isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    search_ad($keyword);
}
?>
</div>


<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>