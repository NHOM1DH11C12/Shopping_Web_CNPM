<div class="navbar-form navbar-center" id="navbarNav">
    <ul class="nav navbar-nav">
        <li>
            <a href="index_user.php"><i class="fa fa-home"></i> TRANG CHỦ</a>
        </li>
        <li>
            <a href="shop.php"><i class="fa fa-briefcase"></i> GIAN HÀNG</a>
        </li>
        <li>
            <a href="login.php"><i class="fa fa-user"></i> ĐĂNG NHẬP</a>
        </li>
        <li>
            <a href="checkout.php"><i class="fa fa-shopping-cart"></i> GIỎ HÀNG</a>
        </li>

        <li>
            <a href="contact.php"><i class="fa fa-fa fa-mail-forward"></i>LIÊN HỆ</a>
        </li>
    </ul>
    <form class="navbar-form navbar-center" action="display_product.php" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <input type="search" class="form-control" name="search" placeholder="Tìm kiếm sản phẩm ">
            <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-orang"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
</div>