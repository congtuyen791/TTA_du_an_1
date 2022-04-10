<?php
require_once "pdo.php";

function getAll_dh(int $ma_ct_dh)
{
    $conn = getConnection();
    $sql = "SELECT * FROM don_hang WHERE ma_ct_dh = :ma_ct_dh";
    $stm = $conn->prepare($sql);
    $stm->execute(['ma_ct_dh' => $ma_ct_dh]);
    $data_dh = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_dh' => $rowData['ma_dh'],
            'ma_hh' => $rowData['ma_hh'],
            'so_luong_hh' => $rowData['so_luong_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia_hh' => $rowData['gia_hh'],
            'ma_kh' => $rowData['ma_kh'],
            'trang_thai' => $rowData['trang_thai'],
            'ma_ct_dh' => $rowData['ma_ct_dh'],
        ];
        array_push($data_dh, $row);
    }
    return $data_dh;
}
function getAll_ct_dh()
{
    $conn = getConnection();
    $sql = "SELECT * FROM chi_tiet_dh ORDER BY ma_ct_dh DESC";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_ct_dh = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_ct_dh' => $rowData['ma_ct_dh'],
            'ma_kh' => $rowData['ma_kh'],
            'ten_kh' => $rowData['ten_kh'],
            'so_luong' => $rowData['so_luong'],
            'trang_thai' => $rowData['trang_thai'],
            'dia_chi' => $rowData['dia_chi'],
            'sdt' => $rowData['sdt'],
            'tong_tien' => $rowData['tong_tien'],
            'ngay_tao' => $rowData['ngay_tao'],
        ];
        array_push($ht_ct_dh, $row);
    }
    return $ht_ct_dh;
}
function select_ct_dh(int $ma_ct_dh)
{
    $conn = getConnection();
    $sql = "SELECT * FROM chi_tiet_dh where ma_ct_dh = :ma_ct_dh";
    $stm = $conn->prepare($sql);
    $stm->execute(['ma_ct_dh' => $ma_ct_dh]);
    $rowData = $stm->fetch();
    $data = [
        'ma_ct_dh' => $rowData['ma_ct_dh'],
        'ma_kh' => $rowData['ma_kh'],
        'ten_kh' => $rowData['ten_kh'],
        'so_luong' => $rowData['so_luong'],
        'trang_thai' => $rowData['trang_thai'],
        'dia_chi' => $rowData['dia_chi'],
        'sdt' => $rowData['sdt'],
        'tong_tien' => $rowData['tong_tien'],
        'ngay_tao' => $rowData['ngay_tao'],
    ];

    return $data;
}
function select_id_dh(int $ma_ct_dh)
{
    $conn = getConnection();
    $sql = "SELECT * FROM don_hang WHERE ma_ct_dh = '$ma_ct_dh' ORDER BY ma_ct_dh DESC";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $select_id_dh = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_dh' => $rowData['ma_dh'],
            'ma_hh' => $rowData['ma_hh'],
            'so_luong_hh' => $rowData['so_luong_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia_hh' => $rowData['gia_hh'],
            'ma_kh' => $rowData['ma_kh'],
            'trang_thai' => $rowData['trang_thai'],
            'ma_ct_dh' => $rowData['ma_ct_dh'],
        ];
        array_push($select_id_dh, $row);
    }
    return $select_id_dh;
}


function insert_dh(array $data)
{
    $conn = getConnection();
    $sql = "INSERT INTO don_hang(ma_hh, so_luong_hh, ten_hh, gia_hh, ma_kh, trang_thai, ma_ct_dh) VALUES (:ma_hh, :so_luong_hh, :ten_hh, :gia_hh, :ma_kh, :trang_thai, :ma_ct_dh)";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
}

function finById_ct_dh(int $ma_ct_dh)
{
    $conn = getConnection();
    $sql = "SELECT * FROM chi_tiet_dh WHERE ma_ct_dh = :ma_ct_dh";
    $stm = $conn->prepare($sql);

    $stm->execute(['ma_ct_dh' => $ma_ct_dh]);
    $rowData = $stm->fetch();
    $data_ct_dh = [
        'ma_ct_dh' => $rowData['ma_ct_dh'],
        'ten_kh' => $rowData['ten_kh'],
        'dia_chi' => $rowData['dia_chi'],
        'ngay_tao' => $rowData['ngay_tao'],

    ];

    return $data_ct_dh;
}

function update_dh(array $data)
{
    $conn = getConnection();
    $sql = "UPDATE don_hang SET trang_thai = :trang_thai WHERE ma_dh = :ma_dh";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
}
function delete_dh(int $ma_ct_dh)
{
    $conn = getConnection();
    $sql = "DELETE FROM don_hang WHERE ma_ct_dh = :ma_ct_dh";
    $stm = $conn->prepare($sql);
    $stm->execute(['ma_ct_dh' => $ma_ct_dh]);
}
function delete_ct(int $ma_ct_dh)
{
    $conn = getConnection();
    $sql = "DELETE FROM chi_tiet_dh WHERE ma_ct_dh = :ma_ct_dh";
    $stm = $conn->prepare($sql);
    $stm->execute(['ma_ct_dh' => $ma_ct_dh]);
}

function insert_ct_dh(array $data)
{
    $conn = getConnection();
    $sql = "INSERT INTO chi_tiet_dh(ma_kh, ten_kh, so_luong, trang_thai, dia_chi, sdt, tong_tien, ngay_tao) VALUES (:ma_kh, :ten_kh, :so_luong, :trang_thai, :dia_chi, :sdt, :tong_tien, :ngay_tao)";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
}
