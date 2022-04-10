<style>
    menu {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
<header>
    <menu>
        <div class="logo">
            <a href="./index.php"><img src="./img/logo.png" alt="img"></a>
        </div>
        <nav>
            <ul>
                <li><a href="../view/" class="the_a">Sản phẩm</a></li>
                <li><a href="../view/lien_he.php">Liên Hệ</a></li>
                <li><a href="../view/gioi_thieu.php">Giới thiệu</a></li>
            </ul>
        </nav>
        <div class="seach_sanpham">
            <form action="../view/search.php" method="GET">
                <input type="text" name="search" placeholder="Tìm kiếm sản phẩm...">
                <br><b style="color: red; font-size: 10px;">
                    <?php
                    if (isset($_SESSION['otk'])) {
                        echo $_SESSION['otk'];
                        unset($_SESSION['otk']);
                    }
                    ?></b>
        </div>

        <div class="seach_sanpham1">

            <button type="submit" name="ok"><a href=""><img src="./img/icon 12.png" alt="tìm kiếm"></a></button>
            </form>
        </div>
        <?php
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM khach_hang WHERE  email = '$email'";
            $data_kh = pdo_query_one($sql);
            echo '
                            <div class="ok_acout1" style="width: 100px;">
                            <a style="color: black; margin-left:20px;" href="gio_hang.php">Giỏ hàng</a>
                            </div>
                            <div class="ok_acout1">
                                <a href="">' . $data_kh['ten_kh'] . '</a>
                                <a href="\thoi_trang_adidas\admin\khach_hang\logout.php" class="login">Đăng xuất</a>
                            </div>
                            ';
        } else {
            echo '
                            <div class="ok_acout">
                                <a style="color: black; margin-left: 20px;" href="login.php">Đăng nhập</a>
                                <a style="color: black; margin-left:20px;" href="register.php">Đăng ký</a>
                            </div>
                            
                            ';
        }
        ?>
    </menu>
    <br>
</header>