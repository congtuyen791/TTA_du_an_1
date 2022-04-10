<?php
session_start();
require_once "./../dao/hang_hoa.php";
if (isset($_GET['ok'])) {
    $search = $_GET['search'];
    if ($search == "") {
        $_SESSION['otk'] = "Bạn phải nhập vào ô tìm kiếm!";
        header("location: index.php");
        die;
    } else {
        $ht_hh_tk = search($search);
        // echo "<pre>";
        // print_r($ht_hh_tk);
        // echo "</pre>";

        if (count($ht_hh_tk) <= 0) {
            $_SESSION['ktk'] = "Rất tiếc, chúng tôi không tìm thấy kết quả nào phù hợp với từ khóa <b>" . $search . "</b>";

            header("location: no_found.php");
            die;
        } else {
            $_SESSION['dtk'] = "Tìm thấy <b>" . count($ht_hh_tk) . "</b> kết quả liên quan đến từ khóa: <b>" . $search . "</b>";

?>
            <?php
            require_once "../dao/hang_hoa.php";
            require_once "../dao/danh_muc.php";
            require_once "../dao/khach_hang.php";
            $ht_hh = getAll_hh();
            $ht_hh_tk = getAll_hhm();
            $ht_dm = getAll_dm();
            $dskhachhang = getAll_kh();


            $ht_hh_tk = search($search);

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
                                            if (isset($_SESSION['dtk'])) {
                                                echo $_SESSION['dtk'];
                                                unset($_SESSION['dtk']);
                                            }


                                            ?></b>
                                        </span>
                                    </div>
                                    <br>
                                    <hr>
                                    <!-- hàng 1 sản phẩm -->

                                    <div class="text_new_product1">

                                        <?php for ($i = 0; $i < count($ht_hh_tk); $i++) { ?>
                                            <div class="product_size">

                                                <div class="product_new_1">
                                                    <img width="100" src="<?php echo $ht_hh_tk[$i]['anh_hh'] ?>" alt="">
                                                    <h6><?php echo $ht_hh_tk[$i]['ten_hh'] ?></h6>

                                                    <form action="/thoi_trang_adidas/admin/gio_hang/insert.php?ma_hh=<?php echo $ht_hh_tk[$i]['ma_hh'] ?>" method="post">

                                                        <input type="hidden" name="so_luong_hh" value="1">
                                                        <button>Thêm vào giỏ hàng</button>

                                                    </form>
                                                    <a href="chitietsp.php?ma_hh=<?php echo $ht_hh_tk[$i]['ma_hh'] ?>"><button>Chi tiết</button></a>
                                                </div>
                                                <div class="price_product">
                                                    <h5><?= $ht_hh_tk[$i]['gia_hh'] ?><sup>đ</sup></h5>
                                                    <strike></strike>
                                                </div>
                                                <div class="description">
                                                    <b>Lượt xem:</b>
                                                    <p><?= $ht_hh_tk[$i]['luot_xem'] ?></p>
                                                    <b>Chất liệu:</b>
                                                    <p><?= $ht_hh_tk[$i]['chat_lieu'] ?></p>
                                                    <b>Size:</b>
                                                    <p><?= $ht_hh_tk[$i]['size'] ?></p>

                                                </div>

                                            </div>
                                        <?php } ?>

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
<?php
        }
    }
}
?>