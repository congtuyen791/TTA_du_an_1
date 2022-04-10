<?php
require_once './../../dao/khach_hang.php';

$dskhachhang = getAll_kh();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tất cả tài khoản</title>
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
                        <p>Tất cả Tài khoản </p>
                        <p style="color: blue;">
                    </div>

                    <br>
                    <table class="category_width">
                        <tr>
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Mật khẩu</th>
                            <th>Địa chỉ</th>
                            <th>Giới tính</th>
                            <th>Vai trò</th>
                            <th>Chức năng</th>

                        </tr>
                        <?php for ($i = 0; $i < count($dskhachhang); $i++) { ?>


                            <tr>
                                <td><?php echo $dskhachhang[$i]['ma_kh']; ?></td>

                                <td><?php echo $dskhachhang[$i]['ten_kh']; ?></td>

                                <td><?php echo $dskhachhang[$i]['email']; ?></td>

                                <td><?php echo $dskhachhang[$i]['mat_khau']; ?></td>
                                <td><?php echo $dskhachhang[$i]['dia_chi']; ?></td>

                                <td><?php echo $dskhachhang[$i]['gioi_tinh']; ?></td>

                                <td><?php echo $dskhachhang[$i]['vai_tro']; ?></td>
                                <td><a class="delete_category" href="xoa.php?ma_kh=<?php echo $dskhachhang[$i]['ma_kh'] ?>" onclick="return confirm('bạn có muốn xóa không?')">xóa</a></td>

                            </tr>
                        <?php } ?>
                    </table>

                </div>
            </div>

    </div>
</body>

</html>