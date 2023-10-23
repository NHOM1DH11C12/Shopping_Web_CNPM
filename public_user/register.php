<?php
require_once('..\kresources\config.php');
include(TEMPLATE_FRONT . DS . 'header.php');


?>

<div class="container">
<br />
    <header>
    <br />
    <br />
        <h1 class="text-center">Đăng Ký</h1>
        <h2 class="text-center bg-warning">
        <?php display_message(); ?>
        </h2>
    </header>
    <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-login">
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php register_user(); ?>
                    <div class="form-group"><label for="first_name">
                            <label class="fa fa-user"></label>Tên:</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                    <div class="form-group"><label for="last_name">
                            <label class="fa fa-user"></label>Họ:</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="fa fa-transgender-alt"></label>
                        <label for="sex">Giới tính :</label><br />
                        <input type="radio" name="sex" id="nam" value="nam"><label class="fa fa-mars"> Nam </label>
                        &ensp;<input type="radio" name="sex" id="nu" value="nu"><label class="fa fa-venus"> Nữ </label>
                        &ensp;<input type="radio" name="sex" id="khac" value="khac"><label
                            class="fa fa-transgender-alt">
                            Khác&ensp;</label>
                        <br>
                    </div>
                    <div class="form-group">
                        <label class="fa fa-user-alt"></label>
                        <label for="username">Tên tài khoản:</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="fa fa-fw fa-envelope"></label>
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="fa fa-fw fa-key"></label>
                        <label for="password">Mật khẩu:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group fa fa-file-image">
                        <label for="file">Hình ảnh:</label>
                        <input type="file" name="file">
                    </div>
                    <div class="form-group text-left">
                        <input type="submit" name="register" class="btn btn-primary" value="Đăng kí">
                    </div>
                    <div class="text-left">
                        Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include(TEMPLATE_FRONT_USER.DS.'footer.php'); ?>