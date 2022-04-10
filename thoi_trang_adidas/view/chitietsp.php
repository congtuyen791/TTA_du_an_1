<?php
session_start();
require_once "../dao/hang_hoa.php";
require_once "../dao/danh_muc.php";
require_once "../dao/binh_luan.php";
$ht_hh = getAll_hh();
$ht_hhm = getAll_hhm();
$ht_dm = getAll_dm();
$ma_hh = intval($_GET['ma_hh']);
$data = findById_hh($ma_hh);
$ht_hht = top_10_hh();
update_hh_view($ma_hh);
$bl = bl($ma_hh);

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
                    <br>
                    <div class="text_Highlights_product">
                        <b><span>Chi tiết sản phẩm</span></b>
                    </div>
                    <br>
                    <hr>
                    <div class="new_product">

                        <br>
                        <div class="text_new_product4">

                            <img width="285px" src="<?php echo $data['anh_hh']; ?>" alt="">
                            <div class="product_new_no">
                                <h2><?php echo $data['ten_hh']; ?></h2>
                                <hr>

                                <div class="innn_1">
                                    <div class="inn_new">
                                        <h4>Size</h4>
                                        <span><?php echo $data['size']; ?></span>
                                    </div>

                                    <div class="inn_new">
                                        <h4>Màu sắc</h4>
                                        <span><?php echo $data['mau_sac']; ?></span>

                                    </div>

                                    <div class="inn_new">
                                        <h4>Giá:</h4>
                                        <b><span><?php echo $data['gia_hh']; ?> <sup>đ</sup></span></b>
                                    </div>
                                    <div class="inn_new">
                                        <h4>Lượt xem:</h4>
                                        <span><?php echo $data['luot_xem']; ?></span>
                                    </div>

                                </div>

                                <a href="gio_hang.php?ma_hh=<?php echo $data['ma_hh'] ?>"><button>Thêm vào giỏ hàng</button></a>
                            </div>
                            <div class="k_detail">
                                <h2>Chi tiết sản phẩm</h2>
                                <div class="description_new_1">

                                    <b>Size</b>
                                    <p><?php echo $data['size']; ?></p>
                                    <b>Màu sắc</b>
                                    <p><?php echo $data['mau_sac']; ?></p>
                                    <b>Chất liệu</b>
                                    <p><?php echo $data['chat_lieu']; ?></p>
                                    <b>Mô tả:</b>
                                    <p><?php echo $data['mo_ta']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="Highlights_product">
                            <hr>
                            <br>
                            <div class="text_Highlights_product">
                                <b><span>Đánh Giá Sản Phẩm </span></b>
                                <p style="color: red;"></p>
                                </p>
                            </div>
                            <br>
                            <hr>
                            <!-- hàng 1 sản phẩm -->

                            <div class="text_new_pro">
                                <?php
                                if (isset($_SESSION['email'])) {
                                    $email = $_SESSION['email'];
                                    $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
                                    $data_kh = pdo_query_one($sql);
                                    $ma_kh = $data_kh['ma_kh'];
                                    $email = $data_kh['email'];
                                    $ten_kh = $data_kh['ten_kh'];
                                    echo '
                                            
                             <form action="/thoi_trang_adidas/admin/binh_luan/insert.php?ma_hh=' . $data['ma_hh'] . '" method="post">
                                    <input type="hidden" name="ma_kh" value="' . $ma_kh . '">

                                    <textarea name="noi_dung" id="" cols="110" rows="5"></textarea>
                                    <br>
                                    <button class="sen_comment" type="submit" value="" name="btn_comment">Gửi</button>
                                    <hr>

                                </form>
                            
                            ';
                                } else {
                                    echo '<p style="color: red;">Bạn cần đăng nhập để bình luận!</p>';
                                }

                                ?>






                                <br>
                                <b>
                                    <h3> Bình luận</h3>
                                </b>
                                <br>
                                <?php for ($i = 0; $i < count($bl); $i++) { ?>
                                    <div class="add_coment">
                                        <div class="list_comment">
                                            <li style="font-size: 20px;"></li>
                                            <input type="hidden" name="ma_kh" value="<?php echo $bl[$i]['ma_kh'] ?>">
                                            <span><b style="color:blue;"><?php echo $bl[$i]['ten_kh'] ?> </b></span>
                                        </div>
                                        <div class="conten_comment"><br>
                                            <?php echo $bl[$i]['noi_dung'] ?>
                                            <span> <?php echo $bl[$i]['ngay_tao'] ?></span>
                                        </div>
                                        <br>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        </main>
        <hr>
        <br>
        <br>
        <hr>
        <?php require_once "./layout/footer.php"; ?>
    </div>






</body>


</html>