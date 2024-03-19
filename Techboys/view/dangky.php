<?php
require_once "model/taikhoan.php";
    if (isset($_POST['dangky'])){
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['password'];
        insert_taikhoan($email, $user, $pass);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/dangnhap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Ludiflex | Register</title>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Đăng ký</header>
            </div>
            <form action="" method="post">
            <div class="input-field">
                <input type="text" class="input" name="user" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" name="password" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="email" class="input" name="email" placeholder="Email" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" name="dangky" value="Đăng ký">
            </div>
</form>
            <div class="bottom">
                <div class="right">
                <label><a href="dangnhap.php">Bạn đã có tài khoản?</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>