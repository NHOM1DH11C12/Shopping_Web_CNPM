<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header.php'); ?>
<?php
function user()
{
    $email = $_SESSION['email'];
    $query = query("SELECT * FROM users WHERE email = '{$email}' ");
    confirm($query);

    $row = fetch_array($query);

    $username = $row['username'];
    // Retrieve the image path from the database
    $user_photo = $row['user_photo'];
    $user = <<<DELIMETER
                <div class="text-center">
                <div ><img src='../kresources/uploads/{$user_photo}' class="img-circle" style="width: 100px; height: 100px; border: 3px solid white;"></div>

                    <div><strong>Tài khoản: </strong>{$username}</div>
                    
                </div>
            DELIMETER;

    echo $user;
}
?>
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
            <?php user(); ?>
            <form class="" action="" method="post" enctype="multipart/form-data">
                <?php create_pw(); ?>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="re_pw">Nhập lại mật khẩu:</label>
                    <input type="password" name="re_pw" class="form-control">
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="up_pw" class="btn btn-primary " value="Cập nhật"><br />
                </div>
            </form>
        </div>
    </div>
</div>
<?php include(TEMPLATE_FRONT_USER . DS . 'footer.php'); ?>