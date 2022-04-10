<?php
require_once "./../../dao/slider.php";
session_start();
$data = [
    'ten_slider' =>$_POST['ten_slider'],
    'duong_dan' =>$_POST['duong_dan'],
];
$fileUpload = $_FILES['anh_slider'];
if (strpos($fileUpload["type"], 'image') === false) {
    $_SESSION['error1'] = "file tải lên phải là ảnh";

    header("location: insert.php");
    die;
}
if($fileUpload['size'] > 3000000) {
    $_SESSION['error1'] = "File vượt quá dung lượng cho phép, phải nhở hơn 3mb!";
    header("Location: insert.php");
    die;
}
$storePath = './../../images/';
$filename = $fileUpload['name'];
$path = $storePath . $filename;
move_uploaded_file($fileUpload['tmp_name'], $path);
$data['anh_slider'] = '/thoi_trang_adidas/images/' . $filename;
//---------------------------------------------------------------check trống-------------
if(empty($data['ten_slider']) == true) {
    $error = "không được bỏ trống form";
    $_SESSION['error'] = $error;
    header("Location: insert.php");
    die;
}
insert_slider($data);
header("location: index.php");