<?php
require_once "./../../dao/danh_muc.php";
session_start();
$data = [
    'ten_dm' =>$_POST['ten_dm'],
];
if(empty($data['ten_dm']) == true) {
    $error = "không được bỏ trống form";
    $_SESSION['error'] = $error;
    header("Location: insert.php");
    die;
}
insert_dm($data);
header("location: index.php");