<?php
require_once "model/taikhoan.php";
if (!isset($_POST['dangnhap'])) {
    include_once "./view/dangnhap.php";
} else {
    $username = $_POST['user'];
    $password = $_POST['password'];
    $checkuser = check_user($username, $password);
    if (is_array($checkuser)) {
        $_SESSION['user'] = $username;
        $_SESSION['quyen'] = $checkuser['quyen'];
        $_SESSION['id_taikhoan'] = $checkuser['id_taikhoan'];
        header("location: index.php");
    } else {
        echo $thongbao = "Tài khoản không tồn tại";
    }
}
