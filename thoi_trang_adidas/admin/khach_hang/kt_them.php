<?php
session_start();
require_once './../../dao/khach_hang.php';

$data =[
   'ten_kh'=>$_POST['ten_kh'],
   'email'=>$_POST['email'],
   'mat_khau'=>$_POST['mat_khau'],
   'dia_chi'=>$_POST['dia_chi'],
   'gioi_tinh'=>$_POST['gioi_tinh'],
   'vai_tro'=>$_POST['vai_tro'],
];
$nlmk = $_POST['mat_khau_lai'];
$email = $_POST['email'];
$regex = "/[.\@\#\$\%\^\&\*\(\)\_\+\!\,\=\-\?]/";
   $conn = getConnection();
   $sql = "SELECT * FROM khach_hang WHERE email = '$email'";
   $statement = $conn->prepare($sql);
   $statement->execute();
if(empty($_POST['ten_kh']) || $_POST['ten_kh'] == ""){
   $_SESSION['error']= "<h2>Tên khách hàng không đc để trống</h2>";
   header("Location: ./../../view/register.php");
   die;
}
elseif(preg_match($regex, $_POST['ten_kh'])){
   $_SESSION['error']= "<h2>Tên không được có kí tự đặc biệt</h2>";
   header("Location: ./../../view/register.php");
   die;
}
elseif(empty($email)|| $email =="") {
   $_SESSION['error']= "<h2>Email khách hàng không đc để trống</h2>";
   header("Location: ./../../view/register.php");
   die;
}elseif(empty($_POST['dia_chi']) || $_POST['dia_chi']==""){
   $_SESSION['error']= "<h2>địa chỉ không được để trống</h2>";
   header("Location: ./../../view/register.php");
}
elseif(empty($_POST['mat_khau']) || $_POST['mat_khau']=="") {
   $_SESSION['error']= "<h2>Mật khẩu khách hàng không đc để trống</h2>";
   header("Location: ./../../view/register.php");
   die;
}
elseif($nlmk != $_POST['mat_khau']) {
   $_SESSION['error']= "<h2>2 mật khẩu không khớp nhau</h2>";
   header("Location: ./../../view/register.php");
   die;
}
elseif($statement->rowCount() > 0){
   $_SESSION['error']= "<h2> email đã được đăng kí</h2>";
   header("Location: ./../../view/register.php");
   die;
}
else{
   insert($data);
   $_SESSION['error']= "<script>alert('Bạn đã đăng ký thành công và bạn sẽ được chuyến đến trang đăng nhập!')</script>";
   header("Location: ./../../view/login.php");
}



 