<?php
include 'view/header.php';
// aaaaaaaaaaaaaaaaaaaaaa
if (($_GET == [])) {
    include 'view/home.php';
} else {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'listdanhmuc':
                include "controller/danhmuc/list.php";
                break;
            case 'themdanhmuc':
                include "controller/danhmuc/add.php";
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
