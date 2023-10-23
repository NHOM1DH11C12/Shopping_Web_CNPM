<hr style="width:100%; border:3px solid black;">
<div class="row col-12 text-center">
    <h2>Sản phẩm của nhóm 1</h2>
</div>
<!----------- Footer ------------>

<footer class="footer-bs col-12">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <p>Sản phẩm của nhóm 1</p>
            <p>Kì Học 1/2023 Công Nghệ Phần Mềm DH11C12</p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
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
        <div class="col-md-2 footer-social animated fadeInDown">
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
    <p>Dự án thiết kế bởi Nhóm 1 DH11C12 - Công Nghệ Phần Mềm</p>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script type="text/javascript">
    $(function () {
        var data = [
            { status: 'Đang xử lý', value: 20 },
            { status: 'Đã xác nhận', value: 10 },
            { status: 'Đang giao hàng', value: 5 },
            { status: 'Đã hoàn thành', value: 5 }
        ];

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
        // ID of the element in which to draw the chart.
        element: 'tchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { year: '2008', value: 20 },
            { year: '2009', value: 10 },
            { year: '2010', value: 5 },
            { year: '2011', value: 5 },
            { year: '2012', value: 20 }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value']
    });
</script>
<script>
    $.getJSON('data.php', function (data) {
        new Morris.Line({
            element: 'tchart',
            data: data,
            xkey: 'order_name',
            ykeys: ['quantity'],
            labels: ['Quantity']
        });
    });
</script>
</body>

</html>

</body>

</html>