<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản</title>
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/login_register.css">
    <link rel="shortcut icon" type="image/png" href="\thoi_trang_adidas\view\img\logo_white.png" />
</head>

<body>
    <div class="container">
        <?php require_once "./layout/header_login.php"; ?>
        <main>


            <div class="admin_function">
                <br>
                <div class="text_admin_funcition12">
                </div>
                <hr>
                <br>
                <div class="form_regiter">

                    <body>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 mx-auto">
                                    <div id="first">
                                        <div class="myform form ">
                                            <div class="logo mb-3">
                                                <div class="col-md-12 text-center">
                                                    <h1>Đăng Nhập</h1>
                                                </div>
                                            </div>
                                            <div class="from_dk">
                                                <form action="./../admin/khach_hang/dang_nhap.php" method="post">
                                                    <div style="color: red; font-size: 10px;">
                                                        <?php if (isset($_SESSION['error'])) {
                                                            echo $_SESSION['error'];
                                                            unset($_SESSION['error']);
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Địa chỉ email</label>

                                                        <input type="text" name="email" value="" class="form-control" id="email" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Mật khẩu</label><br>
                                                        <input type="password" name="mat_khau" value="" id="password" class="form-control" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="col-md-12 text-center ">
                                                        <button type="submit" name="login" class=" btn btn-block mybtn btn-primary tx-tfm">Đăng nhập</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <p class="text-center">Không có tài khoản? <a href="register.php" id="signup">Đăng ký tại đây</a></p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </body>
                </div>
            </div>


        </main>
        <hr>
        <br>
        <br>
        <hr>
        <?php require_once "./layout/footer.php"; ?>


    </div>


</body>

</html>