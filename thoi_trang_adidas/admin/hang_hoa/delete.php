<?php

require_once "./../../dao/hang_hoa.php";
$ma_hh = intval($_GET['ma_hh']);
delete_hh($ma_hh);
header("Location: index.php");