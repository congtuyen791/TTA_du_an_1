<?php
require_once "./../../dao/don_hang.php";
session_start();

if (empty($_POST['ten_kh'])  == true || empty($_POST['sdt']) == true || empty($_POST['dia_chi']) == true) {
    $_SESSION['error'] = "Các trường không được để trống";
    header("location: /thoi_trang_adidas/view/don_hang.php");
} else {
    $tong_tien = $_SESSION['tong_tien'];
    $so_luong = $_SESSION['so_luong'];
    $ten_kh = $_POST['ten_kh'];
    $ma_kh = $_POST['ma_kh'];
    $dia_chi = $_POST['dia_chi'];
    $sdt = $_POST['sdt'];
    $data = [
        'ma_kh' => $ma_kh,
        'ten_kh' => $ten_kh,
        'so_luong' => $so_luong,
        'trang_thai' => 'đang giao',
        'dia_chi' => $dia_chi,
        'sdt' => $sdt,
        'tong_tien' => $tong_tien,
        'ngay_tao' => date('Y-m-d'),
    ];
    insert_ct_dh($data);
    $sql = "SELECT * FROM chi_tiet_dh WHERE ma_kh = '$ma_kh' ORDER BY ma_ct_dh DESC";
    $data_ct_kh = pdo_query_one($sql);
    foreach ($_SESSION['cart'] as $key => $value) {
        $ten_hh = $value['0']['ten_hh'];
        $ma_hh = $value['0']['ma_hh'];
        $so_luong_hh = $value['0']['so_luong_hh'];
        $gia_hh = $value['0']['gia_hh'];


        $data = [
            'ma_hh' => $ma_hh,
            'so_luong_hh' => $so_luong_hh,
            'ten_hh' => $ten_hh,
            'gia_hh' => $gia_hh,
            'ma_kh' => $ma_kh,
            'trang_thai' => 'đang giao',
            'ma_ct_dh' =>  $data_ct_kh['ma_ct_dh'],
        ];
        insert_dh($data);
        
        
    }

    unset($_SESSION['cart']);
    header("location: /thoi_trang_adidas/view/chi_tiet_dh.php?ma_ct_dh=" .  $data_ct_kh['ma_ct_dh']);
}


