<?php
require_once "./../../dao/danh_muc.php";
session_start();
$data = [
    'ma_dm'=> $_POST['ma_dm'],
    'ten_dm' => $_POST['ten_dm'],
];
//-----------------------------------------kiểm tra form
if(
    empty($data['ten_dm']) == true
    
) {
    $error = "không được bỏ trống form";

    $_SESSION['error'] = $error;
    header("Location: edit.php?ma_dm=" . $data['ma_dm']);
    die;
}


update_dm($data);

header("location: /thoi_trang_adidas/admin/danh_muc/index.php");
