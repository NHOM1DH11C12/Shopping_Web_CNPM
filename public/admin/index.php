<?php require_once('..\..\kresources\config.php'); ?>
<?php include(TEMPLATE_BACK . '\header.php'); ?>
<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = $username;
    redirect('..\..\public');
}
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <?php
        if($_SERVER['REQUEST_URI'] == "/Shopping_Web_CNPM/public/admin/" || $_SERVER['REQUEST_URI'] == "/Shopping_Web_CNPM/public/admin/index.php") {
            include(TEMPLATE_BACK . '/admin_ct.php');
        }
        if ( isset($_GET['id'])) {include(TEMPLATE_BACK . '/edit_status.php'); }
        // Hiển thị trang orders
        if(isset($_GET['revenue'])){
            include(TEMPLATE_BACK . '/revenue.php'); 
        }

        if(isset($_GET['admin_order'])){
            include(TEMPLATE_BACK . '/admin_order.php'); 
        }
        // Hiển thị trang products
        if(isset($_GET['products'])){
            include(TEMPLATE_BACK . '/products.php'); 
        }
        //sp tìm kiếm được
        if(isset($_POST['submit'])){
            include(TEMPLATE_BACK . '/display_product.php'); 
        }
        //sp theo bộ lọc
        if(isset($_POST['up'])){
            include(TEMPLATE_BACK . '/cat_product.php'); 
        }
        // Hiển thị trang categories
        if(isset($_GET['categories'])){
            include(TEMPLATE_BACK . '/categories.php'); 
        }
        
        // Hiển thị trang thêm sản phẩm
        if(isset($_GET['add_product'])){
            include(TEMPLATE_BACK . '/add_product.php'); 
        }

        // Hiển thị trang users
        if(isset($_GET['users'])){
            include(TEMPLATE_BACK . '/users.php'); 
        }
        
        // Hiển thị trang chỉnh sửa sản phẩm
        if(isset($_GET['edit_product'])){
            include(TEMPLATE_BACK . '/edit_product.php'); 
        }
        
        // Hiển thị trang thêm người dùng
        if(isset($_GET['add_user'])){
            include(TEMPLATE_BACK . '/add_user.php'); 
        }
        
        // Hiển thị trang chỉnh sửa người dùng
        if(isset($_GET['edit_users'])){
            include(TEMPLATE_BACK . '/edit_users.php'); 
        }
        
        // Hiển thị trang slide mới
		if(isset($_GET['slides'])){
			include(TEMPLATE_BACK . '/slides.php');
		}
		
		// Hiển thị trang xóa slide
		if(isset($_GET['delete_slide_id'])){
			include(TEMPLATE_BACK . '/delete_slide.php');
		}
        ?>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include(TEMPLATE_BACK . '/footer.php'); ?>
