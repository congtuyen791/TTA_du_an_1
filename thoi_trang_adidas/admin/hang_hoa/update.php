<?php
require_once "./../../dao/hang_hoa.php";
session_start();
$data = [
    'ma_hh'=> $_POST['ma_hh'],
    'ten_hh' => $_POST['ten_hh'],
    'gia_hh' => $_POST['gia_hh'],
    'mo_ta' => $_POST['mo_ta'],
    
    'gia_km' => $_POST['gia_km'],
    'size' => $_POST['size'],
    'mau_sac' => $_POST['mau_sac'],
    'chat_lieu' => $_POST['chat_lieu'],

    'so_luong' => $_POST['so_luong'],
    'ma_dm' => $_POST['ma_dm'],
];
$ngay_tao = date("Y/m/d");
$data['ngay_tao'] = $ngay_tao;
//---------------------------------------kiểm tra ảnh tải lên

$fileUpload = $_FILES['anh_hh'];
$anh_hh = $_GET['anh_hh'];
$storePath = './../../images/';
$filename = $fileUpload['name'];
$path = $storePath . $filename;
if ($filename == '') {
    $data['anh_hh']= $anh_hh;
}else{
    move_uploaded_file($fileUpload['tmp_name'], $path);
    $data['anh_hh'] = '/thoi_trang_adidas/images/' . $filename;
}
//-----------------------------------------kiểm tra form
if(
    empty($data['ten_hh']) == true || 
    empty($data['gia_hh']) == true || 
    empty($data['mo_ta']) == true || 
    empty($data['size']) == true || 
    empty($data['mau_sac']) == true || 
    empty($data['chat_lieu']) == true || 
    empty($data['so_luong']) == true || 
    empty($data['anh_hh']) == true 
    
) {
    $error = "không được bỏ trống form";

    $_SESSION['error'] = $error;
    header("Location: edit.php?ma_hh=" . $data['ma_hh']);
    die;
}
if($fileUpload['size'] > 3000000) {
    $error = "File vượt quá dung lượng cho phép, phải nhở hơn 3mb!";

    $_SESSION['error'] = $error;
    header("Location: edit.php?ma_hh=" . $data['ma_hh']);
    die;
}
if ($_POST['ma_dm'] == 'chon_dm') {
    $error = "Bạn phải chọn danh mục";
    $_SESSION['error'] = $error;
    header("Location: edit.php?ma_hh=" . $data['ma_hh']);
    die;
}

update_hh($data);

header("location: /thoi_trang_adidas/admin/hang_hoa/index.php");
