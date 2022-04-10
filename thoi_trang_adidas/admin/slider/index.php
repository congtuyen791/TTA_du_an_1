<?php
require_once "./../../dao/slider.php";
$ht_slider = getAll_slider();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị danh mục</title>
    <link rel="stylesheet" href="../../view/css/product.css">
    <link rel="stylesheet" href="../../view/css/admin.css">
    <link rel="stylesheet" href="../../view/css/category.css">
    <link rel="stylesheet" href="../../view/css/profile.css"> 
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\admin.png"/>
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
                        <br>
                        <br>
                        <div class="text_admin_funcition12">
                            <p>Quản lý ảnh slider </p>
                            <p style="color: blue;">
                        </div>
                        <br>
                        <table class="category_width">
                            <tr>
                                <th>Mã slider</th>
                                <th>Tên slider</th>
                                <th>Đường dẫn</th>
                                <th>Ảnh slider</th>
                                <th colspan=2 >Chức năng</th>
                                
                            </tr>
                            <?php for ($i = 0; $i < count( $ht_slider ); $i++) {?>
                                <tr>
                                    <td>
                                        <?php echo $ht_slider[$i]['ma_slider'] ?>
                                    </td>
                                    <td>
                                        <?php echo $ht_slider[$i]['ten_slider'] ?>
                                    </td>
                                    <td>
                                        <?php echo $ht_slider[$i]['duong_dan'] ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo $ht_slider[$i]['anh_slider'] ?>" alt="" style="width: 120px; max-height: 150px;">
                                    </td>
                                    
                                    <td class="input_3">
                                        <a class="delete_category" href="edit.php?ma_slider=<?php echo $ht_slider[$i]['ma_slider'] ?>">Sửa</a>
                                        <a class="delete_category" href="delete.php?ma_slider=<?php echo $ht_slider[$i]['ma_slider'] ?>" onclick="return confirm('Bạn có muốn xóa ảnh này không?')">Xóa</a>
                                       
                                    </td>
                                    
                                </tr>  
                            <?php } ?>
                            
                        </table>
                        <br>
                        <a class="delete_category" href="insert.php" style="cursor: pointer;">Thêm ảnh slider</a>
                    </div>
                </div>
</div>
</body>
</html>