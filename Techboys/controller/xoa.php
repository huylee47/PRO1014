<?php
require_once './view/header.php';
if (isset($_GET['act']) && $_GET['act'] == 'xoasanpham' && isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($_SESSION['giohang'] as $key => $item) {
        if ($item['id_sanpham'] == $id) {
            unset($_SESSION['giohang'][$key]);
            break;
        }
    }
}

// tinh tong tien
$tongtien = 0;
if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
    foreach ($_SESSION['giohang'] as $item) {
        $tongtien += $item['gia'] * $item['soluong'];
    }
}

require_once 'view/giohang.php';
require_once 'view/footer.php';