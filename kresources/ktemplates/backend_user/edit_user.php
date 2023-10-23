<?php
edit_user();
function extra_name()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $username = escape_string($row['username']);
            return $username;
        }
    }
}
function extra_first()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $first_name = escape_string($row['first_name']);
            return $first_name;
        }
    }
}
function extra_last()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $last_name = escape_string($row['last_name']);
            return $last_name;
        }
    }
}
function extra_email()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $email = escape_string($row['email']);
            return $email;
        }
    }
}
function extra_pwd()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $password = escape_string($row['password']);
            return $password;
        }
    }
}
function extra_photo()
{
    if (isset($_GET['user_id'])) {
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['user_id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $user_photo = escape_string($row['user_photo']);
            $user_photo = display_images($user_photo);
            return $user_photo;
        }
    }
}
?>
<div>
    <h1>
        Sửa tài khoản
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-3">
            <span id="user_admin" class='fa fa-user fa-4x'></span>
            <div class="form-group">
                <label for="sex">Giới tính :</label><br />
                <input type="radio" name="sex" id="nam" value="nam"><label class="fa fa-mars"> Nam </label>
                &ensp;<input type="radio" name="sex" id="nu" value="nu"><label class="fa fa-venus"> Nữ </label>
                &ensp;<input type="radio" name="sex" id="khac" value="khac"><label class="fa fa-transgender-alt">
                    Khác&ensp;</label>
                <br>
            </div>
            <div>

                <label class="fa fa-fw fa-photo"></label>
                <input type="file" name="file"><br>
                <img width='250' src="..\..\kresources\<?php echo extra_photo(); ?>" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="fa fa-id-card-alt"></label>
                <label for="username">Tên tài khoản</label>
                <input type="text" name="username" class="form-control" value="<?php echo extra_name(); ?>">
            </div>
            <div class="form-group">
                <label class="fa fa-fw fa-user"></label>
                <label for="first name">Tên</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo extra_first(); ?>">
            </div>
            <div class="form-group">
                <label class="fa fa-fw fa-user"></label>
                <label for="last name">Họ</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo extra_last(); ?>">
            </div>
            <div class="form-group">
                <label class="fa fa-fw fa-envelope"></label>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo extra_email(); ?>">
            </div>
            <div class="form-group">
                <label class="fa fa-fw fa-key"></label>
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" class="form-control" value="<?php echo extra_pwd(); ?>">
            </div>
            <div class="form-group d-flex justify-content-between">
                <a id="user-id" class="btn btn-danger" href="index_user.php?user">Quay lại</a>
                <input type="submit" name="update_user " class="btn btn-primary" value="Cập nhật">
            </div>

        </div>

    </form>
</div>