<?php
require_once "../dao/danh_muc.php";
$ma_dm = intval($_GET['ma_dm']);
$ht_dm_sp = getAll_hh_dm($ma_dm);
$ht_dm = getAll_dm();

require_once "../dao/slider.php";
$ht_slider = getAll_slider();
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
                            <b><span>Tất Cả Sản Phẩm</span></b>
                        </div>
                        <br>
                        <hr>
                        <!-- hàng 1 sản phẩm -->

                        <div class="text_new_product1">

                            <?php for ($i = 0; $i < count($ht_dm_sp); $i++) { ?>
                                <div class="product_size">

                                    <div class="product_new_1">
                                        <img width="100" src="<?php echo $ht_dm_sp[$i]['anh_hh'] ?>" alt="">
                                        <h6><?php echo $ht_dm_sp[$i]['ten_hh'] ?></h6>

                                        <button>Mua ngay</button>
                                        <a href="chitietsp.php?ma_hh=<?= $ht_dm_sp[$i]['ma_hh'] ?>"><button>Chi tiết</button></a>
                                    </div>
                                    <div class="evaluate">
                                        <img src="./img/icon4.PNG" alt="img">
                                        <p>( 4444 ) Nhận xét</p>
                                    </div>
                                    <hr>
                                    <div class="price_product">
                                        <h5><?= $ht_dm_sp[$i]['gia_hh'] ?></h5>
                                        <h4><u>đ</u></h4>
                                        <strike></strike>
                                    </div>
                                    <div class="description">
                                        <b>Lượt xem:</b>
                                        <p><?= $ht_dm_sp[$i]['luot_xem'] ?></p>
                                        <b>Chất liệu:</b>
                                        <p><?= $ht_dm_sp[$i]['chat_lieu'] ?></p>
                                        <b>Size:</b>
                                        <p><?= $ht_dm_sp[$i]['size'] ?></p>

                                    </div>

                                </div>
                            <?php } ?>

                        </div>

                        <div class="end_main">
                            Trang 1

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