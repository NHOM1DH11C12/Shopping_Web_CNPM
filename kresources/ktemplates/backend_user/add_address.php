<?php add_address() ?>
<h1 class="">
    Thêm thông tin nhận hàng
</h1>

<div class="col-md-6 user_image_box">

    <span id="user_admin" class='fa fa-map-marker-edit fa-4x'></span>

</div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label class="fa fa-h-square" ></label>
            <label for="fullname">Họ và tên:</label><br />
            <input type="text" id="fullname" name="fullname" class="form-control"><br><br>
        </div>
        <div class="form-group">
        <label class="fa fa-phone" ></label>
            <label for="phone">Số điện thoại:</label><br />
            <input type="text" id="phone" name="phone" class="form-control"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-map-marked-alt" ></label>
            <label for="province">Tỉnh/Thành phố:</label><br />
            <input type="text" id="province" name="province" class="form-control"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-fw far fa-map-marker-alt" ></label>
            <label for="district">Quận/Huyện</label><br />
            <input type="text" id="district" name="district" class="form-control"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-fw far fa-map-marker" ></label>
            <label for="ward">Phường/Xã:</label><br />
            <input type="text" id="ward" name="ward" class="form-control"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-map-marked" ></label>
            <label for="address">Địa chỉ cụ thể:</label><br />
            <input type="text" id="address" name="address" class="form-control"><br><br>
        </div>
        <div class="form-group">
            <input type="submit" name="add_address" class="btn btn-danger " value="Lưu">
        </div>
    </div>
</form>