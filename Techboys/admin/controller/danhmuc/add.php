<?php
if (!isset($_POST['themdanhmuc'])) {
    require_once 'view/danhmuc/add.php';
} else {
    require_once 'model/danhmuc.php';
    if (isset($_POST['ten'])) {
        $tendm = $_POST['ten'];
        them_danhmuc($tendm);
    }
    echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listdanhmuc';</script>";
    exit;
}
