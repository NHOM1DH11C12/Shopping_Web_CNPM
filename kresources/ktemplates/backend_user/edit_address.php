<?php function extra_name()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM address WHERE id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $fullname = escape_string($row['fullname']);
            return $fullname;
        }
    }
}

function extra_phone()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM address WHERE id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $phone = escape_string($row['phone']);
            return $phone;
        }
    }
}

function extra_province()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM address WHERE id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $province = escape_string($row['province']);
            return $province;
        }
    }
}

function extra_district()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM address WHERE id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $district = escape_string($row['district']);
            return $district;
        }
    }
}

function extra_ward()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM address WHERE id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $ward = escape_string($row['ward']);
            return $ward;
        }
    }
}

function extra_address()
{
    if (isset($_GET['id'])) {
        $query = query("SELECT * FROM address WHERE id = " . escape_string($_GET['id']) . "");
        confirm($query);
        while ($row = fetch_array($query)) {
            $address = escape_string($row['address']);
            return $address;
        }
    }
}
?>

<h1 class="page-header">
    Thêm thông tin nhận hàng
</h1>
<?php update_address() ?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
    <a id="user-id" class="btn btn-danger" href="index_user.php?address">Quay lại<br /></a>
        <div class="form-group">
            <label class="fa fa-fw fa-map-marker"></label>
            <label for="province">Tỉnh/Thành phố:</label><br />
            <input type="text" id="province" name="province" class="form-control"
                value="<?php echo extra_province(); ?>"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-location-arrow"></label>
            <label for="district">Quận/Huyện</label><br />
            <input type="text" id="district" name="district" class="form-control"
                value="<?php echo extra_district(); ?>"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-location-arrow"></label>
            <label for="ward">Phường/Xã:</label><br />
            <input type="text" id="ward" name="ward" class="form-control" value="<?php echo extra_ward(); ?>"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-info"></label>
            <label for="address">Địa chỉ cụ thể:</label><br />
            <input type="text" id="address" name="address" class="form-control"
                value="<?php echo extra_address(); ?>"><br><br>
        </div>
    </div>
    <div class="col-md-6  ">
        <div class="nav navbar-right">
            <input type="submit" name="update_address" class="btn btn-success " value="Lưu">
        </div>
        <div class="user_image_box">

            <span id="user_admin" class='fa fa-user fa-2x'></span>

        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-github-alt"></label>
            <label for="fullname">Họ và tên:</label><br />
            <input type="text" id="fullname" name="fullname" class="form-control"
                value="<?php echo extra_name(); ?>"><br><br>
        </div>
        <div class="form-group">
            <label class="fa fa-fw fa-mobile-phone"></label>
            <label for="phone">Số điện thoại:</label><br />
            <input type="text" id="phone" name="phone" class="form-control"
                value="<?php echo extra_phone(); ?>"><br><br>
        </div>
    </div>

</form>