<?php
$query = query("SELECT status, COUNT(*) as value FROM buy GROUP BY status");
confirm($query);

$data = '';
while ($row = fetch_array($query)) {
    $data .= "{ status: '" . $row['status'] . "',<br> value: " . $row['value'] . "},<br>";
}
$data = substr($data, 0, -2);
?>
<hr style="width:100%; border:3px solid black;">
<div class="row col-12">
    <h2 class=" text-center">Sản phẩm của nhóm 1</h2>
</div>
<!----------- Footer ------------>

<footer class="footer-bs col-12">
    <div class="row">
        <div class="col-md-3 footer-brand">
            <p>Kì Học 1/2023 Công Nghệ Phần Mềm DH11C12</p>
        </div>
        <div class="col-md-4 footer-nav ">
            <h4>Thành Viên Tham Gia Dự Án —</h4>
            <div class="col-md-6">
                <ul class="pages">
                    <li><a href="#">Nguyễn Trần Trung (Leader-Trưởng Nhóm)</a></li>
                    <li><a href="#">Nguyễn Đình Trung (Dev- backend)</a></li>
                    <li><a href="#">Lê Việt Thuyên (Dev- front-end)</a></li>
                    <li><a href="#">Đỗ Minh Vũ (Dev- front-end)</a></li>
                    <li><a href="#">Lê Văn Minh (Phân tích,thực hiện tài liệu báo cáo)</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <!-- <ul class="list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul> -->
            </div>
        </div>
        <div class="col-md-2 footer-social ">
            <h4>Theo dõi chúng tôi tại</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Zalo</a></li>
            </ul>
        </div>
    </div>
</footer>
<section class="col-12" style="text-align:center; margin:10px auto;">
    <p>
        <?php echo $data; ?>Dự án thiết kế bởi Nhóm 1 DH11C12 - Công Nghệ Phần Mềm
    </p>
</section>

</div>


</div>
</footer>


<!-- /#wrapper -->

<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<?php
$query = query("SELECT status, COUNT(*) as value FROM buy GROUP BY status");
confirm($query);
$query_total = query("SELECT id, COUNT(*) as total FROM buy");
confirm($query_total);
$row_total = fetch_array($query_total);
$total=$row_total["total"];
$data = array();
while ($row = fetch_array($query)) {
    $percent= round(($row['value']/$total)*100,2);
    $data[] = array('status' => $row['status'], 'value' =>$percent .'%');
}

$query1 = query("SELECT order_name, COUNT(order_name) as count, SUM(order_amount) as total_amount FROM orders GROUP BY order_name");
confirm($query1);

$data_bar = array();
while ($row = fetch_array($query1)) {
    $data_bar[] = array('order_name' => $row['order_name'], 'count' => $row['count'], 'total_amount' => $row['total_amount']);
}

?>
<script type="text/javascript">
    $(function () {
        var data = <?php echo json_encode($data); ?>;

        Morris.Donut({
            element: 'chart',
            data: data,
            formatter: function (value, data) {
                if (data !== null) {
                    return data.status + ': ' + value;
                } else {
                    return value;
                }
            }
        });
    });
    new Morris.Bar({
        element: 'tchart',
        data: <?php echo json_encode($data_bar); ?> ,
        xkey: 'order_name',
        ykeys: ['count', 'total_amount'],
        labels: ['số lượng', 'Doanh thu']
    });
</script>
</body>

</html>

</body>

</html>