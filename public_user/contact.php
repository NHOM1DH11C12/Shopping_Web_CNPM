<?php require_once("..\kresources\config.php"); ?>
<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  include(TEMPLATE_FRONT_USER . DS . 'header_user.php');
} else {
  include(TEMPLATE_FRONT . DS . 'header.php');
} ?>

<link href="css/login.css" rel="stylesheet">
<div class="container">
  <h2 class="text-center bg-warning">
    <?php display_message(); ?>
  </h2>
  <div class="navbar-left">
    <div class="login100-pic js-tilt" data-tilt>
      <img src="./img/undraw-contact.svg" alt="một thứ gì đó giống với thể loại NTR">
    </div>
  </div>
  <div class="col-md-8">
    <h2 class="text-center"><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h2><br />
    <div class="card mb-6">
      <div class="card-body">
        <br />
        <form method="post" enctype="multipart/form-data">
          <?php request_to_admin(); ?>
          <strong>
            <br>
            <span>Thời gian phản hồi trung bình 1-3 ngày</span>
            <br />
            <br />
          </strong>
          <div class="col-md-6 navbar-center">
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="email" id="email" placeholder="Nhập Email">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="name" id="name" placeholder="Tên của bạn">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="">
              <input class="input100" type="text" name="subject" placeholder="Mô tả yêu cầu *" id="subject" required
                data-validation-required-message="Nhập mô tả yêu cầu !">
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-request" aria-hidden="true"></i>
              </span>
            </div>
          </div>

          <div class="col-md-6 navbar-right">
            <div class="wrap-input100 validate-input" data-validate="">
              <textarea class="typography-line" name="message" placeholder="Lời nhắn của bạn *" id="message" cols="40"
                rows="8" required data-validation-required-message="Hãy nhập vào lời nhắn của bạn."
                style="border: 1px solid black;"></textarea>

              <span class="focus-input100"></span>
            </div>
            <br>
          </div>
          <div class="container-login100-form-btn">
            <input type="submit" class="login100-form-btn" value="Gửi yêu cầu">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>


  <div class="content">
    <?php include(TEMPLATE_FRONT_USER . DS . 'footer.php'); ?>
  </div>