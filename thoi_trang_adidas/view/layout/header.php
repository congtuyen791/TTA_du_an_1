<style>
    menu {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
<style>
    .swiper {
        width: 100%;
        height: 662px;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 90%;
        object-fit: cover;
    }
</style>
<?php require_once "../dao/slider.php";
$ht_slider = getAll_slider();?>
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
                            <a href="profile.php?ma_kh=' . $data_kh['ma_kh'] . '"">' . $data_kh['ten_kh'] . '</a>
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
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < count($ht_slider); $i++) { ?>
                    <div class="swiper-slide"><img src="<?= $ht_slider[$i]['anh_slider'] ?>" alt=""></div>
                    <!-- <div class="swiper-slide"><img src="" alt=""></div> -->

                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>

</header>