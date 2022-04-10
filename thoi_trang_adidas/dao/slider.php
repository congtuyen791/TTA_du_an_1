<?php

require_once 'pdo.php';
function getAll_slider() {
    $conn = getConnection();
    $sql = "SELECT * FROM slider";
    $stm = $conn->prepare($sql);
    $stm->execute([]);
    $ht_slider = [];
    while (true) {
        $rowData = $stm->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [
            'ma_slider' => $rowData['ma_slider'],
            'ten_slider' => $rowData['ten_slider'],
            'duong_dan' => $rowData['duong_dan'],
            'anh_slider' => $rowData['anh_slider'],
        ];
        array_push($ht_slider, $row);
    }
    return $ht_slider;
}
function findById_slider(int $ma_slider) {
    $conn = getConnection();
    $sql = "SELECT * FROM slider WHERE ma_slider = :ma_slider";
    $stm = $conn->prepare($sql);
    $stm->execute([ 'ma_slider' => $ma_slider ]);
    $rowData = $stm->fetch();
    $data_slider = [
        'ma_slider' => $rowData['ma_slider'],
        'ten_slider' => $rowData['ten_slider'],
        'duong_dan' => $rowData['duong_dan'],
        'anh_slider' => $rowData['anh_slider'],
    ];

    return $data_slider;
}

function insert_slider(array $data) {
    $conn = getConnection();
    $sql = "INSERT INTO slider(ten_slider, duong_dan, anh_slider) VALUE(:ten_slider, :duong_dan, :anh_slider)";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
}
function update_slider(array $data) {
    $conn = getConnection();
    $sql = "UPDATE slider SET ten_slider = :ten_slider, duong_dan = :duong_dan, anh_slider = :anh_slider WHERE ma_slider = :ma_slider";
    $stm = $conn->prepare($sql);
    $stm->execute($data);
    return true;
}
function delete_slider(int $ma_slider) {
    $conn = getConnection();
    $sql = "DELETE FROM slider WHERE ma_slider = :ma_slider";
    $stm = $conn->prepare($sql);
    $stm->execute([ 'ma_slider' => $ma_slider ]);
}

