<?php
session_start();
require_once "./../../dao/pdo.php";
require_once "./../../dao/khach_hang.php";
require_once "./../../dao/hang_hoa.php";
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
    $data_kh = pdo_query_one($sql);
    $ma_kh = $data_kh['ma_kh'];
    $ten_kh = $data_kh['ten_kh'];
    
    if (isset($_GET['ma_hh'])) {
        $ma_hh = $_GET['ma_hh'];
        $conn = getConnection();
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh = $ma_hh";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $rowData = $statement->fetch();
        if (isset($rowData) == false) {
            die;
        }
    
        if (isset($_SESSION['cart']) && array_key_exists($ma_hh, $_SESSION['cart'])) {
            $_SESSION['cart'][$ma_hh]['0']['so_luong_hh'] += 1;
            $tt = $_SESSION['cart'][$ma_hh]['0']['so_luong_hh'] * $_SESSION['cart'][$ma_hh]['0']['gia_hh'];
            $_SESSION['cart'][$ma_hh]['0']['tt'] = $tt;
        } else {
            $tt = $rowData['gia_hh'];
            $_SESSION['cart'][$ma_hh] = array([
                'ma_hh' => $ma_hh,
                'so_luong_hh' => 1,
                'ten_hh' => $rowData['ten_hh'],
                'anh_hh' => $rowData['anh_hh'],
                'gia_hh' => $rowData['gia_hh'],
                'tt' => $tt,
            ]);
        }
       
    }
    
    header("location: /thoi_trang_adidas/view/gio_hang.php");
} else {
    $_SESSION['error'] = '<script>alert("Bạn phải đăng nhập để mua hàng")</script>';
    header("location: /thoi_trang_adidas/view/login.php");
}
