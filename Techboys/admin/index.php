<?php
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
            case 'giohang':
                require_once "giohang.php";
                break;
            case 'blog':
                require_once "blog.php";
                break;
            case 'chitietsanpham':
                require_once "chitietsanpham.php";
                break;
        }
    }
}

require_once 'view/footer.php';
