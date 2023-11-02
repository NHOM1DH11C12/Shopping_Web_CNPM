<style>
        .dropdown-menu li a {
                background-color: black;
                /* Màu chữ ban đầu */
        }

        .dropdown-menu li a:hover {
                background-color: green;
        }
</style>

<div class="navbar-header navbar-form">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
        <div class="navbar-left">
                <a href="..\public\index.php"><i class="fa fa-home"></i>TRANG CHỦ &NegativeThinSpace;</a>
        </div>
</div>

<div class="navbar-form navbar-center">
        <div class="collapse navbar-collapse navbar-ex1-collapse navbar-center">
                <ul class="nav navbar-left">
                        <a href="..\public\shop_admin.php">&ensp;<i class="fa fa-fa fa-shopping-cart"></i> GIAN HÀNG</a>
                        <a href="..\public_user\login.php">&ensp;<i class="fa fa-user"></i>ĐĂNG NHẬP</a>
                        <a href="..\public\admin">&ensp;<i class="fa fa-cogs"></i> QUẢN TRỊ TRANG WEB</a>
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                                <i class="fa fa-chevron-circle-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-left">
                                <li class="">
                                        <a href="..\public\admin\index.php?revenue">
                                                <i class="now-ui-icons education_atom"></i>
                                                <p>Thống kê doanh thu</p>
                                        </a>
                                </li>
                                <li>
                                        <a href="..\public\admin\index.php?admin_order">
                                                <i class="now-ui-icons files_paper"></i>
                                                <p>Đơn hàng</p>
                                        </a>
                                </li>
                                <li>
                                        <a href="..\public\admin\index.php?products">
                                                <i class="now-ui-icons education_paper"></i>
                                                <p>danh sách sản phẩm</p>
                                        </a>
                                </li>
                                <li>
                                        <a href="..\public\admin\index.php?add_product">
                                                <i class="now-ui-icons ui-1_simple-add "></i>
                                                <p>quản lí sản phẩm</p>
                                        </a>
                                </li>
                                <li>
                                        <a href="..\public\admin\index.php?categories">
                                                <i class="now-ui-icons design_bullet-list-67"></i>
                                                <p>Danh mục sản phẩm</p>
                                        </a>
                                </li>
                                <li>
                                        <a href="..\public\admin\index.php?users">
                                                <i class="now-ui-icons users_single-02"></i>
                                                <p>tài khoản</p>
                                        </a>
                                </li>
                                <li>
                                        <a href="..\public\admin\index.php?slides">
                                                <i class="now-ui-icons text_caps-small"></i>
                                                <p>Nội dung trên shop</p>
                                        </a>
                                </li>
                        </ul>
                </ul>
                <div class="nav navbar-right">
                        <form action="display_ad_product.php" method="post" enctype="multipart/form-data">
                                <div class="input-group">
                                        <div class="form-group navbar-left">
                                                <input type="search" class="form-control" name="search"
                                                        placeholder="Tìm kiếm sản phẩm "
                                                        style="background-color:white;width:500px;">
                                        </div>
                                        <div class="form-group navbar-right">
                                                <button type="submit" name="submit"
                                                        class="now-ui-icons ui-1_zoom-bold btn-primary"
                                                        style="height:37px;"></button>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>