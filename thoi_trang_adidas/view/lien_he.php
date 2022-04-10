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

    .seach_sanpham input {
        border-radius: 4px;
        height: 27px;
        border: 1.6px solid black;
        margin-top: 75px;
        padding: 3px;
    }
</style>
<?php require_once "../dao/slider.php";
$ht_slider = getAll_slider(); ?>
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
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." style="height: 27px;">
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
    <div class="container">

        <div class="contact-area pt-115 pb-120">
            <div class="container">
                <div class="contact-info-wrap-3 pb-85">
                    <h3>Thông tin liên lạc</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 text-center mb-30">
                                <i class="icon-location-pin "></i>
                                <h4>Địa chỉ của chúng tôi</h4>
                                <p> Phố Trịnh Văn Bô, Phương Canh, Nam Từ Liêm, Hà Nội</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                                <ul>
                                    <li><i class="icon-screen-smartphone"></i> 0999999999 </li>
                                    <li><i class="icon-envelope "></i> <a href="#"> fpoly@gamil.com </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-contact-info-3 text-center mb-30">
                                <i class="icon-clock "></i>
                                <h4>Giờ mở cửa</h4>
                                <p>Thứ 2 - Thứ 7: 9:00 sáng - 5:00 chiều </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="get-in-touch-wrap">
                    <h3>Liên lạc</h3>
                    <div class="contact-from contact-shadow">
                        <form id="contact-form" action="https://template.hasthemes.com/norda/norda/assets/mail-php/mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input name="subject" type="text" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button class="submit" type="submit">Gửi đi</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: 'assets/images/icon-img/pin.png',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>
</body>


</html>