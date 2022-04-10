<?php
session_start();
require_once "../dao/hang_hoa.php";
require_once "../dao/danh_muc.php";
require_once "../dao/khach_hang.php";
require_once "../dao/don_hang.php";
$ht_hh = getAll_hh();
$ht_hhm = getAll_hhm();
$ht_dm = getAll_dm();
$dskhachhang = getAll_kh();

$ma_ct_dh = intval($_GET['ma_ct_dh']);
$data_ct_dh = select_ct_dh($ma_ct_dh);
$data_dh = getAll_dh($ma_ct_dh);
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

    <style>
        .seach_sanpham input {
            border-radius: 4px;
            height: 24px;
            border: -0.40000000000000036px solid black;
            margin-top: 75px;
            padding: 3px;
        }
        a{
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="./afk/css/invoice.css">
</head>

<body>
    <header>
        <menu>
            <div class="logo">
                <a href="./index.php"><img src="./img/logo.png" alt="img"></a>
            </div>
            <nav>
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
        <!-- Swiper -->


    </header>
    <div class="container">




        <div class="row">
            <div class="col-xl-12">
                <h2 class="invoice_title">Chi tiết đơn hàng</h2>
            </div>
            <div class="col-xl-6"> <strong class="margin-bottom-5">Hóa đơn cho:</strong>
                <p><?php echo $data_ct_dh['ten_kh'] ?></p>
            </div>
            <div class="col-xl-6 fl_right"> <strong class="margin-bottom-5">Được vận chuyển đến:</strong>
                <p><?php echo $data_ct_dh['dia_chi'] ?></p>
            </div>
            <div class="col-xl-6"> <strong class="margin-bottom-5">Phương thức thanh toán:</strong>
                <p>Thanh toán khi nhận hàng</p>
            </div>
            <div class="col-xl-6 fl_right"> <strong class="margin-bottom-5">Ngày đặt hàng:</strong>
                <p><?php echo $data_ct_dh['ngay_tao'] ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <table class="margin-top-20">
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php for ($i = 0; $i < count($data_dh); $i++) { ?>
                        <tr>
                            <td><?= $data_dh[$i]['ten_hh'] ?></td>
                            <td><?= $data_dh[$i]['gia_hh'] ?></td>
                            <td><?= $data_dh[$i]['so_luong_hh'] ?></td>
                            <td>
                                <?php
                                $tt = 0;
                                $tt = $data_dh[$i]['so_luong_hh'] * $data_dh[$i]['gia_hh'];
                                echo $tt;

                                ?>
                            </td>
                        </tr>

                    <?php  } ?>


                </table>
            </div>
            <div class="col-xl-12">
                <table>
                    <tr>
                        <th>Tổng tiền</th>
                        <th><span><?php echo $data_ct_dh['tong_tien'] ?><sup>đ</sup></span></th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="print-button-container"> <a href="#" class="print-button">Trở về</a> </div>
    </div>

    <hr>
    <br>
    <br>
    <hr>


    </div>
    <?php require_once "./layout/footer.php"; ?>
</body>


</html>