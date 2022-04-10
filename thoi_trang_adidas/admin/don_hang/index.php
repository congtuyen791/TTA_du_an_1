<?php
require_once "./../../dao/don_hang.php";

$ht_ct_dh = getAll_ct_dh();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả đơn hàng</title>
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
                        <p>Tất cả đơn hàng </p>
                        <p style="color: blue;">
                    </div>
                    <br>
                    <table class="category_width">
                        <tr>
                            <th>Mã CTDH</th>
                            <th>Tên khách hàng</th>
                            <th>Số Lượng</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Ngày tạo</th>
                            <th>Chức năng</th>

                        </tr>
                        <?php for ($i = 0; $i < count($ht_ct_dh); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['ma_ct_dh'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['ten_kh'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['so_luong'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['sdt'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['dia_chi'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['trang_thai'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['tong_tien'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_ct_dh[$i]['ngay_tao'] ?>
                                </td>

                                <td class="input_3">
                                    <a class="delete_category" href="ctdh.php?ma_ct_dh=<?php echo $ht_ct_dh[$i]['ma_ct_dh'] ?>">Xem chi tiết</a>
                                    <a class="delete_category" href="delete.php?ma_ct_dh=<?php echo $ht_ct_dh[$i]['ma_ct_dh'] ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')">Xóa</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>

    </div>
</body>

</html>