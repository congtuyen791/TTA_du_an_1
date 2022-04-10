<?php
require_once "./../../dao/binh_luan.php";
$ma_bl = intval($_GET['ma_bl']);
delete_bl($ma_bl);
header('location: index.php');