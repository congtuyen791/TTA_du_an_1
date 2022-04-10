<?php

require_once 'pdo.php';
function getAll_dm() {
    $conn = getConnection();
    $sql = "SELECT * FROM danh_muc";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_dm = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_dm' => $rowData['ma_dm'],
            'ten_dm' => $rowData['ten_dm'],
        ];
        array_push($ht_dm, $row);
    }
    return $ht_dm;
}
function findById_dm(int $ma_dm) {
    $conn = getConnection();
    $sql = "SELECT * FROM danh_muc WHERE ma_dm = :ma_dm";
    $stm = $conn->prepare($sql);

    $stm->execute([ 'ma_dm' => $ma_dm ]);
    $rowData = $stm->fetch();
    $data_dm = [
        'ma_dm' => $rowData['ma_dm'],
        'ten_dm' => $rowData['ten_dm'],
        
    ];

    return $data_dm;
}

function insert_dm(array $data) {
    $conn = getConnection();
    $sql = "INSERT INTO danh_muc(ten_dm) VALUE(:ten_dm)";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
}
function update_dm(array $data) {
    $conn = getConnection();
    $sql = "UPDATE danh_muc SET ten_dm = :ten_dm WHERE ma_dm = :ma_dm";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
}
function delete_dm(int $ma_dm) {
    $conn = getConnection();
    $sql = "DELETE FROM danh_muc WHERE ma_dm = :ma_dm";
    $stm = $conn->prepare($sql);
    $stm->execute([ 'ma_dm' => $ma_dm ]);
}

function getAll_hh_dm(int $ma_dm) {
    $conn = getConnection();
    $sql = "SELECT * FROM hang_hoa JOIN danh_muc on hang_hoa.ma_dm=danh_muc.ma_dm WHERE danh_muc.ma_dm = :ma_dm";
    $stm = $conn->prepare($sql);
    $stm->execute([ 'ma_dm' => $ma_dm ]);
    $ht_dm_sp = [];
    while (true) {
        $rowData = $stm->fetch();
        if($rowData == false) {
            break;
        }
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
            'ten_dm' => $rowData['ten_dm'],
        ];
        array_push($ht_dm_sp, $data);
    }
    return $ht_dm_sp;
}