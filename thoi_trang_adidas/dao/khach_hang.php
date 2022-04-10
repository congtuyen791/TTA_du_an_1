<?php
require_once "pdo.php";

function getAll_kh(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

function insert(array $data){
    $conn = getConnection();
    $sql = "INSERT INTO khach_hang(ten_kh,email,mat_khau,dia_chi,gioi_tinh,vai_tro)
    VALUES(:ten_kh, :email, :mat_khau, :dia_chi, :gioi_tinh, :vai_tro)";
    $statement = $conn->prepare($sql);
    $statement->execute($data);
}
function update_kh(array $data){
    $conn = getConnection();
    $sql = "UPDATE khach_hang SET ten_kh = :ten_kh, email = :email, mat_khau = :mat_khau, dia_chi = :dia_chi, gioi_tinh = :gioi_tinh, vai_tro = :vai_tro WHERE ma_kh = :ma_kh";
    $statement = $conn->prepare($sql);
    $statement->execute($data);
    return true;
}
function delete(int $ma_kh){
    $conn = getConnection();
    $sql = "DELETE FROM khach_hang WHERE ma_kh = :ma_kh";
    $statement = $conn->prepare($sql);
    $statement->execute([':ma_kh' => $ma_kh]);
}
function select_email(array $ma_kh){
    $conn = getConnection();
    $sql = "SELECT * FROM khach_hang WHERE ma_kh = '$ma_kh'";
    $stm = $conn->prepare($sql);
    $stm->execute([ 'ma_kh' => $ma_kh ]);
    $rowData = $stm->fetch();
    $data_slider = [

        'ma_kh' => $rowData['ma_kh'],
        'ten_kh' => $rowData['ten_kh'],
        'email' => $rowData['email'],
        'dia_chi' => $rowData['dia_chi'],
        'gioi_tinh' => $rowData['gioi_tinh'],
    ];

    return $data_slider;
}