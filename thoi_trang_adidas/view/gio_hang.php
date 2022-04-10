<?php
session_start();

$cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
$tong_tien = 0;
$so_luong = 0;

require_once "../dao/hang_hoa.php";
require_once "../dao/danh_muc.php";
require_once "../dao/khach_hang.php";
$ht_hh = getAll_hh();
$ht_hhm = getAll_hhm();
$ht_dm = getAll_dm();
$dskhachhang = getAll_kh();
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
    $data_kh = pdo_query_one($sql);
    $ma_kh = $data_kh['ma_kh'];
}

?>




<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/norda/norda/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 07:43:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giỏ hàng</title>
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
    <link rel="stylesheet" href="./css/elegant.css">

    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <style>
        .logo a img {
            width: 130px;
            margin: 45px 0px 0px 30px;
        }

        menu nav ul li a {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            display: inline;
            text-decoration: none;
            font-size: 18px;
            color: black;
            padding: 3px 20px 5px 20px;

        }

        .seach_sanpham input {
            border-radius: 4px;
            height: 26px;
            border: 1.6px solid black;
            margin-top: 75px;
            padding: 3px;
        }

        .fs_ftrow_clearfix {
            display: grid;

            grid-template-columns: 290px 230px 280px 270px 310px;
            float: right;
            margin: 30px 0px;

        }
    </style>

</head>

<body>

    <header>
        <menu>
            <div class="logo">
                <a href="./index.php"><img src="./img/logo.png" alt="img"></a>
            </div>
            <nav style="padding-top: 45px;">
                <ul>
                    <li><a href="../view/" class="the_a">Sản phẩm</a></li>
                    <li><a href="../view/lien_he.php">Liên Hệ</a></li>
                    <li><a href="../view/gioi_thieu.php">Giới thiệu</a></li>
                </ul>
            </nav>
            <div class="seach_sanpham">
                <form action="../view/search.php" method="GET">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm...">
                    <br><b style="color: red; font-size: 10px;">
                        <?php
                        if (isset($_SESSION['otk'])) {
                            echo $_SESSION['otk'];
                            unset($_SESSION['otk']);
                        }
                        ?></b>
            </div>

            <div class="seach_sanpham1">

                <button type="submit" name="ok"><a href=""><img src="./img/icon 12.png" alt="tìm kiếm"></a></button>
                </form>
            </div>
            <?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
                $data_kh = pdo_query_one($sql);
                echo '
                            <div class="ok_acout1" style="width: 100px;">
                            <a style="color: black; margin-left:20px;" href="gio_hang.php">Giỏ hàng</a>
                            </div>
                            <div class="ok_acout1">
                                <a href="">' . $data_kh['ten_kh'] . '</a>
                                <a href="\thoi_trang_adidas\admin\khach_hang\logout.php" class="login">Đăng xuất</a>
                            </div>
                            ';
            } else {
                echo '
                            <div class="ok_acout">
                                <a style="color: black; margin-left: 20px;" href="login.php">Đăng nhập</a>
                                <a style="color: black; margin-left:20px;" href="register.php">Đăng ký</a>
                            </div>
                            
                            ';
            }
            ?>
        </menu>
        <br>
    </header>
    <div class="container">
        <main>
            <div class="cart-main-area pt-115 pb-120">
                <div class="container">
                    <h3 class="cart-page-title">Giỏ hàng của bạn </h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">Sản phẩm</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>
                                                <th>Tạm tính</th>

                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($cart as $key => $value) {  ?>

                                                <tr>
                                                    <?php $tong_tien += (int)$value[0]['tt']; ?>

                                                    <td class="product-thumbnail">
                                                        <a href=""><img src="<?php echo $value['0']['anh_hh'] ?>" alt="" style="width: 100px;"></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <p><?php echo $value['0']['ten_hh'] ?></p>
                                                    </td>
                                                    <td class="product-price-cart"><span class="amount"><?php echo number_format($value['0']['gia_hh'], 0, ',', '.'); ?><sup>đ</sup></span></td>
                                                    <td class="product-quantity pro-details-quality">
                                                        <div class="cart-plus-minus">
                                                            <?php echo $value['0']['so_luong_hh'] ?>

                                                        </div>
                                                    </td>
                                                    <td class="product-quantity pro-details-quality">
                                                        <div class="cart-plus-minus">
                                                            <?php echo number_format($value['0']['tt'], 0, ',', '.'); ?><sup>đ</sup>

                                                        </div>
                                                    </td>

                                                    <td class="product-remove">
                                                        <a href="./../admin/gio_hang/delete.php?ma_hh=<?php echo $value['0']['ma_hh'] ?>">Xóa</i></a>
                                                    </td>
                                                </tr>
                                                <?php $so_luong += (int)$value[0]['so_luong_hh'] ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="index.php">Tiếp tục mua hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Tổng Tiền giỏ hàng</h4>
                                    </div>

                                    <div class="total-shipping">
                                        <p>Tổng số sản phẩm: <?= $so_luong ?><?php $_SESSION['so_luong'] = $so_luong ?></p>
                                    </div>
                                    <h4 class="grand-totall-title">Tổng cộng: <?php echo number_format($tong_tien, 0, ',', '.'); ?><sup>đ</sup>
                                        <?php $_SESSION['tong_tien'] = $tong_tien; ?><span></span></h4>
                                    <a href="don_hang.php">Đặt hàng</a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </div>
    </main>
    <br><br>
    <hr>
    <hr>
    <!-- All JS is here
    ============================================ -->
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





</body>


<!-- Mirrored from template.hasthemes.com/norda/norda/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 07:43:37 GMT -->

</html>