<?php
require_once "./../../dao/danh_muc.php";
$ht_dm = getAll_dm();
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
                    <form action="xl_insert.php" method="post" enctype="multipart/form-data">
                        <div class="text_admin_funcition">
                            <p>Thêm Danh Mục Sản Phẩm</p>
                            <div class="enroi">
                            <p style="color: red;"></p>
                                </p>
                                <p style="color: blue;"></p>
                            </div>
                        </div>
                        <!-- input tên sản phẩm -->
                        <div class="text_admin_funcition1">
                            <section class="input_product">
                                <label for="">Tên Danh Mục:</label>
                                <input type="text" name="ten_dm" value="" placeholder="Nhập vào tên danh mục" class="input_product_bd">
                                <span></span>
                            </section>
                            <hr>
                        </div>
                
                        <div class="add_1">
                            <button type="submit" class="bnt" name="submit" style="cursor: pointer;">Thêm Danh Mục</button>
                        </div>
                        <hr>
                    </form>
                        
                    </div>
                </div>
</div>
</body>
</html>