<?php
require_once "./../../dao/slider.php";
$ma_slider = intval($_GET['ma_slider']);
delete_slider($ma_slider);
header("Location: index.php");