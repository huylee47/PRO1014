<?php
require_once "model/taikhoan.php";
if (!isset($_POST['dangnhap'])) {
    include_once "./dangnhap.php";
} else {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $checkuser = check_user($username, $password);
    if (is_array($checkuser)) {
        $_SESSION['user'] = $username;
        $_SESSION['quyen'] = $checkuser['quyen'];
        echo $_SESSION['quyen'];
        header("location: index.php");
    } else {
        echo $thongbao = "Tài khoản không tồn tại";
    }
}
