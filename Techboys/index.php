<?php
session_start();
if (($_GET == [])) {
    require_once 'controller/home.php';
} else {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'cuahang':
                require_once "controller/cuahang.php";
                break;
            case 'lienhe':
                require_once "controller/lienhe.php";
                break;
            case 'giohang':
                require_once "controller/giohang.php";
                break;
            case 'blog':
                require_once "controller/blog.php";
                break;
            case 'chitiet_sanpham':
                require_once "controller/chitiet_sanpham.php";
                break;
            case 'chitiet_blog':
                require_once "chitiet_blog.php";
                break;
            case 'dangnhap':
                require_once "controller/dangnhap.php";
                break;
            case 'dangky':
                require_once "controller/dangky.php";
                break;
            case 'dangxuat':
                require_once "controller/dangxuat.php";
                break;
            case 'xoasanpham':
                require_once "controller/xoa.php";
                break;
        }
    }
}

// require_once 'footer.php';
