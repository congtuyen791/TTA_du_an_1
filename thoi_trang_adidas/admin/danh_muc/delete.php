<?php
require_once "./../../dao/danh_muc.php";
$ma_dm = intval($_GET['ma_dm']);
delete_dm($ma_dm);
header("Location: index.php");