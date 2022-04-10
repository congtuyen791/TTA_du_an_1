<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            color: red;
            font-size: 15px;
        }
    </style>
</head>
<body>
   
    <form action="kt_them.php" method="post">
    <?php if(isset($_SESSION['error1'])){
        echo $_SESSION['error1'];
        unset($_SESSION['error1']);
    }?>
        <label for="">Tên khách hàng</label><br>
        <input type="text" name="ten_kh" require><br>
    <?php if(isset($_SESSION['error2'])){
        echo $_SESSION['error2'];
        unset($_SESSION['error2']);
    }?>
        <label for="">Email</label><br>
        <input type="text" name="email" require><br>
    <?php if(isset($_SESSION['error3'])){
        echo $_SESSION['error3'];
        unset($_SESSION['error3']);
    }?>
        <label for="">Mật khẩu</label><br>
        <input type="password" name="mat_khau" require><br>
        <?php if(isset($_SESSION['error4'])){
        echo $_SESSION['error4'];
        unset($_SESSION['error4']);
    }?>
        <label for="">địa chỉ</label><br>
        <input type="text" name="dia_chi" require><br>
        <?php if(isset($_SESSION['error6'])){
        echo $_SESSION['error6'];
        unset($_SESSION['error6']);
    }?>
        <label for="">Giới tính</label><br>
        <select name="gioi_tinh" id=""><br>
            <option value="Nam">nam</option>
            <option value="Nữ">nữ</option>
        </select><br>
    <?php if(isset($_SESSION['error5'])){
        echo $_SESSION['error5'];
        unset($_SESSION['error5']);
    }?> 
        <label for="">Vai tro</label><br>
        <select name="vai_tro" id="">
            <option value="1">admin</option>
            <option value="0">khách hàng</option>
        </select><br>
        <button type="submit" name="data">thêm</button>
        
    </form>
</body>
</html>
