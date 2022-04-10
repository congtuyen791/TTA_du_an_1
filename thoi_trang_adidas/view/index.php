<?php
session_start();
require_once "../dao/hang_hoa.php";
require_once "../dao/danh_muc.php";
require_once "../dao/khach_hang.php";
$ht_hh = getAll_hh();
$ht_hhm = getAll_hhm();
$ht_dm = getAll_dm();
$dskhachhang = getAll_kh();

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
                    <br>
                    <div class="text_Highlights_product">
                        <b><span>Sản Phẩm Mới Nhất</span></b>
                    </div>
                    <br>
                    <hr>
                    <div class="text_new_product1">
                        <?php for ($i = 0; $i < count($ht_hhm); $i++) { ?>
                            <div class="product_size">

                                <div class="product_new_1">
                                    <img width="100" src="<?php echo $ht_hhm[$i]['anh_hh'] ?>" alt="">
                                    <h6><?php echo $ht_hhm[$i]['ten_hh'] ?></h6>
                                    <span>
                                        <form action="/thoi_trang_adidas/admin/gio_hang/insert.php?ma_hh=<?php echo $ht_hhm[$i]['ma_hh'] ?>" method="post">

                                            <input type="hidden" name="so_luong_hh" value="1">
                                            <button>Thêm vào giỏ hàng</button>

                                        </form>
                                        <a href="chitietsp.php?ma_hh=<?php echo $ht_hhm[$i]['ma_hh'] ?>"><button>Chi tiết</button></a>
                                    </span>
                                </div>
                                <div class="price_product">
                                    <h5><?= $ht_hhm[$i]['gia_hh'] ?><sup>đ</sup></h5>

                                    <strike></strike>
                                </div>
                                <div class="description">
                                    <b>Chất liệu:</b>
                                    <p><?= $ht_hhm[$i]['chat_lieu'] ?></p>
                                    <b>Size:</b>
                                    <p><?= $ht_hhm[$i]['size'] ?></p>
                                    <b>Lượt xem:</b>
                                    <p><?= $ht_hhm[$i]['luot_xem'] ?></p>

                                </div>

                            </div>
                        <?php } ?>
                    </div>
                    <div class="Highlights_product">
                        <hr>
                        <br>
                        <div class="text_Highlights_product">
                            <b><span>Tất Cả Sản Phẩm </span></b>
                        </div>
                        <br>
                        <hr>
                        <!-- hàng 1 sản phẩm -->

                        <div class="text_new_product1">

                            <?php for ($i = 0; $i < count($ht_hh); $i++) { ?>
                                <div class="product_size">

                                    <div class="product_new_1">
                                        <img width="100" src="<?php echo $ht_hh[$i]['anh_hh'] ?>" alt="">
                                        <h6><?php echo $ht_hh[$i]['ten_hh'] ?></h6>
                                        <span>
                                            <form action="/thoi_trang_adidas/admin/gio_hang/insert.php?ma_hh=<?php echo $ht_hh[$i]['ma_hh'] ?>" method="post">

                                                <input type="hidden" name="so_luong_hh" value="1">
                                                <button>Thêm vào giỏ hàng</button>

                                            </form>
                                            <a href="chitietsp.php?ma_hh=<?php echo $ht_hh[$i]['ma_hh'] ?>"><button>Chi tiết</button></a>
                                        </span>
                                    </div>
                                    <div class="price_product">
                                        <h5><?= $ht_hh[$i]['gia_hh'] ?><sup>đ</sup></h5>
                                        <strike></strike>
                                    </div>
                                    <div class="description">
                                        <b>Chất liệu:</b>
                                        <p><?= $ht_hh[$i]['chat_lieu'] ?></p>
                                        <b>Size:</b>
                                        <p><?= $ht_hh[$i]['size'] ?></p>
                                        <b>Lượt xem:</b>
                                        <p><?= $ht_hh[$i]['luot_xem'] ?></p>

                                    </div>

                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
        <hr>
        <br>
        <br>
        <hr>

        <?php require_once "./layout/footer.php"; ?>
    </div>
</body>


</html>