<div>
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
                    <?php display_users(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>