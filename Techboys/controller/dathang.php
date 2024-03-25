<?php
require_once './view/header.php';
require_once "model/dathang.php";
$ten = $_POST['ten'];
$sdt = $_POST['sdt'];
$ghichu = $_POST['ghichu'];
$diachi = $_POST['diachi'];
$pttt = $_POST['pttt'];
$idHoaDon = insert_hoadon($ten, $sdt, $ghichu, $diachi, $pttt);
$sanpham = $_SESSION['giohang'];
foreach ($sanpham as $sp) {
    insert_chitethoadon($idHoaDon, $sp['id_sanpham'], $sp['gia'], $sp['soluong']);
}
$_SESSION['giohang'] = [];


require_once "view/giohang.php";