<?php
require_once "./../../dao/slider.php";
session_start();
$data = [
    'ma_slider' =>$_POST['ma_slider'],
    'ten_slider' =>$_POST['ten_slider'],
    'duong_dan' =>$_POST['duong_dan'],
];

// if($fileUpload['size'] > 3000000) {
//     $_SESSION['error1'] = "File vượt quá dung lượng cho phép, phải nhở hơn 3mb!";
//     header("Location: edit.php?ma_slider=" . $data['ma_slider']);
//     die;
// }
$fileUpload = $_FILES['anh_slider'];
$anh_slider = $_GET['anh_slider'];

$storePath = './../../images/';
$filename = $fileUpload['name'];
$path = $storePath . $filename;
if ($filename == '') {
    $data['anh_slider']= $anh_slider;
}else{
    move_uploaded_file($fileUpload['tmp_name'], $path);
    $data['anh_slider'] = '/thoi_trang_adidas/images/' . $filename;
}
//-----------------------------------------kiểm tra form
if(
    empty($data['ten_slider']) == true
    
) {
    $_SESSION['error'] = "không được bỏ trống form";
    header("Location: edit.php?ma_slider=" . $data['ma_slider']);
    die;
}


update_slider($data);

header("location: /thoi_trang_adidas/admin/slider/index.php");
