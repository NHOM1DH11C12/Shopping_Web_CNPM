<?php add_user(); ?>
<div>
  <h1 class="page-header">
    Thêm tài khoản
  </h1>



  <div class="col-sm-12">
    <form action="" method="post" enctype="multipart/form-data">

  </div>
  <div class="col-sm-5 navbar navbar-cat">
    <div class="form-group"><label class="fa fa-fw fa-user"></label>
      <label for="first name">Tên:</label>
      <input type="text" name="first_name" class="form-control"></label>
    </div>
    <div class="form-group">
      <label class="fa fa-fw fa-user"></label>
      <label for="last name">Họ:</label>
      <input type="text" name="last_name" class="form-control"></label>
    </div>
    <div class="form-group">
      <label class="fa fa-fw fa-envelope"></label>
      <label for="email">Email</label>
      <input type="text" name="email" class="form-control">

    </div>

    <div class="form-group">
      <label class="fa fa-fw fa-github-alt"></label>
      <label for="username">Tên tài khoản</label>
      <input type="text" name="username" class="form-control">

    </div>

    <div class="form-group">
      <label class="fa fa-fw fa-key"></label>
      <label for="password">Mật khẩu</label>
      <input type="password" name="password" class="form-control">

    </div>
  </div>

  <div class="col-sm-4 navbar navbar-search">

    <div class="col-md-12 user_image_box">

      <span id="user_admin" class='fa fa-user fa-5x'></span>

    </div>
    <br />
    <div class="col-md-12">
<br />
    </div>
    <div class="form-group">
      <label class="fa fa-fw fa-group"></label>
      <label for="user_level">Level: </label><br />
      <select name='user_level'>
        <option value='1'>Người dùng</option>
        <option value='2'>Admin </option>
      </select><br />
    </div>
    <div class="form-group">
      <label class="fa fa-fw fa-photo"><input type="file" name="file"></label>


    </div>
    <div class="form-group">
      <label for="sex">Giới tính :</label><br />
      <input type="radio" name="sex" id="nam" value="nam">Nam<label class="fa fa-fw fa-male"></label>
      <br /><input type="radio" name="sex" id="nu" value="nu">Nữ<label class="fa fa-fw fa-female"></label>
      <br /><input type="radio" name="sex" id="khac" value="khac">Khác<label
        class="fa fa-fw fa-fa fa-slideshare"></label>
      <br />
    </div>

    <div class="form-group">

      <a id="user-id" class="btn btn-danger" href="">Xóa</a>

      <input type="submit" name="add_user" class="btn btn-primary pull-right" value="Lưu">

    </div>
  </div>


  </form>
</div>