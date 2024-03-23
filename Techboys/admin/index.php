<?php
session_start();
require_once 'view/header.php';
// aaaaaaaaaaaaaaaaaaaaaa
if (($_GET == [])) {
    require_once 'view/home.php';
} else {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'listdanhmuc':
                require_once "controller/danhmuc/list.php";
                break;
            case 'themdanhmuc':
                require_once "controller/danhmuc/add.php";
                break;
            case 'xoadanhmuc':
                require_once "controller/danhmuc/xoa.php";
                break;
            case 'suadanhmuc':
                require_once "controller/danhmuc/update.php";
                break;
            case 'chitietdanhmuc':
                require_once "controller/sanpham/list.php";
                break;
            case 'listsanpham':
                require_once "controller/sanpham/list_sp_all.php";
                break;
            case 'chitietsanpham':
                require_once "chitietsanpham.php";
                break;
            case 'themsanpham':
                require_once "controller/sanpham/add.php";
                break;
            case 'suasanpham':
                require_once "controller/sanpham/update.php";
                break;
            case 'xoasanpham':
                require_once "controller/sanpham/xoa.php";
                break;
            case 'listvoucher':
                require_once "controller/voucher/list.php";
                break;
            case 'themvoucher':
                require_once "controller/voucher/add.php";
                break;
            case 'xoavoucher':
                require_once "controller/voucher/xoa.php";
                break;
            case 'suavoucher':
                require_once "controller/voucher/update.php";
                break;
            case 'listbinhluan':
                require_once "controller/binhluan/list.php";
                break;
            case 'anbinhluan':
                require_once "controller/binhluan/hide.php";
                break;
            case 'xoabinhluan':
                require_once "controller/binhluan/xoa.php";
                break;
            case 'hienbinhluan':
                require_once "controller/binhluan/show.php";
                break;
            case 'listhoadon':
                require_once "controller/hoadon/list.php";
                break;
            case 'xoahoadon':
                require_once "controller/hoadon/xoa.php";
                break;
            case 'chitiethoadon':
                require_once "controller/hoadon/chitiethoadon.php";
                break;
        }
    }
}

require_once 'view/footer.php';
