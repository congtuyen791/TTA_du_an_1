<?php
require_once "./../../dao/pdo.php";
function thong_ke_hh(){
    $sql = "SELECT 
                count(hang_hoa.so_luong) as so_luong,
                max(hang_hoa.gia_hh) as gia_max,
                min(hang_hoa.gia_hh) as gia_min
            FROM hang_hoa";
    return pdo_query($sql);
}
function max_hh(){
    $sql = "SELECT *
            FROM hang_hoa
            where hang_hoa.gia_hh =(SELECT max(hang_hoa.gia_hh) as gia_max
            FROM hang_hoa )";
            return pdo_query($sql);
}
function min_hh(){
    $sql = "SELECT *
            FROM hang_hoa
            where hang_hoa.gia_hh =(SELECT min(hang_hoa.gia_hh) as gia_min
            FROM hang_hoa )";
            return pdo_query($sql);
}
function thong_ke_dm(){
    $sql = "SELECT danh_muc.ten_dm,count(hang_hoa.ma_hh) as sl, min(hang_hoa.gia_hh) as gt, max(hang_hoa.gia_hh) as gc FROM danh_muc inner join hang_hoa on danh_muc.ma_dm = hang_hoa.ma_dm group by danh_muc.ma_dm";
    return pdo_query($sql);
}

?>
