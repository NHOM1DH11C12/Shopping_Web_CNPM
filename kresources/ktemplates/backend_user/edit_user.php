
<?php
edit_user();
?>
<h1 >
    Sửa tài khoản
</h1>

<div class="col-md-6 user_image_box">
    
<span id="user_admin" class='fa fa-user fa-4x'></span>

</div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            
           <label class="fa fa-fw fa-photo" ></label>
            <input type="file" name="file">
        </div>
        <div class="form-group">
           <label class="fa fa-fw fa-github-alt" ></label>
            <label for="username">Tên tài khoản</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
        <label class="fa fa-fw fa-user" ></label>
            <label for="first name">Tên</label>
            <input type="text" name="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-user" ></label>
            <label for="last name">Họ</label>
            <input type="text" name="last_name" class="form-control">
        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-envelope" ></label>
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-key" ></label>
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <a id="user-id" class="btn btn-danger" href="">Xóa</a>
            <input type="submit" name="update_user" class="btn btn-primary pull-right" value="Cập nhật">
        </div>
    </div>
</form>