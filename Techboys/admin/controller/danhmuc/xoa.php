<?php
require_once 'model/danhmuc.php';
if (isset($_GET['id'])&& $_GET['id']>0) {
    xoa_danhmuc($_GET['id']);
}
echo "<script type='text/javascript'>window.top.location='http://localhost/PRO1014/Techboys/admin/index.php?act=listdanhmuc';</script>";
    exit;
    ?>