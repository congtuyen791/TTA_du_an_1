<?php
require_once './../../dao/khach_hang.php';
$data = intval($_GET['ma_kh']);
delete($data);
header("location: index.php");