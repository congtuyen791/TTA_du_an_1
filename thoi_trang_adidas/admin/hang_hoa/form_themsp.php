<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="../../view/css/product.css">
    <link rel="stylesheet" href="../../view/css/admin.css">
    <link rel="stylesheet" href="../../view/css/category.css">
    <link rel="stylesheet" href="../../view/css/profile.css"> 
</head>
<body>
    <div class="container">
        
        
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
    
    <form action="xl_them.php" method="post" enctype="multipart/form-data">
        <div class="text_admin_funcition">
            <p>Thêm Sản Phẩm</p>
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
                <label for="">Tên Sản Phẩm:</label>
                <input type="text" name="ten_hh" value="" placeholder="VD: Nhập tên sản phẩm..." class="input_product_bd">
                <span></span>
            </section>
            <hr>
        </div>
        <!-- input số lượng -->
        <div class="text_admin_funcition1">
            <section class="input_product">
                <label for="">Số Lượng Sản Phẩm:</label>
                <input type="number" name="so_luong" min="1" value="" class="input_product_bd">
            </section>
            <hr>
        </div>
        <!-- input ảnh-->
        <div class="text_admin_funcition1">
            <section class="input_product">
                <label for="">Ảnh Sản Phẩm:</label>
                <input type="file" name="anh_hh"><span><p style="color: red;">
                <?php
                    if (isset($_SESSION['error1'])) {
                        echo $_SESSION['error1']; 
                        unset($_SESSION['error1']);
                    }
                ?></p></span>
            </section>
            
            <hr>
        </div>
        <!-- input giá sản phẩm -->
        <div class="text_admin_funcition1">
            <section class="input_product_vnd">
                <label for="">Giá Bán:</label>
                <input type="text" name="gia_hh" value="" class="input_product_bd">
                <span>VND</span>
            </section>
            <hr>
        </div>
        <!-- input giá km sản phẩm -->
        <div class="text_admin_funcition1">
            <section class="input_product_vnd">
                <label for="">Giá Khuyến Mại:</label>
                <input type="text" name="gia_km" value="" class="input_product_bd">
                <span>VND</span>
            </section>
            <hr>
        </div>
        <!-- input danh mục -->
        <div class="text_admin_funcition1">
            <section class="input_product">
                <label for="">Danh Mục:</label>
                <select name="ma_dm" id="">
                    <option value="chon_dm">Chọn danh mục</option>
                <?php require_once "./../../dao/danh_muc.php";
                        $ht_dm = getAll_dm();
                        for ($i=0; $i < count($ht_dm) ; $i++) { ?>
                        <option value="<?php echo $ht_dm[$i]['ma_dm']?>"><?php echo $ht_dm[$i]['ten_dm']?></option>
                <?php } ?>
                   
                </select>
            </section>
            <hr>
        </div>
        <!-- input tên R -->
        <div class="text_admin_funcition1">
            <section class="input_product_cpu">
                <label for="">Size</label>
                <input type="text" name="size"  placeholder="VD: 40" class="input_product_bd">
                <label for="">Màu Sắc</label>
                <input type="text" name="mau_sac"  placeholder="VD: Đỏ''" class="input_product_bd">
                <label for="">Chất liệu</label>
                <input type="text" name="chat_lieu"  placeholder="VD: Cotton" class="input_product_bd">

         
            </section>
            <hr>
        </div>
        <!-- input tên sản phẩm -->
        <div class="text_admin_funcition1">
            <section class="input_product">
                <label for="">Mô Tả:</label>
                <textarea class="mo_ta" name="mo_ta" id="" cols="30" rows="10"></textarea>
            </section>
            <hr>
        </div>
        <div class="add_1">
            <button type="submit" class="bnt" name="submit">Thêm Sản Phẩm</button>
        </div>
    </form>
</div>
            </div>
        
    </div>
</body>

</ht_dmml>