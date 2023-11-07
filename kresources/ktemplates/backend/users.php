<!--<div>
    <div class="col-lg-12">
        <h1 class="">Tài Khoản</h1>
        <p class="bg-success"></p>
        <td><a href="index.php?add_user" class="btn btn-primary">Thêm tài khoản</a></td>
        <div class="col-md-12">
            <br />
            <table class="table table-hover col-12" border="1px">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cấp bậc</th>
                        <th>Tên tài khoản</th>
                        <th>Tên</th>
                        <th>Họ</th>
                        <th>Email</th>
                        <th>Giới tính</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>-->
<style>
    .btn-circle.btn-lg,
    .btn-group-lg>.btn-circle.btn {
        width: 50px;
        height: 50px;
        padding: 14px 15px;
        font-size: 18px;
        line-height: 23px;
    }

    .btn-circle {
        border-radius: 100%;
        width: 40px;
        height: 40px;
        padding: 10px;
    }

    .img-user {
        width: 60px;
        height: 60px;
        border: 1px solid black;
        border-radius: 50%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdropUser"
                style="margin-left:1.5%;"> <i class="fa fa-plus"></i> Thêm tài khoản
            </button>
            <?php include(TEMPLATE_BACK . '\add_user.php'); ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-uppercase mb-0">Danh sách người dùng</h5>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 text-uppercase font-medium pl-4">ID</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Tên tài khoản</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Mật khẩu</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Cấp bậc</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Họ và tên</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Ngày sinh</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">giới tính</th>
                                <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php display_users(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>