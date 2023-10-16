<div>
<form class="navbar-form navbar-right" action="index.php?display_product.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <input type="search" class="form-control" name="search" placeholder="Tìm kiếm sản phẩm ">
            <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-orang"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
<table class="table table-hover" >

</div>
<?php if(isset($_POST['submit'])) {
    $keyword = $_POST['search'];
    search_product($keyword);
}
?>
</table>