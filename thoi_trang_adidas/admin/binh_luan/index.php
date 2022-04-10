<?php
require_once "./../../dao/binh_luan.php";
$ht_bl = getAll_bl();
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
                        <p>Tất cả danh mục </p>
                        <p style="color: blue;">
                    </div>
                    <br>
                    <table class="category_width">
                        <tr>
                            <th>Mã bình luận</th>
                            <th>Tên khách hàng</th>
                            <th>Tên hàng hóa</th>
                            <th>Nội dung</th>
                            <th>Ngày tạo</th>
                            <th colspan=2>Chức năng</th>

                        </tr>
                        <?php for ($i = 0; $i < count($ht_bl); $i++) { ?>
                            <tr>
                                <td>
                                    <?php echo $ht_bl[$i]['ma_bl'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_bl[$i]['ten_kh'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_bl[$i]['ten_hh'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_bl[$i]['noi_dung'] ?>
                                </td>
                                <td>
                                    <?php echo $ht_bl[$i]['ngay_tao'] ?>
                                </td>


                                <td class="input_3">
                                    <a class="delete_category" href="delete.php?ma_bl=<?php echo $ht_bl[$i]['ma_bl'] ?>" onclick="return confirm('Bạn có muốn xóa Bình luận này không?')">Xóa</a>

                                </td>

                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>