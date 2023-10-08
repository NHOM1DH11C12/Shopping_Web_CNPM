<?php
require_once('..\kresources\config.php');
include(TEMPLATE_FRONT.DS.'header.php');


?>

<style>
  .container{
  
    /* justify-content: center;
    display:inline-block;
    border: 1px solid black;
    padding-top: 20px;
    padding-bottom: 30px;
    padding-left: 10px;
    border-radius: 12px; */
      border: 1px solid black;
      padding-top: 20px;
      padding-bottom: 30px;
      padding-left: 10px;
      border-radius: 12px;
      padding-bottom: 45px;
  
  }


</style>

<div class="container">
  <header>
    <h1 class="text-center">Đăng Ký</h1>
    <h2 class="text-center bg-warning"><?php display_message();?></h2>
    <div class="col-sm-4 col-sm-offset-5">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <?php register_user();?>
        <div class="form-group"><label for="first name">Tên:<input type="text" name="first_name" class="form-control"  ></label></div>
        <div class="form-group"><label for="last name">Họ:<input type="text" name="last_name" class="form-control" ></label></div>
        <div class="form-group"><label for=""> Tên tài khoản: <input type="text" name="username" class="form-control"></label></div>
        <div class="form-group"><label for=""> Email: <input type="email" name="email" class="form-control"></label></div>
        <div class="form-group"><label for="password">Mật khẩu: <input type="password" name="password" class="form-control"></label> </div>
        <div class="form-group">
          <label for="">Ảnh Đại Diện</label>
          <br>
          <input type="file" name="file">
        </div>
        <br>
        <div class="form-group text-left">
        <input type="submit" name="register_user" class="btn btn-primary pull-left" value="Đăng kí" ></br>
        </div>
        <br>
        <div class="text-left">Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></div>
      </form>
    </div>  
  </header>
</div>
