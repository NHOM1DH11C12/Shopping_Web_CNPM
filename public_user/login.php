<?php require_once('..\kresources\config.php'); ?>
<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
   include(TEMPLATE_FRONT.DS.'header_admin.php');
}
else{
   include(TEMPLATE_FRONT.DS.'header.php');
} ?>
<style>
  .panel-login{
    justify-content: center;
    display:inline-block;
    border: 1px solid black;
    padding-top: 20px;
    padding-bottom: 30px;
    padding-left: 100px;
    border-radius: 12px;

  }
</style>
<!-- Page Content -->
<div class="container">

  <header>
    <h1 class="text-center">Đăng Nhập</h1>
    <h2 class="text-center bg-warning">
      <?php display_message(); ?>
    </h2>
    <div class="panel-login col-sm-4 col-sm-offset-4">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <?php login_user(); ?>
        <div class="form-group"><label for=""> Tên tài khoản: <input type="text" name="username"
              class="form-control"></label></div>
        <div class="form-group"><label for="password">Mật khẩu: <input type="password" name="password"
              class="form-control"></label> </div>
        <div class="form-group" text-align:center> <input type="submit" name="submit" class="btn btn-primary" value="Đăng nhập"></div>
        <br>
        <div class="text-left">Bạn chưa có tài khoản? <a href="register.php">Đăng kí</a></div>
      </form>
    </div>

  </header>
</div>