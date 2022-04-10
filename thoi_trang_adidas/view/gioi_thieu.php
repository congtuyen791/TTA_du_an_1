<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời trang ADIDAS</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\logo_white.png" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .seach_sanpham input {
            border-radius: 4px;
            height: 27px;
            border: 1.6px solid black;
            margin-top: 75px;
            padding: 3px;
        }
    </style>
</head>

<body>
    <?php require_once "./layout/header.php"; ?>
    <div class="container">
        <div class="about-us-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="about-us-logo">
                            <img src="./img/logo.png" alt="logo" style="height: 100px;">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="about-us-content">
                            <h3>Giới thiệu</h3>
                            <p>Thời trang Adidas là một website chuyên cung cấp các mặt hàng thời trang mang thương hiệu Adidas. Chúng tôi xin cam kết những sản phẩm được bán trên website là những sản phẩm chính hãng !</p>
                            <div class="signature">
                                <h2>Adidas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area pb-120">
            <div class="container">
                <div class="service-wrap-border service-wrap-padding-3">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-red">
                                    <i class="icon-cursor"></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>Miễn phí giao hàng</h3>
                                    <p>Đơn hàng trong tỉnh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-red">
                                    <i class="icon-refresh "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>30 ngày đổi trả</h3>
                                    <p>Đổi do lỗi của nhà sản xuất</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-red">
                                    <i class="icon-credit-card "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>Thanh toán an toàn</h3>
                                    <p>100% bảo mật</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-red">
                                    <i class="icon-earphones "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>Hỗ trợ 24/24</h3>
                                    <p>Hỗ trợ mọi lúc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="./img/banner2.jpg" alt="" style="height: 300px;"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="./img/banner1.jpg" alt="" style="height: 300px;"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>










        <hr>
        <br>
        <br>
        <hr>


    </div>
    <?php require_once "./layout/footer.php"; ?>
    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>


</html>