<?php
require_once './view/header.php';
require_once "model/binhluan.php";
require_once 'model/sanpham.php';
require_once 'model/taikhoan.php';
$listsanpham=load_sanpham();
$id_sp=$_GET['id'];
$listbl= list_bl($id_sp);
if (isset($_GET['id'])) {
    $listSanPham = layHetSanPhamTheoId($_GET['id']);
}
require_once './view/chitiet_sanpham.php';
require_once './view/footer.php';