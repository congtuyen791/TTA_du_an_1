<?php
require_once "./../../dao/binh_luan.php";


if(isset($_GET['ma_hh'])){
    $ma_hh = $_GET['ma_hh'];
}

$data = [
    'noi_dung' => $_POST['noi_dung'],
    'ma_kh' => $_POST['ma_kh'],
];
$data['ma_hh'] = $ma_hh;
$ngay_tao = date("Y/m/d");
$data['ngay_tao'] = $ngay_tao;
binh_luan_insert($data);
header("location: /thoi_trang_adidas/view/chitietsp.php?ma_hh=" . $data['ma_hh']);
