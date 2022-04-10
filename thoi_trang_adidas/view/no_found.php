<?php
session_start();
require_once "../dao/hang_hoa.php";
require_once "../dao/danh_muc.php";
require_once "../dao/khach_hang.php";
$ht_hh = getAll_hh();
$ht_hh_tk = getAll_hhm();
$ht_dm = getAll_dm();
$dskhachhang = getAll_kh();




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
</head>

<body>
    <div class="container">
        <?php require_once "./layout/header.php"; ?>



        <main>
            <br>
            <hr>
            <div class="product">
                <div class="category">
                    <?php require_once "./layout/danh_muc_sp.php"; ?>
                    <div class="category_dm">
                        <?php require_once "./layout/top_sp.php"; ?>
                    </div>
                </div>
                <div class="new_product">


                    <div class="Highlights_product">
                        <br>
                        <div class="text_Highlights_product">
                            <span>
                                <?php
                                if (isset($_SESSION['ktk'])) {
                                    echo $_SESSION['ktk'];
                                    unset($_SESSION['ktk']);
                                }
                                ?>
                            </span>
                        </div>
                        <br>
                        <hr>
                        <!-- hàng 1 sản phẩm -->

                        <div style=" height:400px; padding: 20px 0 0 5%; background: #b4b8b89e;">

                            <p><b>Để tìm được kết quả chính xác hơn, bạn vui lòng:</b></p><br>
                            <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li><br>
                            <li>Thử lại bằng từ khóa khác</li><br>
                            <li>Thử lại bằng những từ khóa tổng quát hơn</li><br>
                            <li>Thử lại bằng những từ khóa ngắn gọn hơn</li><br>


                        </div>

                    </div>
                </div>
            </div>
        </main>

    </div>
    </main>
    <hr>
    <br>
    <br>
    <hr>
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
                        <li><a href="">Tin tuyển dụng</a></li>
                        <li><a href="" title="">Tin khuyến mãi</a></li>
                        <li><a href="" title="">Hướng dẫn mua online</a></li>
                        <li><a href="" title="">Hướng dẫn mua trả góp</a></li>
                        <li><a href="" title="">Chính sách trả góp</a></li>
                    </ul>
                </div>
                <div class="fs-ftcol fs-ftcol1">
                    <ul class="fs-ftul">
                        <li><a href="">Hệ thống cửa hàng</a></li>
                        <li><a href="" title="">Hệ thống bảo hành</a></li>
                        <li><a href="" title="">Bán hàng doanh nghiệp</a></li>
                        <li><a href="" title="">Kiểm tra hàng Apple chính hãng</a></li>
                        <li><a href="" title="">Giới thiệu máy đổi trả</a></li>
                        <li><a href="" title="">Chính sách đổi trả</a></li>
                    </ul>
                </div>
                <div class="fs-ftcol  fs-ftcol2">
                    <ul class="fs-ftr2 clearfix">
                        <li>
                            <p class="fs-ftrtit" style="font-size: 15px;">Tư vấn mua hàng (Miễn phí)</p>
                            <a href="tel:0978942425" title="">09.789.42425 </a> <span>(Nhánh 1)</span>
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
                        <p class="fs-ftrtit">Hỗ trợ thanh toán:</p>
                        <ul class="fs-frgbhg">
                            <a class="fs-ftr-chf" href=""><img src="./img/icon_cart.PNG" alt=""></a>
                            <a rel="nofollow noopener" class="fs-ftr-cthuong" href="" title=""><img src="./img/icon_cart2.PNG" alt=""></a>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>





    </div>
</body>


</html>