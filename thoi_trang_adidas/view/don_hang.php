<?php
session_start();
require_once "../dao/pdo.php";


$tong_tien = (isset($_SESSION['tong_tien'])) ? $_SESSION['tong_tien'] : [];
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
    $data_kh = pdo_query_one($sql);
}
?>




<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/norda/norda/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 07:43:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Đơn hàng</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\logo_white.png" />
    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/category.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>


    <div class="main-wrapper">
        <!-- Mobile menu start -->



        <div class="checkout-main-area pt-120 pb-120">
            <div class="container">
                <div class="customer-zone mb-20">

                    <div class="checkout-login-info">

                        <form action="#">

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="sin-checkout-login">
                                        <label>Username or email address <span>*</span></label>
                                        <input type="text" name="user-name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="sin-checkout-login">
                                        <label>Passwords <span>*</span></label>
                                        <input type="password" name="user-password">
                                    </div>
                                </div>
                            </div>
                            <div class="button-remember-wrap">
                                <button class="button" type="submit">Login</button>
                                <div class="checkout-login-toggle-btn">
                                    <input type="checkbox">
                                    <label>Remember me</label>
                                </div>
                            </div>
                            <div class="lost-password">
                                <a href="#">Lost your password?</a>
                            </div>

                        </form>
                        <div class="checkout-login-social">
                            <span>Login with:</span>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Google</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="customer-zone mb-20">

                    <div class="checkout-login-info3">
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <input type="submit" value="Apply Coupon">
                        </form>
                    </div>
                </div>
                <div class="checkout-wrap pt-30">
                    <div class="row">
                        <div class="col-lg-7">
                            <form action="./../admin/don_hang/xl_don_hang.php" method="post">
                                <div class="billing-info-wrap mr-50">
                                    <h3>Thông tin người nhận</h3>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Tên người nhận <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="ten_kh" value="<?= $data_kh['ten_kh'] ?>">
                                                <input type="hidden" name="ma_kh" value="<?=$data_kh['ma_kh'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Số điện thoại <abbr class="required" title="required">*</abbr></label>
                                                <input type="number" name="sdt">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Địa chỉ nhận hàng: <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="dia_chi" value="<?php echo $data_kh['dia_chi'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="Place-order">
                                    <button>Đặt hàng</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="your-order-area">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-info">
                                            <ul>
                                                <li>Sản phẩm <span>Giá sản phẩm</span></li>
                                            </ul>
                                        </div>
                                        <div class="your-order-middle">
                                            <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                                            <ul>
                                                <li><?= $value['0']['ten_hh'] ?> x <?= $value['0']['so_luong_hh'] ?><span><?= $value['0']['gia_hh'] ?> <sup>đ</sup></span></li>
                                            </ul>
                                            <?php } ?>
                                        </div>
                                        
                                        <div class="your-order-info order-total">
                                            <ul>
                                                <li>Tổng cộng <span><?= number_format($tong_tien, 0, ',', '.') ?> <sup>đ</sup></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="fs-footer">
                <div class="fs_ftrow_clearfix">
                    <div class="fs-ftcol fs-ftcol1">
                        <ul class="fs-ftul">
                            <li><a target="_blank" rel="nofollow noopener" href="#">Giới thiệu về công ty</a></li>
                            <li><a href="" title="Câu hỏi thường gặp mua hàng">Câu hỏi thường gặp mua hàng</a></li>
                            <li><a href="" title="">Chính sách bảo mật</a></li>
                            <li><a href="" title="">Quy chế hoạt động</a></li>
                            <li><a href="" title="">Kiểm tra hóa đơn điện tử</a></li>
                            <li><a href="" title="">Tra cứu thông tin bảo hành</a></li>
                        </ul>
                    </div>
                    <div class="fs-ftcol fs-ftcol1">
                        <ul class="fs-ftul">
                            <li><a href="https://www.facebook.com/congtuyen.791/">liên hệ chủ cửa hàng cơ sở 1</a></li>
                            <li><a href="https://www.facebook.com/duc.mattoyi" title="">liên hệ chủ cửa hàng cơ sở 2</a></li>
                            <li><a href="https://www.facebook.com/ducpho311" title="">liên hệ chủ cửa hàng cơ sở 3</a></li>
                        </ul>
                    </div>
                    <div class="fs-ftcol  fs-ftcol2">
                        <ul class="fs-ftr2 clearfix">
                            <li>
                                <p class="fs-ftrtit" style="font-size: 15px;">Tư vấn mua hàng (Miễn phí)</p>
                                <a href="tel:0978942425" title="">0983.358.791 </a> <span>(Nhánh 1)</span>
                                <p class="fs-ftrtit">Hỗ trợ kỹ thuật</p>
                                <a href="tel:0702288806" title="">070.22.88806 </a><span>(Nhánh 2)</span>
                            </li>
                            <li>
                                <p class="fs-ftrtit" style="font-size: 15px;">Góp ý, khiếu nại dịch vụ (8h00-22h00)</p>
                                <a href="tel:18006616" title="">09.789.42425</a><br>
                            </li>
                        </ul>
                    </div>
                    <div class="fs-ftrright">
                        <div class="fs-ftr1">
                            <p class="fs-ftrtit">Vị trí cửa hàng:</p>
                            <ul class="fs-frgbhg">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863981044335!2d105.7445984147235!3d21.03812778599325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1638782205017!5m2!1svi!2s" width="550" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>


<!-- Mirrored from template.hasthemes.com/norda/norda/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 07:43:37 GMT -->

</html>