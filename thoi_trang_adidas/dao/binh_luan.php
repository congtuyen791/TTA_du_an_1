<?php
require_once "pdo.php";

function bl($ma_hh) {
    $sql = "SELECT * FROM binh_luan bl INNER JOIN khach_hang kh ON bl.ma_kh=kh.ma_kh WHERE ma_hh=$ma_hh";
    return pdo_query($sql);
}

function binh_luan_insert(array $data) {
    $conn = getConnection();
    $sql = "INSERT INTO binh_luan(noi_dung, ma_kh, ma_hh, ngay_tao) VALUES(:noi_dung, :ma_kh, :ma_hh, :ngay_tao)";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
    return true;
}
function delete_bl(int $ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=:ma_bl";
    $conn = getConnection();
    $statement = $conn->prepare($sql);
    $statement->execute(['ma_bl' => $ma_bl]);
}
function getAll_bl() {
    $conn = getConnection();
    $sql = "SELECT binh_luan.ma_bl,khach_hang.ten_kh, hang_hoa.ten_hh, binh_luan.noi_dung, binh_luan.ngay_tao  FROM ((binh_luan JOIN hang_hoa ON binh_luan.ma_hh=hang_hoa.ma_hh) JOIN khach_hang on binh_luan.ma_kh=khach_hang.ma_kh) ORDER BY khach_hang.ten_kh";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_bl = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_bl' => $rowData['ma_bl'],
            'ten_kh' => $rowData['ten_kh'],
            'noi_dung' => $rowData['noi_dung'],
            'ten_hh' => $rowData['ten_hh'],
            'ngay_tao' => $rowData['ngay_tao'],

        ];
        array_push($ht_bl, $row);
    }
    return $ht_bl;
}