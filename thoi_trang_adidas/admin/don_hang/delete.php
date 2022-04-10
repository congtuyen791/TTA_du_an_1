<?php 
require_once "./../../dao/don_hang.php";
$ma_ct_dh = intval($_GET['ma_ct_dh']);
delete_dh($ma_ct_dh);
delete_ct($ma_ct_dh);
header("location: index.php");