<?php
session_start();
require_once "model/taikhoan.php";
if(isset($_POST['dangnhap'])){
    $username=$_POST['user'];
    $password=$_POST['password'];
    $checkuser= check_user($username,$password);
    if(is_array($checkuser)){
        $_SESSION['user']=$username;
        header('Location: index.php');
    }else{
        $thongbao= "Tài khoản không tồn tại";
    }
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
    <title>Ludiflex | Login</title>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Login</header>
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
                <input type="submit" class="submit" name="dangnhap" value="Đăng nhập">
            </div>
</form>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox"  id="check">
                    <label for="check"> Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>