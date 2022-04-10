<?php
session_start();

if (isset($_GET['ma_hh']) == true) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($key == $_GET['ma_hh']) {
            unset($_SESSION['cart'][$key]);
            header("location: /thoi_trang_adidas/view/gio_hang.php");
        }
    }
}
