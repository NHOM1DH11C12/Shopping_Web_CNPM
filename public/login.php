<?php require_once('..\kresources\config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header_admin.php'); ?>

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
      <form class="" action="" method="post" enctype="multipart/form-data">
        <?php login_user(); ?>
        <div class="form-group">
          <label for="username">Tên tài khoản:</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Mật khẩu:</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group text-center">
          <input type="submit" name="submit" class="btn btn-primary" value="Đăng nhập">
        </div>
        <div class="text-left">Bạn chưa có tài khoản? <a href="register.php">Đăng kí</a></div>
      </form>
    </div>
  </div>
</div>