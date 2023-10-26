<?php require_once('..\kresources\config.php');?>
<?php include(TEMPLATE_FRONT . DS . 'header.php'); ?>

<!-- Page Content -->
<div class="container">
    </br />
    <br />
    <header>
        <br />
        <h1 class="text-center">Đăng Nhập</h1>
        <h2 class="text-center bg-warning">
            <?php display_message(); ?>
        </h2>
    </header>
    <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-login">
            <form class="" action="" method="post">
                <?php send_otp();?>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="forgot" class="btn btn-primary" value="Tiếp theo">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(TEMPLATE_FRONT_USER . DS . 'footer.php'); ?>