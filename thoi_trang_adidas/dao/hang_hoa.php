<?php

require_once 'pdo.php';
function getAll_hh() {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_hh = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_hh' => $rowData['ma_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia_hh' => $rowData['gia_hh'],
            'mo_ta' => $rowData['mo_ta'],
            'anh_hh' => $rowData['anh_hh'],
            'ngay_tao' => $rowData['ngay_tao'],
            'gia_km' => $rowData['gia_km'],
            'size' => $rowData['size'],
            'mau_sac' => $rowData['mau_sac'],
            'chat_lieu' => $rowData['chat_lieu'],
            'luot_xem' => $rowData['luot_xem'],
            "so_luong" => $rowData['so_luong'],
            'ma_dm' => $rowData['ma_dm'],
        ];
        array_push($ht_hh, $row);
    }
    return $ht_hh;
}
function getAll_hhm() {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 3";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_hhm = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_hh' => $rowData['ma_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia_hh' => $rowData['gia_hh'],
            'mo_ta' => $rowData['mo_ta'],
            'anh_hh' => $rowData['anh_hh'],
            'ngay_tao' => $rowData['ngay_tao'],
            'gia_km' => $rowData['gia_km'],
            'size' => $rowData['size'],
            'mau_sac' => $rowData['mau_sac'],
            'chat_lieu' => $rowData['chat_lieu'],
            'luot_xem' => $rowData['luot_xem'],
            "so_luong" => $rowData['so_luong'],
            'ma_dm' => $rowData['ma_dm'],
        ];
        array_push($ht_hhm, $row);
    }
    return $ht_hhm;
}
function insert_hh(array $data) {
    $conn = getConnection();
    $sql = "INSERT INTO hang_hoa(ten_hh, gia_hh, mo_ta, anh_hh, ngay_tao, gia_km, size, mau_sac, chat_lieu, so_luong, ma_dm) VALUES(:ten_hh, :gia_hh, :mo_ta, :anh_hh, :ngay_tao, :gia_km, :size, :mau_sac, :chat_lieu, :so_luong, :ma_dm)";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
}

function update_hh(array $data) {
    $conn = getConnection();
    $sql = "UPDATE hang_hoa SET ten_hh = :ten_hh, gia_hh = :gia_hh, mo_ta = :mo_ta, anh_hh = :anh_hh, ngay_tao = :ngay_tao, gia_km = :gia_km, size = :size, mau_sac = :mau_sac, chat_lieu = :chat_lieu, so_luong = :so_luong, ma_dm = :ma_dm WHERE ma_hh = :ma_hh";
    
    $stm = $conn->prepare($sql);
    $stm->execute($data);
    return true;
}
function update_hh_view(int $ma_hh) {
    $conn = getConnection();
    $sql = "UPDATE hang_hoa SET luot_xem = luot_xem+1 WHERE ma_hh = " . $ma_hh;
    $stm = $conn->prepare($sql);
    $stm->execute();
    return true;
}

function findById_hh(int $ma_hh) {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh = :ma_hh";
    $stm = $conn->prepare($sql);

    $stm->execute([ 'ma_hh' => $ma_hh ]);
    $rowData = $stm->fetch();
    $data = [
        'ma_hh' => $rowData['ma_hh'],
        'ten_hh' => $rowData['ten_hh'],
        'gia_hh' => $rowData['gia_hh'],
        'mo_ta' => $rowData['mo_ta'],
        'anh_hh' => $rowData['anh_hh'],
        'ngay_tao' => $rowData['ngay_tao'],
        'gia_km' => $rowData['gia_km'],
        'size' => $rowData['size'],
        'mau_sac' => $rowData['mau_sac'],
        'chat_lieu' => $rowData['chat_lieu'],
        'luot_xem' => $rowData['luot_xem'],
        "so_luong" => $rowData['so_luong'],
        'ma_dm' => $rowData['ma_dm'],
    ];

    return $data;
}
function delete_hh(int $ma_hh) {
    $conn = getConnection();
    $sql = "DELETE FROM hang_hoa WHERE ma_hh = :ma_hh";
    $stm = $conn->prepare($sql);
    $stm->execute([ 'ma_hh' => $ma_hh ]);
}

function top_10_hh() {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa ORDER BY luot_xem DESC LIMIT 10";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_hht = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_hh' => $rowData['ma_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia_hh' => $rowData['gia_hh'],
            'mo_ta' => $rowData['mo_ta'],
            'anh_hh' => $rowData['anh_hh'],
            'ngay_tao' => $rowData['ngay_tao'],
            'gia_km' => $rowData['gia_km'],
            'size' => $rowData['size'],
            'mau_sac' => $rowData['mau_sac'],
            'chat_lieu' => $rowData['chat_lieu'],
            'luot_xem' => $rowData['luot_xem'],
            "so_luong" => $rowData['so_luong'],
            'ma_dm' => $rowData['ma_dm'],
        ];
        array_push($ht_hht, $row);
    }
    return $ht_hht;
}

function search($search) {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa JOIN danh_muc ON hang_hoa.ma_dm=danh_muc.ma_dm WHERE ten_hh  LIKE '%".$search."%' OR ten_dm  LIKE '%".$search."%'";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_hh_tk = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_hh' => $rowData['ma_hh'],
            'ten_hh' => $rowData['ten_hh'],
            'gia_hh' => $rowData['gia_hh'],
            'mo_ta' => $rowData['mo_ta'],
            'anh_hh' => $rowData['anh_hh'],
            'ngay_tao' => $rowData['ngay_tao'],
            'gia_km' => $rowData['gia_km'],
            'size' => $rowData['size'],
            'mau_sac' => $rowData['mau_sac'],
            'chat_lieu' => $rowData['chat_lieu'],
            'luot_xem' => $rowData['luot_xem'],
            "so_luong" => $rowData['so_luong'],
            'ma_dm' => $rowData['ma_dm'],
            'ten_dm' => $rowData['ten_dm'],
        ];
        array_push($ht_hh_tk, $row);
    }
    return $ht_hh_tk;
}