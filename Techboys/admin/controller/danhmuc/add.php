<?php
if (!isset($_POST['themdanhmuc'])) {
    require_once 'view/danhmuc/add.php';
} else {
    require_once 'model/danhmuc.php';
    if (isset($_POST['ten'])) {
        $tendm = $_POST['ten'];
        them_danhmuc($tendm);
    }
    header('location: index.php?act=listdanhmuc');
}
