<?php
session_start();
// if (isset($_SESSION['member']) || isset($_SESSION['admin'])) {
// 	header("Location:dang_nhap.php");
// }
require_once './../../dao/pdo.php';
require_once './../../dao/khach_hang.php';
if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['mat_khau'];
    $sql ="SELECT * FROM khach_hang WHERE email = '$email' AND mat_khau = '$password'";
    // var_dump($sql);die;
    
    $admin = pdo_query_one($sql);
    if(empty($email)==true) {
        $_SESSION['error']= "<h2>email này không được để trống</h2>";
        header("Location: ./../../view/login.php");
        die;
    }
    if(empty($password)==true) {
        $_SESSION['error']= "<h2>mật khẩu không được để trống</h2>";
        header("Location: ./../../view/login.php");
        die;
    }
    if($admin == false) {
        $_SESSION['error']="<h2>email hoặc mật khẩu không chính xác</h2>";
        header("Location: ./../../view/login.php");
        die;
    }
    if($admin['vai_tro']=="0") {
        $_SESSION['email'] = $admin['email'];
        header("Location: ./../../view/");
        die;
    }else{
        $_SESSION['email1'] = $admin['vai_tro']['1'];
        header("Location: ./../../admin/");
        die;
    }
}   
?>
