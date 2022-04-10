<?php
require_once "./../dao/hang_hoa.php";

$ht_hh = getAll_hh();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả sản phẩm</title>
    <link rel="stylesheet" href="../view/css/product.css">
    <link rel="stylesheet" href="../view/css/admin.css">
    <link rel="stylesheet" href="../view/css/category.css">
    <link rel="stylesheet" href="../view/css/profile.css">
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\admin.png" />
</head>

<body>
    <div class="container" style="width: 100%;">
        <main>

            <div class="text_account_admin">
                <img src="../view/img/images.png" alt="">
                <h4>Trang Quản Trị</h4>
            </div>
            <hr>
            <div class="ft_admin">
                <?php
                /**
                 * menu chức năng
                 */
                require_once "menu_qt.php";
                ?>
                <div class="admin_function">
                    <br>
                    <b>
                        <p style="font-size:24px; text-align: center; margin-top: 50px;">Chào mừng bạn đến với trang quản trị website</p>
                    </b>

                </div>
            </div>
        </main>

    </div>
</body>

</html>