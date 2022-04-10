<?php
session_start();
require_once './../../dao/pdo.php';
require_once './../../dao/khach_hang.php';
$data = ['ma_hh' => $_POST['ma_hh'],];
$dskhachhang = getAll_kh();
    if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
    $data_kh = pdo_query_one($sql);
    header("location: ./../../view/gio_hang.php?ma_hh=" . $data['ma_hh']);
    } else {
        $_SESSION['error'] = "<script>alert('Bạn cần đăng nhập mới thêm được sản phẩm vào giỏ hàng')</script>";
        header("location: ./../../view/login.php");
    }
