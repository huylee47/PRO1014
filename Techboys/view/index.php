<?php
session_start();
// aaaaaaaaaaaaaaaaaaaaaa
require_once 'header.php';
if (($_GET == [])) {
    require_once 'home.php';
} else {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'cuahang':
                require_once "cuahang.php";
                break;
            case 'lienhe':
                require_once "lienhe.php";
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

require_once 'footer.php';
?>