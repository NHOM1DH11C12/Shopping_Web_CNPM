<?php require_once('..\kresources\config.php'); ?>
<div class="container-fluid">
    </br />
    <br />
    <br />
    <?php include(TEMPLATE_FRONT_USER . DS . 'user_side_nav.php'); ?>
    <?php
    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . " ");
    confirm($query);
    while ($row = fetch_array($query)): ?>


        <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            include(TEMPLATE_FRONT_USER . DS . 'header_user.php');
        } else {
            include(TEMPLATE_FRONT . DS . 'header.php');
        } ?>

        <div class="container col-md-9">
            <section class="py-5">
                <div class="container">
                    <div class="row gx-5">
                        <aside class="col-lg-6">
                            <div class="border rounded-4 mb-3 d-flex justify-content-center">
                                <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="#">
                                    <img class="img-responsive"
                                        src="..\kresources\<?php echo display_images($row['product_image']); ?>" alt="">
                                </a>
                            </div>
                            <div class="d-flex justify-content-center mb-3">

                            </div>
                            <!-- thumbs-wrap.// -->
                            <!-- gallery-wrap .end// -->
                        </aside>
                        <main class="col-lg-6">
                            <div class="ps-lg-3">
                                <h4 class="title text-dark">
                                    <?php echo $row['product_title'] ?>
                                </h4>
                                <div class="d-flex flex-row my-3">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ms-1">
                                            4.5
                                        </span>
                                    </div>
                                    <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>Đã bán
                                        999+</span>
                                    <?php if ($row['product_quantity'] > 0) { ?>
                                        <span class="text-success ms-2">Sẵn hàng</span>
                                    <?php } else { ?>

                                        <span class="text-danger ms-2">Đã hết hàng</span>
                                    <?php }
                                    ?>
                                </div>

                                <div class="mb-3">
                                    <span class="h5">
                                        <?php echo number_format($row['product_price']) ?> VND
                                    </span>
                                    <!--<span class="text-muted">/per box</span>-->
                                </div>

                                <p>
                                    <?php echo $row['short_desc'] ?>
                                </p>

                                <div class="row">
                                    <dt class="col-3">Type:</dt>
                                    <dd class="col-9">Regular</dd>

                                    <dt class="col-3">Color</dt>
                                    <dd class="col-9">Brown</dd>

                                    <dt class="col-3">Material</dt>
                                    <dd class="col-9">Cotton, Jeans</dd>

                                    <dt class="col-3">Brand</dt>
                                    <dd class="col-9">Reebook</dd>
                                </div>
                                <hr />

                                <div class="row mb-4">
                                    <!-- col.// -->
                                    <div class="col-md-4 col-6 mb-3">
                                        <label class="mb-2 d-block">Số lượng</label>
                                        <form action="">
                                            <div class="form-group">
                                                <?php if ($row['product_quantity'] > 0) {

                                                    $link = isset($_SESSION['username']) && !empty($_SESSION['username'])
                                                        ? "..\kresources\cart.php?add={$row['product_id']}"
                                                        : "javascript:alert('Cần đăng nhập để đặt hàng!');window.location.href='login.php';"; ?>
                                                    <a href="<?php echo $link; ?>" class="btn btn-warning shadow-0">Thêm vào giỏ
                                                        hàng</a>
                                                <?php } else { ?>

                                                    <span class="text-danger ms-2">Đang cập nhật</span>
                                                <?php }
                                                ?>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </main>
                    </div>
                </div>
            </section>
            <br />
            <div class="row">

                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab">Mô tả sản phẩm </a></li>
                        <li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">Đánh
                                giá</a></li>
                        <li role="presentation"><a href="#ship" aria-controls="ship" role="tab" data-toggle="tab">Thông tin
                                khác</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <p>
                                <?php echo $row['product_description'] ?>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="comment">
                            <div role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab"
                                            data-toggle="tab">Tất cả</a></li>
                                    <li role="presentation"><a href="#5star" aria-controls="5star" role="tab"
                                            data-toggle="tab">5 sao</a></li>
                                    <li role="presentation"><a href="#4star" aria-controls="4star" role="tab"
                                            data-toggle="tab">4 sao</a></li>
                                    <li role="presentation"><a href="#3star" aria-controls="3star" role="tab"
                                            data-toggle="tab">3 sao</a></li>
                                    <li role="presentation"><a href="#2star" aria-controls="2star" role="tab"
                                            data-toggle="tab">2 sao</a></li>
                                    <li role="presentation"><a href="#star" aria-controls="star" role="tab"
                                            data-toggle="tab">1 sao</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="all">
                                        <?php display_report() ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="5star">
                                        <?php display_5() ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="4star">
                                        <?php display_4() ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="3star">
                                        <?php display_3() ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="2star">
                                        <?php display_2() ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="star">
                                        <?php display_1() ?>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div role="tabpanel" class="tab-pane" id="ship">
                            <p>
                                sản phẩm chính hãng nhập khẩu nguyên chiếc tại Việt Nam
                            </p>
                            <div class="row mb-2">
                                <div class="col-12 col-md-6 mb-0">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Giao hàng ngay trong
                                            2h</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Chế độ bảo hành cho
                                            sản phẩm gặp lỗi do vận chuyển</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Hỗ trợ hướng dẫn cách
                                            chơi</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            <!-- /.container -->
        </div>
    <?php endwhile; ?>

</div>
<?php include(TEMPLATE_FRONT_USER . DS . 'footer.php'); ?>