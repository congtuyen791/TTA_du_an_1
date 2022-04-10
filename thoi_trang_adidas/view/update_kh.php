<?php
// session_start();
require_once './../dao/pdo.php';
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
    $data_kh = pdo_query_one($sql);
    // var_dump($data_kh); die;
}
function update(array $data){
    $conn = getConnection();
    $sql = "UPDATE khach_hang SET ten_kh = :ten_kh, email = :email, mat_khau = :mat_khau, dia_chi = :dia_chi, gioi_tinh = :gioi_tinh, vai_tro = :vai_tro WHERE ma_kh = :ma_kh";
    $statement = $conn->prepare($sql);
    $statement->execute($data);
    return $statement;
}
if(isset($_POST['update'])){
    $data=[
        'ma_kh' => $_POST['ma_kh'],
        'ten_kh' => $_POST['ten_kh'],
        'email' => $_POST['email'],
        'mat_khau' => $_POST['mat_khau'],
        'dia_chi' => $_POST['dia_chi'],
        'gioi_tinh' => $_POST['gioi_tinh'],
        'vai_tro' => 0,
    ];
    update($data);
    $_SESSION['error'] ="<h2>bạn đã thay đổi thành công</h2>";
    header("Location: profile.php?ma_kh=". $data["ma_kh"]);
    
}