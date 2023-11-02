<div>
    <form class="navbar-form navbar-right" action="index.php?display_product.php" method="post"
        enctype="multipart/form-data">
        <input type="search" class="form-group" name="search" placeholder="Tìm kiếm sản phẩm">
        <button type="submit" name="submit" class="btn btn-primary ">
            <i class="now-ui-icons ui-1_zoom-bold"></i>
        </button>
    </form>
    <table class="table table-hover">

</div>
<?php if (isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    search_product($keyword);
}
?>
</table>