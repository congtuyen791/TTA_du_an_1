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
require_once 'update_kh.php';
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
  $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
  $data_kh = pdo_query_one($sql);
}
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
  <link rel="stylesheet" href="./afk/css/bootstrap-grid.css">
  <link rel="stylesheet" href="./afk/css/icons.css">
  <link rel="stylesheet" href="./afk/css/style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap" rel="stylesheet">
  <style>
    .container {
      max-width: 1440px;
    }
    

    .container-fluid {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    .row {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
      align-content: center;
      flex-direction: row;
      justify-content: space-around;
    }
  </style>
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
          <input type="text" name="search" margin-top="20px" placeholder="Tìm kiếm sản phẩm..." style="margin-top:75px; height: 27px;;">
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
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </menu>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <?php for ($i = 0; $i < count($ht_slider); $i++) { ?>
          <div class="swiper-slide"><img style="width: 100% ;" src="<?= $ht_slider[$i]['anh_slider'] ?>" alt=""></div>
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
    <div class="utf-dashboard-content-container-aera" data-simplebar>
      <div class="utf-dashboard-content-inner-aera">
        <div class="row">
          <div class="col-xl-6">
            <div class="dashboard-box margin-top-0 margin-bottom-30">
              <div class="headline">
                <h3>Hồ sơ của tôi</h3>
              </div>

              <div class="content with-padding padding-bottom-0">
                <div class="row">
                  <div class="col">
                    <form action="" method="post">
                      <div class="row">
                        <input type="hidden" name="ma_kh" value="<?php echo $data_kh['ma_kh'] ?>">
                        <div class="col-xl-12 col-md-6 col-sm-6">
                          <div class="utf-submit-field">
                            <h5>Tên khách hàng</h5>
                            <input type="text" class="utf-with-border" name="ten_kh" value="<?php echo $data_kh['ten_kh'] ?>">
                          </div>
                        </div>
                        <div class="col-xl-12 col-md-6 col-sm-6">
                          <div class="utf-submit-field">
                            <h5>Email</h5>
                            <input type="text" class="utf-with-border" name="email" value="<?php echo $data_kh['email'] ?>">
                          </div>
                        </div>
                        <div class="col-xl-12 col-md-6 col-sm-6">
                          <div class="utf-submit-field">
                            <h5>Mật khẩu</h5>
                            <input type="text" class="utf-with-border" name="mat_khau" value="<?php echo $data_kh['mat_khau'] ?>">
                          </div>
                        </div>
                        <div class="col-xl-12 col-md-6 col-sm-6">
                          <div class="utf-submit-field">
                            <h5>Địa chỉ</h5>
                            <input type="text" class="utf-with-border" name="dia_chi" value="<?php echo $data_kh['dia_chi'] ?>">
                          </div>
                        </div>
                        <div class="col-xl-12 col-md-6 col-sm-6">
                          <div class="utf-submit-field">
                            <h5>Giới Tính</h5>
                            <input type="text" class="utf-with-border" name="gioi_tinh" value="<?php echo $data_kh['gioi_tinh'] ?>">
                          </div>
                        </div>
                      </div>
                      <button class="button ripple-effect big margin-top-10 margin-bottom-20" name="update" type="submit">Lưu thay đổi</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <hr>

    </div>

    <?php require_once "./layout/footer.php"; ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/tippy.all.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/snackbar.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom_jquery.js"></script>
</body>


</html>