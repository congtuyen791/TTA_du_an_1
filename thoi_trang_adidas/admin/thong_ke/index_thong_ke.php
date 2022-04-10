<?php
// require_once "./../../dao/hang_hoa.php";
require_once "tk_khach_hang.php";
$tk_dm = thong_ke_dm();
$tk_hh = thong_ke_hh();
$gia_max = max_hh();
$gia_min = min_hh();
// var_dump($gia_max); die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thống kê</title>
    <link rel="stylesheet" href="../../view/css/product.css">
    <link rel="stylesheet" href="../../view/css/admin.css">
    <link rel="stylesheet" href="../../view/css/category.css">
    <link rel="stylesheet" href="../../view/css/profile.css">
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\admin.png" />
    <style>
        .tieude{
            text-align: center;
            font-size: 50px;
        }
    </style>
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
                    <div class="tieude">
                    <p >Thống kê</p>
                    </div>
                    <div class="text_admin_funcition12">
                        <p>Theo danh mục</p>
                        <p style="color: blue;">
                    </div>
                    <br><br>
                    <table class="category_width">
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>giá thấp nhất</th>
                            <th>giá cao nhất</th>
                        </tr>
                        <?php for ($i = 0; $i < count($tk_dm); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $tk_dm[$i]['ten_dm'] ?>
                                </td>
                                <td>
                                    <?php echo $tk_dm[$i]['sl'] ?>
                                </td>
                                <td>
                                    <?php echo $tk_dm[$i]['gt'] ?>
                                </td>
                                
                                <td>
                                    <?php echo $tk_dm[$i]['gc'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table><br>
                    <div class="text_admin_funcition12">
                        <p>Theo hàng hóa</p>
                        <p style="color: blue;">
                    </div><br>
                    <table class="category_width">
                        <tr>
                            <th>Tổng số hàng hóa</th>
                            <th>giá cao nhất</th>
                            <th>giá thấp nhất</th>
                           
                        </tr>
                        <?php for ($i = 0; $i < count($tk_hh); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $tk_hh[$i]['so_luong'] ?>
                                </td>
                                <td>
                                    <?php echo $tk_hh[$i]['gia_max'] ?>
                                </td>
                                <td>
                                    <?php echo $tk_hh[$i]['gia_min'] ?>
                                </td>
                                
                                
                                
                                
                            </tr>
                        <?php } ?>
                    </table> <br>
                    </table>
                    <div class="text_admin_funcition12">
                        <p>sản phẩm giá cao nhất</p>
                        <p style="color: blue;">
                    </div><br>
                    <table class="category_width">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>giá cao nhất</th>
                           
                        </tr>
                        <?php for ($i = 0; $i < count($gia_max); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $gia_max[$i]['ten_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $gia_max[$i]['gia_hh'] ?>
                                </td>
                                
                                
                                
                                
                            </tr>
                        <?php } ?>
                    </table> <br>
                    </table>
                    <div class="text_admin_funcition12">
                        <p>sản phẩm giá thấp nhất</p>
                        <p style="color: blue;">
                    </div><br>
                    <table class="category_width">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>giá thấp nhất</th>
                           
                        </tr>
                        <?php for ($i = 0; $i < count($gia_min); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $gia_min[$i]['ten_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $gia_min[$i]['gia_hh'] ?>
                                </td>
                                
                                
                                
                                
                            </tr>
                        <?php } ?>
                    </table>
                    <a href="/thoi_trang_adidas/admin/thong_ke/">quay lại</a>
                </div>
                
            </div>
            
    </div>
        
</body>
</html>