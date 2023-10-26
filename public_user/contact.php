<!-- Configuration-->

<?php require_once("..\kresources\config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; ?>
<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    include(TEMPLATE_FRONT_USER . DS . 'header_user.php');
} else {
    include(TEMPLATE_FRONT . DS . 'header.php');
} ?>
<div class="container">
    </br />
    <br />
    <div class="row">
        <div class="col-lg-12 text-center">
            <br />
            <h2 class="section-heading">LIÊN HỆ VỚI CHÚNG TÔI</h2>
            <h3 class="section-subheading ">
                <?php display_message(); ?>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" method="post">
                <?php request_to_admin(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Tên *" id="name" required
                                data-validation-required-message="Nhập tên của bạn !.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email *" id="email"
                                required data-validation-required-message="Nhập địa chỉ email !.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Mô tả yêu cầu *"
                                id="subject" required data-validation-required-message="Nhập mô tả yêu cầu !.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Lời nhắn của bạn *" id="message"
                                required data-validation-required-message="Hãy nhập vào lời nhắn của bạn."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" name="submit" class="btn btn-primary">Gửi tin nhắn</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


<?php include(TEMPLATE_FRONT_USER . DS . 'footer.php'); ?>