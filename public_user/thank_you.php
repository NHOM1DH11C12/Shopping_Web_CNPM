<?php require_once('..\kresources\config.php'); ?>

<?php require_once ('..\kresources\cart.php');?>
<?php include(TEMPLATE_FRONT_USER . DS . 'header_user.php');?>
<?php save_order();?>
<div class="container" style="max-width: 70%;margin: auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1 class="text-center">Cảm ơn bạn đã mua hàng</h1>

    <div class='col-md-5' style='border: 1px solid black; border-radius: 10px; width: 720px; height: 369px; margin: auto; display: flex; flex-direction: column; justify-content: center; align-items: center;'>
    <div style='width: 100%; text-align: center;'>
        <h2>Bạn muốn chuyển đi đâu?</h2>
        <div>
            <a href='index_user.php' class='btn btn-success' style='margin-right: 10px;'>Trang chủ</a>
            <a href='..\public_user\user\index_user.php?order' class='btn btn-success'>Trang Đơn Hàng</a>
        </div>
    </div>
</div>

</div>
<h2>Có thể bạn sẽ cần :</h2>
</div>
<div class="container ">


<?php get_products_in_shop_page() ?>
</div>
</div>

  <?php include(TEMPLATE_FRONT.DS.'footer.php'); ?>