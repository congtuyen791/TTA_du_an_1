<?php
require_once "./../../dao/hang_hoa.php";

$ht_hh = getAll_hh();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả sản phẩm</title>
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
                    <div class="text_admin_funcition12">
                        <p>Tất cả sản Phẩm </p>
                        <p style="color: blue;">
                    </div>
                    <div class="add_1">
                        <a href="form_themsp.php"><button type="submit" class="bnt" name="submit" style="cursor: pointer;">Thêm sản phẩm</button></a>
                    </div>
                    <br>
                    <table class="category_width">
                        <tr>
                            <th>Mã HH</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>ảnh</th>
                            <th>Giá Bán</th>
                            <th>Giá Sale</th>
                            <th>Danh mục</th>
                            <th>Size</th>
                            <th>Màu sắc</th>
                            <th>Chất liệu</th>
                            <th>Ngày tạo</th>
                            <th>Lượt Xem</th>
                            <th>Chức năng</th>

                        </tr>
                        <?php for ($i = 0; $i < count($ht_hh); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $ht_hh[$i]['ma_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['ten_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['so_luong'] ?>
                                </td>
                                <td>
                                    <img src="<?php echo $ht_hh[$i]['anh_hh'] ?>" alt="" style="width: 120px; max-height: 150px;">
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['gia_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['gia_km'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['ma_dm'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['size'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['mau_sac'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['chat_lieu'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['ngay_tao'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_hh[$i]['luot_xem'] ?>
                                </td>

                                <td class="input_3">
                                    <a class="delete_category" href="delete.php?ma_hh=<?php echo $ht_hh[$i]['ma_hh'] ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')">Xóa</a>
                                    <a class="edit_category1" href="edit.php?ma_hh=<?php echo $ht_hh[$i]['ma_hh'] ?>">Sửa</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>

    </div>
</body>

</html>