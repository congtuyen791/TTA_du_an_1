<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    header('location: /thoi_trang_adidas/view/');
}