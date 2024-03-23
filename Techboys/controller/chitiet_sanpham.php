<?php
require_once './view/header.php';
require_once 'model/sanpham.php';
$listsanpham=load_sanpham();
if (isset($_GET['id'])) {
    $listSanPham = layHetSanPhamTheoId($_GET['id']);
}
require_once './view/chitiet_sanpham.php';
require_once './view/footer.php';