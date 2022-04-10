<?php
session_start();
require_once "./../../dao/slider.php";
$ma_slider = intval($_GET['ma_slider']);
$data_slider = findById_slider($ma_slider);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <link rel="stylesheet" href="../../view/css/product.css">
    <link rel="stylesheet" href="../../view/css/admin.css">
    <link rel="stylesheet" href="../../view/css/category.css">
    <link rel="stylesheet" href="../../view/css/profile.css">
</head>

<body>
    <div class="container">
        <div class="admin_function">
            <main>

                <div class="text_account_admin">
                    <img src="../../view/img/images.png" alt="">
                    <h4>Trang Quản Trị</h4>

                </div>
                <hr>
                <div class="ft_admin">

                    <?php
                    /**
                     * menu chức năng
                     */
                    require_once "../menu_qt.php";
                    ?>

                    <div class="admin_function">
                        <br>
                        <br>
                        <form action="update.php?anh_slider=<?= $data_slider['anh_slider'] ?>" method="post" enctype="multipart/form-data">
                            <div class="text_admin_funcition">
                                <p>Thêm ảnh slider</p>
                                <div class="enroi">

                                    <p style="color: red;">
                                        <?php
                                        if (isset($_SESSION['error'])) {
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                        }
                                        ?></p>
                                </div>
                            </div>
                            <!-- input tên sản phẩm -->
                            <div class="text_admin_funcition1">
                                <section class="input_product">
                                    <label for="">Tên slider:</label>
                                    <input type="hidden" name="ma_slider" value="<?= $data_slider['ma_slider']; ?>" class="input_product_bd">
                                    <input type="text" name="ten_slider" value="<?= $data_slider['ten_slider']; ?>" class="input_product_bd">
                                    <span></span>
                                </section>
                                <section class="input_product">
                                    <label for="">Đường dẫn:</label>
                                    <input type="text" name="duong_dan" value="<?= $data_slider['duong_dan']; ?>" class="input_product_bd">
                                    <span></span>
                                </section>
                                <section class="input_product">
                                    ảnh cũ: <img src="<?= $data_slider['anh_slider']; ?>" alt="" style="width: 120px; max-height: 150px;"><br>
                                    <label for="">Ảnh mới:</label>
                                    <input type="file" name="anh_slider" value="<?= $data_slider['anh_slider']; ?>" class="input_product_bd">
                                    <span></span>
                                </section>
                                <hr>
                            </div>

                            <div class="add_1">
                                <button type="submit" class="bnt" name="submit" style="cursor: pointer;">Sửa ảnh slider</button>
                            </div>
                            <hr>
                        </form>

                    </div>
                </div>
        </div>
</body>

</html>