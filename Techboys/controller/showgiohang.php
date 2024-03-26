<?php
require_once './view/header.php';

if (!isset($_SESSION['user']) && isset($_SESSION['giohang'])) {
    $gioHangs = $_SESSION['giohang'];
} else {
    $id = $_SESSION['user']['id_taikhoan'];
    require_once './model/giohang.php';
    $gioHangs = layChiTietGioHang($id);
}
$tongtien = 0;
foreach ($gioHangs as $item) {
    $tongtien += $item['gia'] * $item['soluong'];
}
require_once 'view/giohang.php';
require_once 'view/footer.php';
