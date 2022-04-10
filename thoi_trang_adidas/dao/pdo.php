<?php

function getConnection() {
    $dbUrl = "mysql: host=localhost; dbname=thoi_trang_adidas";
    $dbUser = "root";
    $dbPass = "";
    $connection = new PDO($dbUrl, $dbUser, $dbPass);
    return $connection;
}
function action($sql){
    $conn = getConnection();
    $conn->exec($sql);
}
   function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    // phân tách mảng và lấy từ vị trí số 1
    $conn = getConnection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row=$stmt->fetchAll();
    return $row;
}
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
    $conn = getConnection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
    }
    catch(PDOException $e){
    throw $e;
    }
    finally{
    unset($conn);
    }
}
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
    $conn = getConnection();
    $stmt = $conn->prepare($sql);
    // var_dump($stmt);
    $stmt->execute($sql_args);
    // var_dump($stmt); die();
    }
    catch(PDOException $e){
    throw $e;
    }
    finally{
    unset($conn);
    }
}