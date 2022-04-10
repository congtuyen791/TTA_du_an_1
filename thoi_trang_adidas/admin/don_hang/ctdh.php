<?php
require_once "./../../dao/don_hang.php";
$ma_ct_dh = intval($_GET['ma_ct_dh']);
$data = getAll_dh($ma_ct_dh);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="../../view/css/product.css">
    <link rel="stylesheet" href="../../view/css/admin.css">
    <link rel="stylesheet" href="../../view/css/category.css">
    <link rel="stylesheet" href="../../view/css/profile.css">
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\admin.png" />
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
                        <p>Chi tiết đơn hàng </p>
                        <p style="color: blue;">
                    </div>
                    <br>
                    <table class="category_width">
                        <tr>
                            <th>Mã CTDH</th>
                            <th>Mã hàng hóa</th>
                            <th>Số Lượng</th>
                            <th>Tên hàng hóa</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                        </tr>
                        <?php for ($i = 0; $i < count($data); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $data[$i]['ma_dh'] ?>
                                </td>
                                <td>
                                    <?php echo $data[$i]['ma_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $data[$i]['so_luong_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $data[$i]['ten_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $data[$i]['gia_hh'] ?>
                                </td>
                                <td>
                                    <?php 
                                        $tt = 0;
                                        $tt = $data[$i]['so_luong_hh'] * $data[$i]['gia_hh'];
                                        echo $tt;
                                    
                                    ?>
                                </td>
                                
                            </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>

    </div>
</body>

</html>