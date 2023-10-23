<div>
    <form class="navbar-form navbar-right" action="index.php?display_product.php" method="post"
        enctype="multipart/form-data">

        <input type="search" class="form-control" name="search" placeholder="Tìm kiếm sản phẩm ">
        <button class="btn-orang" type="submit" name="submit"><i class="fa fa-search"></i></button>
    </form>
    <table class="table table-hover">

</div>
<?php if (isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    search_product($keyword);
}
?>
</table>
