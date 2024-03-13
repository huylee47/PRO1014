<?php
// aaaaaaaaaaaaaaaaaaaaaa
include 'view/header.php';
if (($_GET == [])) {
    include 'view/home.php';
} else {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'danhmuc':
                include "cuahang.php";
                break;
            case 'sanpham':
                include "lienhe.php";
                break;
            case 'giohang':
                include "giohang.php";
                break;
            case 'blog':
                include "blog.php";
                break;
            case 'chitietsanpham':
                include "chitietsanpham.php";
                break;
        }
    }
}

include 'view/footer.php';
