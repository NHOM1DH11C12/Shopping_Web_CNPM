<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header.php'); ?>

<!-- Page Content -->
<div class="container">
    </br />
    <br />
    <header>
        <br />
        <h1 class="text-center">Nhập mã OTP nhận từ email</h1>
        <h2 class="text-center bg-warning">
            <?php display_message(); ?>
            <div id="countdown"></div>
        </h2>
    </header>
    <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-login">
            <form class="" action="" method="post">
                <?php otp_check() ?>
                <div class="form-group">
                    <input type="text" name="otp" class="form-control">
                </div>
                <div class="row">
                    <div class="col-xs-6 text-left">
                        <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Xác minh"style="display: block">
                    </div>
                    <div class="col-xs-6 text-right">
                        <input type="submit" id="new_submit" name="re_otp" class="btn btn-primary" value="Gửi lại mã"
                            style="display: none">
                    </div>
                </div>
            </form>
            <script type="text/javascript">
                var timeleft = 60;
                var downloadTimer = setInterval(function () {
                    if (timeleft <= 0) {
                        clearInterval(downloadTimer);
                        document.getElementById("countdown").innerHTML = "Hết giờ!";
                        document.getElementById("submit").style.display = "none";
                        document.getElementById("new_submit").style.display = "block";
                    } else {
                        document.getElementById("countdown").innerHTML = timeleft + " giây còn lại";
                    }
                    timeleft -= 1;
                }, 1000);
            </script>
        </div>
    </div>
</div>
<?php include(TEMPLATE_FRONT_USER . DS . 'footer.php'); ?>